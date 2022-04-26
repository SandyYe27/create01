<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ShoppingCarController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\GoodController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [Controller::class, 'index']);

Route::get('/login', [Controller::class, 'login']);

Route::get('/comment', [Controller::class, 'comment']);
Route::get('/comment/save', [Controller::class, 'save_comment']);
Route::get('/comment/delete/{id}', [Controller::class, 'delete_comment']);
Route::get('/comment/edit/{id}', [Controller::class, 'edit_comment']);
Route::get('/comment/update/{id}', [Controller::class, 'update_comment']);


Route::get('/shopping1', [ShoppingCarController::class, 'step01']);
Route::get('/shopping2', [ShoppingCarController::class, 'step02']);
Route::get('/shopping3', [ShoppingCarController::class, 'step03']);
Route::get('/shopping4', [ShoppingCarController::class, 'step04']);


//BANNER管理相關頁面，手工建立版本（遵照resful API的規定）
// Route::get('/banner', [BannerController::class, 'index']);//總表
// Route::post('/banner', [BannerController::class, 'store']);//儲存
// Route::get('/banner/create', [BannerController::class, 'create']);//新增頁
// Route::get('/banner/{id}', [BannerController::class, 'show']);//新增頁
// Route::post('/banner/{id}', [BannerController::class, 'edit']);//編輯
// Route::pacth('/banner/{id}', [BannerController::class, 'update']);//更新
// Route::delete('/banner/{id}', [BannerController::class, 'destroy']);//刪除


//一行抵七行
// Route::resource('banner', BannerController::class);


//老師寫法
Route::prefix('/banner')->group(function(){

    Route::get('/', [BannerController::class, 'index']);//總表、列表頁

    Route::get('/create', [BannerController::class, 'create']);//新增頁
    Route::post('/store', [BannerController::class, 'store']);//儲存功能//不能用get

    Route::get('/edit/{id}', [BannerController::class, 'edit']);//編輯頁
    Route::post('/update/{id}', [BannerController::class, 'update']);//更新功能

    Route::delete('/delete/{id}', [BannerController::class, 'destroy']);//刪除
});

Route::prefix('/good')->group(function(){
    Route::get('/', [GoodController::class, 'index']);//總表、列表頁

    Route::get('/create', [GoodController::class, 'create']);//新增頁
    Route::post('/store', [GoodController::class, 'store']);//儲存功能//不能用get

    Route::get('/edit/{id}', [GoodController::class, 'edit']);//編輯頁
    Route::post('/update/{id}', [GoodController::class, 'update']);//更新功能

    Route::delete('/delete/{id}', [GoodController::class, 'destroy']);//刪除
});
