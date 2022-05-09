<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Comments;
use App\Models\Good;
use App\Models\ShoppingCart;
use Illuminate\Support\Facades\Auth;



class Controller extends BaseController

{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        $data1 = DB::table('news')->take(3)->get();   //最舊3筆
        $data2 = DB::table('news')->orderBy('id' , 'desc')->take(3)->get(); //最新3筆且依原本順序排列 543
        $data3 = DB::table('news')->inRandomOrder()->take(3)->get();//隨機3筆

        $good1 = Good::inRandomOrder()->take(8)->get();
        $good2 = Good::inRandomOrder()->take(1)->get();

        // dd($data1,$data2,$data3);
        return view('index' ,compact('data2', 'good1','good2'));


    }
    // public function abcd(){
    //     return view('切微軟');
    // }


    public function product($id){

        $product = Good::find($id);

        return view('product_inside',compact('product'));

    }

    public function add_cart(Request $request){

        $product = Good::find($request->product_id);

        // 檢查輸入的購買數量合不合理
        if ($request->add_qty > $product->product_amount){
            $result = [
                'result' => 'error',
                'message' => '欲購買數量超過庫存，請重新選擇或聯絡客服',
            ];
            return $result;

        }elseif($request->add_qty < 1){
            $result = [
                'result' => 'error',
                'message' => '購買數量異常，請重新確認或聯絡客服',
            ];
            return $result;
        }

        //檢查是否有登入
        if(!Auth::check()){
            $result = [
                'result' => 'error',
                'message' => '請先登入',
            ];
            return $result;
        }

        ShoppingCart::create([
            'product_id' => $request->product_id,
            'user_id' => Auth::user()->id,
            'qty' => $request->add_qty,
        ]);
        $result =[
            'result' => 'success',
        ];
        return $result;
    }


    public function login(){
        return view('shopping.login');
    }


    public function comment(){ //這段的目的是抓取資料庫的所有留言回傳給頁面

        // $comments = DB::table('comments')->orderBy('id' , 'desc')->take(3)->get();直接存取
        // dd($comments);

        $comments = Comments::orderBy('id' , 'desc')->take(5)->get();//使用model抓資料

        // dd($comments);
        return view('.shopping.comment',compact('comments'));

    }



    public function save_comment(Request $request){
        // DD($request->all());

        //DB直接操作
        // DB::table('comments')->insert([

        //     'title'=>$request->title,
        //     'name'=>$request->name,
        //     'context'=>$request->content,
        //     'email'=>'',
        // ]);

        //用model操作
        Comments::create([
            'title'=> $request->title,
            'name'=> $request->name,
            'context'=> $request->content,
            'email'=>'',
        ]);

        return redirect('/comment');
    }

    public function delete_comment($id){

        // DB::table('comments')->where('id',$id)->delete();//DB操作

        Comments::where('id',$id)->delete();//model操作

        return redirect('/comment');
    }

    public function edit_comment($id){

        // $comments = DB::table('comments')->where('id',$id)->get();
        // $comment = DB::table('comments')->find($id);//用first()抓資料，結果不會是陣列


        $comment = Comments::find($id);//用model抓資料

        return view('shopping.edit',compact('comment'));


    }
    
    public function update_comment($id, Request $request){
        //方法一，DB操作
        // DB::table('comments')->where('id',$id)->update([
        //     'title'=>$request->title,
        //     'name'=>$request->name,
        //     'context'=>$request->content,
        //     'email'=>'',
        // ]);

        //方法二，model操作
        Comments::where('id',$id)->update([
            'title'=>$request->title,
            'name'=>$request->name,
            'context'=>$request->content,
            'email'=>'',
        ]);

        return redirect('/comment');//redirect('裡面放網址')

    }
}
