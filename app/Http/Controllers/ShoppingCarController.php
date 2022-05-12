<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

use App\Models\ShoppingCart;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Mail\OrderComplete;



class ShoppingCarController extends Controller

{

    public function step01(){
        //先抓登入的使用者，因為要搜尋屬於他的購物清單
        $user = Auth::id(); //等於Auth::user()->id;
        $shopping = ShoppingCart::where('user_id',$user)->get();
        //where('user_id','=',$user)三個參數，比較左右兩邊是否相同時，中間的'='可以省略，所以也可以寫成where('user_id',$user)

        $sub_total = 0;
        foreach ($shopping as $value) {
            $sub_total += $value->qty * $value->product->product_price;
        }

        return view('.shopping.checkedout1', compact('shopping','sub_total'));
    }


    public function step02(Request $request){

        // session >>> 要帶到下一頁的資料寫進去，資料會存在伺服器的某個暫存檔案中
        // session的使用方法
        // $plate = ['aaa-1234','bbb-1234','ccc1234'];
        // session([
        //     //key and value(鍵 與 值)
        //     '變數名稱' => '要存的資料',
        //     'myname' => 'John',
        //     'age' => 18,
        //     'mycar' => $plate,

        // ]);

        // session([
        //     //key and value(鍵 與 值)
        //     'amount' => $request->qty,
        // ]);


        // 不使用session 直接將新數量寫入購物車(待買清單)的資料表
        $shopping = ShoppingCart::where('user_id',Auth::id())->get();
        //先將新的數量更新至資料表中
        foreach ($shopping as $key => $item) {
            $item->qty = $request->qty[$key];
            $item->save();
        }



        return view('.shopping.checkedout2');
    }


    public function step03(Request $request){

        //看目前session有哪些資料
        // dd( session()->all() );
        //抓特定想要的資料
        // dd( session()->get('myname'));

        // dd(session()->get('amount'));確定amount有到第3步驟

        session([
            //key and value(鍵 與 值)
            'pay' => $request->pay,
            'deliver'=> $request->deliver,
        ]);
        $deliver = $request->deliver;

        return view('.shopping.checkedout3',compact('deliver'));
    }

    public function step04(Request $request){

        // dump( session()->all() );
        // dump( $request->all() );

        //為了計算單價 將購物車依據使用的ID抓出來
        $merch = ShoppingCart::where('user_id',Auth::id())->get();
        $sub_total = 0;

        //$merch[0]->product->product_price * $amount[0]
        //$merch[1]->product->product_price * $amount[1]
        //$merch[2]->product->product_price * $amount[2]
        //$merch[3]->product->product_price * $amount[3]
        // for ($key=0; $key < count($merch); $key++) {
        //     $goods =  $merch[$key];
        //     $subtotal += $goods->product->product_price * session()->get('amount')[$key];
        // }

        //利用foreach將價格與數量乘起來
        //因為第一步驟的數量本身的順序跟購物車的商品順序一樣，所以直接用相同索引值得資料互乘再相加
        // foreach($merch as $key => $goods){    //foreach的三個參數 $merch是陣列 $key是索引值（index） $goods是陣列裡面的每一個element
        //     $sub_total += $goods->product->product_price * session()->get('amount')[$key];
                        // += 累加
        // }

        foreach($merch as $value){
            $sub_total += $value->qty *  $value->product->product_price;
        }


        // 根據取貨方式決定運費金額, 1 = 黑貓宅急便 所以是150元, 2 = 超商店到店 所以是60元
        if(session()->get('deliver') == '1'){
            $fee = 150;
        }else{
            $fee = 60;
        }

        //3000免運
        // if($sub_total >= 3000){
        //     $fee = 0;
        // }

        $order = Order::create([
            'sub_total' => $sub_total,
            'shipping_fee' => $fee,
            'total' => $sub_total + $fee,
            'product_qty' => count($merch),
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'pay_way' => session()->get('pay'),
            'shipping_way' => session()->get('deliver'),
            'status' => 1,
            'user_id' => Auth::id(),
        ]);

        //address 和 store_address 還沒存

        if ($order->shipping_way == 1) {
            // 如果運送方式(shipping_way)是1 代表是黑貓宅急便 地址要填入address
            $order->address = $request->code.$request->city.$request->address;
        }else{
            // 如果運送方式(shipping_way)是2 代表是店到店 地址要填入store_address
            $order->store_address = $request->code.$request->city.$request->address; //字串相連用 .
        }
        $order->save();//任何資料更動都需儲存 save()


        //第四頁的購買明細
        foreach ($merch as $key => $value) {
            OrderDetail::create([
                'product_id' => $value->product->id,
                'qty' => $value->qty,
                'price' => $value->product->product_price,
                'order_id' => $order->id,

            ]);
        }

        // 訂單建立成功後將購物車資料清除
        ShoppingCart::where('user_id', Auth::id())->delete();

        // 訂單建立成功後寄信給該登入會員的信箱
        $data = [
            'order_id' => $order->id,
            'user_name' => Auth::user()->name,
            'subject' => '服務訂單完成確認信',
        ];

        Mail::to(Auth::user()->email)->send(new OrderComplete($data));

        // dd(Auth::user()->email);

        return redirect('/show_order/'.$order->id);

    }

    public function show_order($id){
        $order = Order::find($id);
        return view('.shopping.checkedout4',compact('order'));
    }

}
