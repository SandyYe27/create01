<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\ShoppingCart;
use App\Models\Good;


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

        // for ($i=0; $i < count($shopping); $i++) {
        //     $item = $shopping[$i];
        //     dump($item->product->product_name);
        //     dump($item->product->img_path);
        //     dump($item->product->product_amount);
        // }

        // foreach ($shopping as $i => $item) {
        //     dump($item->product->product_name);
        //     dump($item->product->img_path);
        //     dump($item->product->product_amount);
        //     dump($item->product->id);

        // }

        return view('.shopping.checkedout1', compact('shopping','sub_total'));
    }


    public function step02(Request $request){

        session([
            //key and value(鍵 與 值)
            'amount' => $request->qty,
        ]);

        //session的使用方法，將想要帶到下一頁的資料寫進去，資料會存在伺服器的某個暫存檔案中，
        // $plate = ['aaa-1234','bbb-1234','ccc1234'];
        // session([
        //     //key and value(鍵 與 值)
        //     '變數名稱' => '要存的資料',
        //     'myname' => 'John',
        //     'age' => 18,
        //     'mycar' => $plate,

        // ]);

        return view('.shopping.checkedout2');
    }


    public function step03(Request $request){

        //看目前session有哪些資料
        // dd( session()->all() );
        //抓特定想要的資料
        // dd( session()->get('myname'));

        // dd(session()->get('amount'));確定amount有到第三步驟

        session([
            //key and value(鍵 與 值)
            'pay' => $request->pay,
            'deliver'=> $request->deliver,
        ]);

        return view('.shopping.checkedout3');
    }


    public function step04(Request $request){

        dump(session()->all());
        dd($request->all());

        return view('.shopping.checkedout4');
    }




}
