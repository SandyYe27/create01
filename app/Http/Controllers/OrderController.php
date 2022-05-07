<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;


class OrderController extends Controller
{
    public function index(){

        $order = Order::get();
        $header = '訂單管理-列表頁';
        $slot = '';
        return view('order.index', compact('order','header','slot'));

    }
    public function edit($id){

        $order = Order::find($id);
        $header = '訂單管理-編輯頁';
        $slot = '';
        return view('order.edit', compact('order','header','slot'));

    }

}
