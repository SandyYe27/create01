@extends('layouts.app')
    @section('pageTitle')
        修改訂單
    @endsection

    @section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
        <style>
            a{
                text-decoration: none;
            }
            hr{
                width: 90%;
                margin: 0 auto;
            }
            nav{
                /* background-color: aquamarine; */
                /* padding: 10px 120px; */
                /* width: 100%; */
                /* position: relative; */
            }
            @media (max-width:1285px) {
                nav{
                    padding: 10px;
                }
            }

            nav img{
                width: 110px;
            }
            nav > .nav-logo-box{
                width: 120px;
                height: 70px;

            }
            .bi-justify-right{
                display: none;

            }
            nav .btn{
                color: rgb(86, 86, 86);
                height: 50px;
                font-size: 15px;
                font-weight: 600;
            }
            nav .btn:hover{
                background-color: rgb(220, 220, 220);
            }
            nav i{
                color: rgb(86, 86, 86);
                height: 50px;
                display: flex;
                align-items: center;
            }
            @media (max-width:768px) {
                nav img{
                    width: 80px;
                }
                .navbar-right-button{
                    display: none;
                }
            }

            nav label{
                width: 40px;
                height: 40px;
                display: none;

            }
            nav label > div{
                width: 20px;
                height: 20px;
                margin-top: 10px;
                background-image: url('{{asset('img/bootstrap.img/qJeRpp_WmKGWrqc.jpeg')}}');

                background-size: cover;
                background-color: aquamarine;
            }
            nav label:hover{
                cursor: pointer;
            }
            @media (max-width:768px) {
                nav label{
                    display: block;
                }
            }
            nav .ham-div{
                /* height: 250px; */
                display: none;
                background-color: rgb(255, 255, 255);
                /* position: absolute; */
                top: 80px;
                z-index: 1;
                margin-left: -10px;
            }

            #ham{
                width: 30px;
                height: 30px;
            }
            #ham:checked {
                background-image: url('./img/x.images.png');
            }
            #ham:checked ~ div{
                display: block;
                width: unset;
            }

            main{
                background-color: rgba(209, 213,219);
                /* 背景色 */
                padding-top: 50px;
                padding-bottom: 50px;

            }
            #shopping-step01{
                width: 1030px;
                margin: 0 auto;
                background-color: rgb(241, 242, 245);
                /* 中間主區塊色 */
                border-radius: 10px;
            }
            @media (max-width:1039px) {
                #shopping-step01{
                    width: 100%;
                }
            }
            @media (max-width:785px) {
                #shopping-step01{
                    width: 460px;
                }
                .steps{
                    font-size: 10px;
                }
            }
            @media (max-width:460px) {
                #shopping-step01{
                    width: 100%;
                }
            }
            #shopping-step01 .container_xxl{
                /* height: 850px; */
                position: relative;
            }
            .list-detail{
                font-size: 25px;
                height: 80px;
            }
            .dishes-list-box{
                width: 90%;
                height: 120px;
            }


        </style>
    @endsection

    @section('main')
        <section id="shopping-step01" class="pt-3 pb-5">
            <div class="container_xxl">
                <div class="list-detail ms-5 d-flex align-items-center">訂單明細</div>
                <div class="mb-3">
                    {{-- @foreach ($陣列 as $item) --}}
                    @foreach ($order->detail as $item)
                    <div class="dishes-list-box d-flex align-items-center ms-5 justify-content-between">
                        <div class="d-flex meal-detail mt-3">
                            <img src="{{ $item->product->img_path }}" class="me-1" style="width:60px; height: 60px; border-radius: 50%;">
                            <div class="dishes-name-num">
                                <div>
                                    <p>{{$item->product->product_name}}</p>
                                </div>
                                <div>
                                    <p>#{{$item->product->id}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex how-many-how-much align-items-center me-5" >
                            <div class="d-flex" style="font-weight: 600;width: 50px;">
                                &nbsp;
                                <div> x{{$item->qty}}</div>
                                &nbsp;
                            </div>
                            <div style="width:60px;">NT${{$item->qty * $item->product->product_price}}</div>
                        </div>
                    </div>
                    <hr>
                    @endforeach
                </div>
                <div class="col-md-12 ps-5 pe-5">
                    {{-- 訂單編號 --}}
                    <div class="h6 mb-3 col-md-12">訂單編號：{{$order->id}}</div>

                    {{-- 會員id --}}
                    <div class="h6 mb-3 col-md-12">會員編號：{{$order->user_id}}</div>

                    {{-- 會員姓名 --}}
                    <div class="h6 mb-3 col-md-12">會員姓名：{{$order->name}}</div>

                    {{-- 信箱 --}}
                    <div class="h6 mb-3 col-md-12">會員信箱：{{$order->email}}</div>

                    {{-- 會員電話 --}}
                    <div class="h6 mb-3 col-md-12">會員電話：{{$order->phone}}</div>

                    <form action="/order/update/{{$order->id}}" method="POST">
                        @csrf
                        <label class="h6" for="status">訂單狀態</label>
                        <select name="status" id="status" class="col-md-12">
                            <option value="1" @if ($order->status == 1) selected @endif>未付款</option>
                            <option value="2" @if ($order->status == 2) selected @endif>已付款</option>
                            <option value="3" @if ($order->status == 3) selected @endif>已出貨</option>
                            <option value="4" @if ($order->status == 4) selected @endif>已結單</option>
                            <option value="5" @if ($order->status == 5) selected @endif>已取消</option>
                        </select>

                        {{-- 備註 --}}
                        <label class="h6 mt-3" for="ps">備註</label>
                        <textarea name="ps" id="ps" class="col-md-12 mb-3">{{$order->ps}}</textarea>

                        {{-- 按鈕 --}}
                        <hr>
                        <div class="col-md-12 d-flex justify-content-between mt-3">
                            <input type="button" onclick="location.href='/order' " value="取消修改" style="border:1px solid gray ;width: 130px;height: 50px;">
                            <input type="reset" style="border:1px solid gray ;width: 130px;height: 50px;">
                            <input class="btn btn-success align-self-center" type="submit" style="width: 130px;height: 50px;" value="儲存修改">

                        </div>
                    </form>
                </div>
            </div>
        </section>
    @endsection
    @section('js')
        <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    @endsection

