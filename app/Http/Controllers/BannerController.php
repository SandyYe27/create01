<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\FilesController;


class BannerController extends Controller
{

    public function index()//將所有資料從資料庫提出來，並輸出到列表上
    {

        $banner = Banner::get();
        // dd($banner);
        return view('banner.index', compact('banner'));
    }



    public function create()
    {
        //準備新增用的表單給使用者填寫->導去一個頁面
        return view('banner.create');

    }


    public function store(Request $request)
    {
        //將使用者填寫的資料，經過處理（ex:上傳檔案）後新增至資料庫
        // $path = Storage::disk('local')->put('public/banner', $request->img_path);
        // $path = str_replace("public","storage",$path);

        $path = FilesController::imgUpload($request->banner_img, 'banner');

        Banner::create([
            'img_path'=> $path,
            'img_opacity'=> $request->img_opacity,
            'weith'=> $request->weight,
        ]);

        return redirect('/banner');
    }


    public function edit($id)
    {
        //根據id找到想編輯的資料，將資料連同編輯用的畫面回傳給使用者
        $banner = Banner::find($id);//model抓資料
        return view('banner.edit',compact('banner'));
    }


    public function update(Request $request, $id)
    {
        //根據id找到想修改的資料
        $banner = Banner::find($id);

        if($request->hasfile('img_path')){
            //使用者上傳的資料，先經過處理（ex:檔案上傳）後
            // $path = Storage::disk('local')->put('public/banner', $request->img_path);
            // $path = str_replace("public","storage",$path);//將路徑中的public換成storage

            $path = FilesController::imgUpload($request->banner_img, 'banner');

            //將舊有檔案刪除
            // $target = str_replace("/storage","public",$banner->img_path);//將路徑中的storage恢復成public
            // Storage::disk('local')->delete($target);//刪除圖片

            FilesController::deleteUpload($banner->img_path);

            //將新的資料更新到資料庫裡面
            $banner->img_path = $path;
        }

        $banner->img_opacity = $request->img_opacity;
        $banner->weith = $request->weight;
        $banner->save();

        // Banner::find($id)->update([
        //     'img_path'=> $path,
        //     'img_opacity'=> $request->img_opacity,
        //     'weith'=> $request->weight,
        // ]);
        return redirect('/banner');
    }


    public function destroy($id)
    {
        // Banner::where('id',$id)->delete();//model操作

        $banner = Banner::find($id);//使用id找到要刪除的資料，連同相關檔案一起刪除
        // $target = str_replace("/storage","public",$banner->img_path);//路徑中的public恢復成storage
        // Storage::disk('local')->delete($target);//刪除舊圖片

        FilesController::deleteUpload($banner->img_path);
        $banner->delete();

        return redirect('/banner');//刪掉東西後，重新導入列表頁


    }
}
