@extends('layouts.app')
    @section('pageTitle')
        編輯產品
    @endsection

    @section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
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
            .buy-progress{
                /* background-color: rgb(120, 189, 249); */
                padding-top: 20px;

            }
            #good .steps{
                display: flex;
                align-items: center;
                justify-content: center;
                height: 70px;
            }

            #good .steps .step{
                width: 40px;
                height: 40px;
                border-radius: 50%;
                background-color: rgb(255, 255, 255);
                line-height: 40px;
                display: flex;
                align-items: center;
                justify-content: center;
                position: relative;
            }

            #good .steps .step::before{
                /* content: '確認購物車'; */
                content: attr(data-text);
                position: absolute;
                bottom: -40px;
                text-align: center;
                word-break: keep-all;
                color: black;

            }

            #good .steps .buy-progress-bar{
                /* width: 180px; */
                width: 17%;
                height: 8px;
                border-radius: 5px;
                background-color: rgb(221, 221, 221);
                margin: 0px 8px;
            }

            @media (max-width:785px) {
                #good .steps .buy-progress-bar{
                    width: 10%;
                }
            }
            #good .steps .green{
                background-color: rgb(15, 190, 105);
                color: white;
            }
            #good .steps .progress-25::before{
                content: '';
                width: 100%;
                height: 100%;
                background-color: rgb(54, 224, 153);
                display: block;
                border-radius: 5px;
            }
            #good .steps .progress-50::before{
                content: '';
                width: 100%;
                height: 100%;
                background-color: rgb(54, 224, 153);
                display: block;
                border-radius: 5px;
            }
            #good .steps .progress-75::before{
                content: '';
                width: 35%;
                height: 100%;
                background-color: rgb(54, 224, 153);
                display: block;
                border-radius: 5px;
            }
            hr{
                color:rgb(165, 165, 165);
                width: 90%;
                margin: 0 auto;
            }
            main p{
                font-size: 20px;
            }

            table{
                /* width: 300px; */
                position: absolute;
                right: 30px;
                margin-top: 20px;
            }
            td{
                text-align: end;
                width: 50px;
            }
            tr > td:first-of-type{
                color: gray;
                font-size: 13px;
            }
            tr > td:last-of-type{
                font-weight: 600;
                font-size: 20px;
            }
            .next-step{
                width: 90%;
                margin: 0 auto;
                margin-bottom: 30px;
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
        </style>
    @endsection


    @section('main')

        <section id="good" class="p-3" >
            <div class="container_xxl p-3">
                <div class="col-md-12 d-flex justify-content-between mb-3">
                    <h2 class="">編輯產品</h2>
                </div>
                <div class="col-md-12 ps-5 pe-5">
                    {{-- enctype="multipart/form-data" --}}
                    <form class="form row g-3" action="/good/update/{{$good->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                            {{-- 圖片 --}}
                            <div class="h6">目前的主要圖片</div>
                            <img src="{{$good->img_path}}" alt="" style="width: 100%;">
                            {{-- 次要圖片 --}}
                            <label class="h6 mb-3" for="img_path">選擇新的主要圖片
                                <input class="col-md-12" type="file" name="img_path" id="img_path" accept="image/*">
                            </label>

                            <label for="">目前的次要圖片</label>
                            <div class="h6 d-flex flex-wrap">
                                @foreach ($good->imgs as $item)
                                    <div class="col-md-3 d-flex flex-column me-1"  id="sup_img{{$item->id}}">
                                        <img class="mb-3" src="{{$item->img_path}}" alt="">
                                        <button class="btn btn-danger align-self-center" type="button" onclick="delete_img({{$item->id}})">刪除圖片</button>
                                    </div>
                                @endforeach
                            </div>

                            <label class="h6 mb-3" for="second-img">選擇新的次要圖片
                                <input class="col-md-12" type="file" name="second_img[]" id="second_img" multiple accept="image/*">
                            </label>

                            {{-- 名稱 --}}
                            <label class="h6 mb-3" for="product_name">產品名稱
                                <input class="col-md-12" type="text" name="product_name" id="product_name" value="{{$good->product_name}}">
                            </label>

                            {{-- 介紹 --}}
                            <label class="h6 mb-3 " for="product_description">產品介紹
                                <input class="col-md-12" type="text" name="product_description" id="product_description" value="{{$good->product_description}}">
                            </label>

                            {{-- 價格 --}}
                            <label class="h6 mb-3 " for="product_price">產品價格
                                <input class="col-md-12" type="number" name="product_price" id="product_price" value="{{$good->product_price}}">
                            </label>

                            {{-- 數量 --}}
                            <label class="h6 mb-3 " for="product_amount">產品數量
                                <input class="col-md-12" type="number" name="product_amount" id="product_amount" value="{{$good->product_amount}}">
                            </label>

                            {{-- 按鈕 --}}
                            <div class="col-md-12 d-flex justify-content-between mt-3">
                                <input type="button" onclick="location.href='/good' " value="返回產品管理" style="border:1px solid gray ;width: 130px;height: 50px;">
                                <input type="reset" style="border:1px solid gray ;width: 130px;height: 50px;">
                                <input class="btn btn-success align-self-center" type="submit" style="width: 130px;height: 50px;" value="送出">

                            </div>
                    </form>

                    {{-- @foreach ($good->imgs as $item)
                        <form action="/good/delete_img/{{$item->id}}" method="post" hidden id="deleteForm{{$item->id}}">
                            @method('DELETE')
                            @csrf
                        </form>
                    @endforeach --}}

                </div>
            </div>
        </section>
    @endsection

    @section('js')
        <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
        <script>
            function delete_img(id){
                //準備表單以及內部的資料
                let formData = new FormData();
                formData.append('_method','DELETE');
                formData.append('_token',' {{ csrf_token() }} ');
                //將準備好的表單藉由fecth送到後台
                fetch("/good/delete_img/"+id,{
                    method:"POST",
                    body: formData,
                }).then(function(response){
                    //成功從資料庫刪除資料後，將自己的HTML元素消除
                   let element = document.querySelector('#sup_img'+id);
                   element.parentNode.removeChild(element);//從父層刪裡面的元素
                });
            }
        </script>
    @endsection
