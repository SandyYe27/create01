<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Good;
use App\Models\Product_img;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\FilesController;


class GoodController extends Controller
{
    public function index()//將所有資料從資料庫提出來，並輸出到列表上
    {
        $good = Good::get();
        $header = '商品管理-列表頁';
        $slot = '';
        return view('good.index', compact('good','header','slot'));
    }


    public function create()
    {
        //準備新增用的表單給使用者填寫->導去一個頁面
        $header = '商品管理-新增頁';
        $slot = '';
        return view('good.create', compact('header','slot'));

    }

    public function store(Request $request)
    {

        $path = FilesController::imgUpload($request->img_path, 'product');

        $product = Good::create([
            'img_path'=> $path,
            'product_name'=> $request->product_name,
            'product_price'=> $request->product_price,
            'product_amount'=> $request->product_amount,
            'product_description'=> $request->product_description,

        ]);

        //次要圖片 多圖片上傳
        if($request->hasfile('second_img')){
            foreach($request->second_img as $index => $element){

                $path = FilesController::imgUpload($element, 'product');

                Product_img::create([
                    'img_path'=> $path,
                    'product_id'=> $product->id,
                ]);
            }

        }
        return redirect('/good');
    }

    public function edit($id)
    {
        $good = Good::find($id);//model抓資料
        $header = '商品管理-編輯頁';
        $slot = '';

        return view('good.edit',compact('good','header','slot'));
    }

    public function update(Request $request, $id)
    {

        $good = Good::find($id);
        //更換主要圖片
        if($request->hasfile('img_path')){

            FilesController::deleteUpload($good->img_path);
            $path = FilesController::imgUpload($request->img_path, 'product');
            $good->img_path = $path;
        };

        //次要圖片處理

        if($request->hasfile('second_img')){
            foreach($request->second_img as $index => $element){
                $path = FilesController::imgUpload($element, 'product');
                Product_img::create([
                    'img_path'=> $path,
                    'product_id'=> $id,
                ]);
            };
        };
        // dd($good->imgs);

        $good->product_name = $request->product_name;
        $good->product_price = $request->product_price;
        $good->product_amount = $request->product_amount ;
        $good->product_description = $request->product_description ;
        $good->save();

        return redirect('/good');
    }


    public function destroy($id)
    {
        $good = Good::find($id);

        //找出所有 要被刪掉的商品的次要圖片
        $imgs = Product_img::where('product_id',$id)->get();

        //次要圖片可能有很多筆，所以利用foreach迴圈刪資料
        foreach($imgs as $key => $value){
            FilesController::deleteUpload($value->img_path);
            $value->delete();
        }

        FilesController::deleteUpload($good->img_path);
        $good->delete();

        return redirect('/good');//刪掉東西後，重新導入列表頁

    }

    public function delete_img($img_id){
        // 藉由id找到要刪除的次要圖片
        $img = Product_img::find($img_id);
        FilesController::deleteUpload($img->img_path);

        $product_id = $img->product_id;
        $img->delete();

        return redirect('/good/edit/'.$product_id);

    }
}
