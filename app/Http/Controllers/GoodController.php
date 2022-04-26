<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Good;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class GoodController extends Controller
{
    public function index()//將所有資料從資料庫提出來，並輸出到列表上
    {
        $good = Good::get();
        return view('good.index', compact('good'));
    }



    public function create()
    {
        //準備新增用的表單給使用者填寫->導去一個頁面
        return view('good.create');

    }


    public function store(Request $request)
    {
        //將使用者填寫的資料，經過處理（ex:上傳檔案）後新增至資料庫
        $path = Storage::disk('local')->put('public/good', $request->img_path);
        $path = str_replace("public","storage",$path);

        Good::create([
            'img_path'=> '/'.$path,
            'product_name'=> $request->product_name,
            'product_price'=> $request->product_price,
            'product_amount'=> $request->product_amount,
            'product_description'=> $request->product_description,

        ]);

        return redirect('/good');
    }


    public function edit($id)
    {
        //根據id找到想編輯的資料，將資料連同編輯用的畫面回傳給使用者
        $good = Good::find($id);//model抓資料
        return view('good.edit',compact('good'));
    }

    public function update(Request $request, $id)
    {
        //根據id找到想修改的資料
        $good = Good::find($id);

        if($request->hasfile('img_path')){
            //使用者上傳的資料，先經過處理（ex:檔案上傳）後
            $path = Storage::disk('local')->put('public/good', $request->img_path);
            $path = str_replace("public","storage",$path);//將路徑中的public換成storage

            //將舊有檔案刪除
            $target = str_replace("/storage","public",$good->img_path);//將路徑中的storage恢復成public
            Storage::disk('local')->delete($target);//刪除圖片

            //將新的資料更新到資料庫裡面
            $good->img_path = '/'.$path;
        }

        $good->product_name = $request->product_name;
        $good->product_price = $request->product_price;
        $good->product_amount = $request->product_amount ;
        $good->product_description = $request->product_description ;
        $good->save();

        return redirect('/good');
    }


    public function destroy($id)
    {

        $good = Good::find($id);//使用id找到要刪除的資料，連同相關檔案一起刪除
        $target = str_replace("/storage","public",$good->img_path);//路徑中的public恢復成storage
        Storage::disk('local')->delete($target);//刪除舊圖片
        $good->delete();

        return redirect('/good');//刪掉東西後，重新導入列表頁

    }
}
