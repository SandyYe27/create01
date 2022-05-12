@extends('layouts.app')
    @section('pageTitle')
        新增產品
    @endsection

    @section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <style>
            a{
                text-decoration: none;
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
            #good{
                width: 1030px;
                /* height: 1000px; */
                margin: 0 auto;
                background-color: rgb(241, 242, 245);
                /* 中間主區塊色 */
                border-radius: 10px;

            }
            #good a:hover{
                text-decoration: underline
            }
            @media (max-width:1039px) {
                #good{
                    width: 100%;
                }
            }
            @media (max-width:785px) {
                #good{
                    width: 460px;
                }
                .steps{
                    font-size: 10px;
                }
            }
            @media (max-width:460px) {
                #good{
                    width: 100%;
                }
            }
            #good .container_xxl{
                /* background-color: rgb(213, 232, 255); */
                /* height: 850px; */
                position: relative;

            }

            .footer-top{
                background-color: rgb(255, 255, 255);
                padding-top: 50px;
                padding-bottom: 50px;

            }
            .footer-top .container{
                display: flex;
                padding-left: 50px;
                padding-right: 50px;
            }
            .footer-top .footer-top-left {
                width: 250px;
                margin-right :50px;
                color: rgb(147, 147, 147);
            }
            @media (max-width:1024px) {
                .footer-top .footer-top-left {
                    height: 300px;
                    padding-top: 10%;
                }
            }
            @media (max-width:783px) {
                .footer-top .container{
                    flex-direction: column;
                    align-items: center;
                }
                .footer-top .footer-top-left {
                    padding-top: 0;
                    padding-bottom: 0;
                    margin:0;
                    text-align:center;
                    margin-bottom: -50px;
                }
                .footer-top-right{
                    margin-top: -50px;
                }
            }

            .footer-top .footer-top-left img{
                width: 200px;
            }
            .footer-top-right{
                width: calc(100% - 250px);
            }
            .list-unstyled{
                width: 100%;
                display: flex;
                justify-content: space-between;
                flex-wrap: wrap;

            }

            .list-unstyled > div{
                width: calc((100% - 100px) / 4);
                margin-bottom: 30px;

            }
            @media (max-width:1024px) {
                .list-unstyled > div{
                width: calc((100% - 100px) / 2);
                }
            }
            @media (max-width:783px) {
                .list-unstyled > div{
                width: 100%;
                text-align: center;
                }
            }
            .footer-bottom > .container_xxl{
                padding-top: 10px;
                padding-left: 100px;
                padding-right: 100px;
            }
            .footer-bottom > .container_xxl div{
                color: rgb(123, 123, 123);
                width: 50%;
            }
            @media (max-width:654px) {
                .footer-bottom > .container_xxl{
                    flex-direction: column;
                }
                .footer-bottom > .container_xxl div{
                    width: 100%;
                }
            }
            .footer-bottom > .container_xxl div:last-of-type{
                display: flex;
                justify-content: end;
            }
            @media (max-width:654px) {
                .footer-bottom div{
                    text-align: center;
                }
                .footer-bottom > .container_xxl div:last-of-type{
                justify-content: center;
                }
            }
            .func.col-md-4.d-flex.flex-column.align-items-center > a:hover{
                text-decoration: underline
            }
        </style>
    @endsection

    @section('main')

        <section id="good" class="p-3" >
            <div class="container_xxl p-3">
                <div class="col-md-12 d-flex justify-content-between mb-3">
                    <h2 class="">新增商品</h2>
                </div>
                <div class="ps-5 pe-5">
                    {{-- enctype="multipart/form-data" --}}
                    <form class="form row g-3" action="/good/store" method="post" enctype="multipart/form-data"> {{--需和route對應--}}
                        @csrf
                        {{-- 圖片 --}}
                        <div class="col-md-12 d-flex aling-items-center">
                            <label class="h6 " for="img_path">上傳產品主要圖片
                                <input type="file" name="img_path" id="img_path" accept="image/*">
                            </label>
                        </div>

                        <label class="h6 mb-3" for="second_img">產品次要圖片
                            <input type="file" name="second_img[]" id="second_img" multiple accept="image/*">
                        </label>

                        {{-- 品名 --}}
                        <div>
                            <label class="h6 mb-3" for="product_name">產品名稱</label>
                            <input class="col-md-12" type="text" name="product_name" id="product_name">
                        </div>

                        {{-- 介紹 --}}
                        <div>
                            <label class="h6" for="product_description">產品介紹</label>
                            <textarea  class="col-md-12" name="product_description" id="product_description" cols="30" rows="10"></textarea>
                        </div>

                        {{-- 價格 --}}
                        <div>
                            <label class="h6 mb-3 " for="product_price">產品價格</label>
                            <input class="col-md-12" min="1" type="number" name="product_price" id="product_price">
                        </div>

                        {{-- 數量 --}}
                        <div class="mb-5">
                            <label class="h6 mb-3 " for="product_amount">產品數量</label>
                            <input class="col-md-12" min="1" type="number" name="product_amount" id="product_amount">
                        </div>

                        {{-- 送出按鈕 --}}
                        <div class="col-md-12 d-flex justify-content-between mt-3">
                            <input type ="button" onclick="location.href='/good' " value="返回商品管理" style="border:1px solid gray ; width: 130px;height: 50px;">
                            <input type="reset" style="border:1px solid gray ;width: 130px;height: 50px;">
                            <input class="btn btn-success align-self-center" type="submit" style="width: 130px;height: 50px;" value="新增產品">
                        </div>
                    </form>
                </div>
            </div>
        </section>
    @endsection
