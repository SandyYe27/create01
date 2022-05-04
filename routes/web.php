<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ShoppingCarController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\GoodController;
use App\Http\Controllers\AccountController;

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


//商品詳情
Route::get('/product_detail/{id}', [Controller::class, 'product']); //商品內頁
//接受加入購物車的請求
Route::post('/add_to_cart', [Controller::class, 'add_cart']);  //加入購物車



//後台首頁
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','power'])->name('dashboard');//使用auth和power這兩個middleware

require __DIR__.'/auth.php';


//留言相關
Route::get('/comment', [Controller::class, 'comment']);
Route::get('/comment/save', [Controller::class, 'save_comment']);
Route::get('/comment/delete/{id}', [Controller::class, 'delete_comment']);
Route::get('/comment/edit/{id}', [Controller::class, 'edit_comment']);
Route::get('/comment/update/{id}', [Controller::class, 'update_comment']);


//購物車相關
Route::get('/shopping1', [ShoppingCarController::class, 'step01']);
Route::get('/shopping2', [ShoppingCarController::class, 'step02']);
Route::get('/shopping3', [ShoppingCarController::class, 'step03']);
Route::get('/shopping4', [ShoppingCarController::class, 'step04']);


//Banner相關
Route::prefix('/banner')->middleware(['auth','power'])->group(function(){

    Route::get('/', [BannerController::class, 'index']);//總表、列表頁

    Route::get('/create', [BannerController::class, 'create']);//新增頁
    Route::post('/store', [BannerController::class, 'store']);//儲存功能//不能用get

    Route::get('/edit/{id}', [BannerController::class, 'edit']);//編輯頁
    Route::post('/update/{id}', [BannerController::class, 'update']);//更新功能

    Route::delete('/delete/{id}', [BannerController::class, 'destroy']);//刪除
});

//商品相關
Route::prefix('/good')->middleware(['auth','power'])->group(function(){
    Route::get('/', [GoodController::class, 'index']);//總表、列表頁

    Route::get('/create', [GoodController::class, 'create']);//新增頁
    Route::post('/store', [GoodController::class, 'store']);//儲存功能//不能用get

    Route::get('/edit/{id}', [GoodController::class, 'edit']);//編輯頁
    Route::post('/update/{id}', [GoodController::class, 'update']);//更新功能

    Route::delete('/delete/{id}', [GoodController::class, 'destroy']);//刪除
    Route::delete('/delete_img/{img_id}', [GoodController::class, 'delete_img']);//刪除次要圖片

});

//帳號管理相關
Route::prefix('/account')->middleware(['auth','power'])->group(function(){
    Route::get('/', [AccountController::class, 'index']);//總表、列表頁

    Route::get('/create', [AccountController::class, 'create']);//新增頁
    Route::post('/store', [AccountController::class, 'store']);//儲存功能//不能用get

    Route::get('/edit/{id}', [AccountController::class, 'edit']);//編輯頁
    Route::post('/update/{id}', [AccountController::class, 'update']);//更新功能

    Route::delete('/delete/{id}', [AccountController::class, 'destroy']);//刪除

});
