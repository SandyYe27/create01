<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Http\Controllers\FilesController;


class NewsController extends Controller

{
    public function index(){ //將所有資料從資料庫提出來，並輸出到列表上
        $news = News::orderBy('id' , 'desc')->get();
        $header = '商品管理-列表頁';
        $slot = '';
        return view('.news.index',compact('news','header','slot'));

    }

    public function create()
    {
        $header = '文章管理-新增頁';
        $slot = '';
        return view('news.create', compact('header','slot'));

    }

    public function store(Request $request)
    {
        $img_path = FilesController::imgUpload($request->img_path, 'news_img');

        $news = News::create([
            'img'=> $img_path,
            'title'=> $request->title,
            'artical'=> $request->content,
            'author'=> $request->author,

        ]);

        return redirect('/news');
    }

    public function edit($id)
    {
        $news = News::find($id);//model抓資料
        $header = '文章管理-編輯頁';
        $slot = '';

        return view('news.edit',compact('news','header','slot'));
    }

    public function update(Request $request, $id)
    {

        $news = News::find($id);
        //更換主要圖片
        if($request->hasfile('img_path')){
            FilesController::deleteUpload($news->img);
            $img_path = FilesController::imgUpload($request->img_path, 'news_img');
            $news->img = $img_path;
        };

        $news->title = $request->title;
        $news->artical = $request->content;
        $news->author = $request->author;
        $news->save();

        return redirect('/news');
    }

    public function destroy($id)
    {
        $news = News::find($id);//使用id找到要刪除的資料，連同相關檔案一起刪除
        FilesController::deleteUpload($news->img);
        $news->delete();

        return redirect('/news');//刪除某一文章資料後，重新導入列表頁

    }



}
