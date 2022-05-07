@extends('template.template')
    @section('pageTitle')
        商品詳情
    @endsection

    @section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
        <style>
            a{
                text-decoration: none;
            }
            nav{
                padding: 10px 120px;
                background-color: rgb(255, 255, 255);
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
                    margin-top: 10px;
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
            .swiper {
                width: 100%;
            }
            .swiper-slide {
                text-align: center;
                background: #fff;

                /* Center slide text vertically */
                display: -webkit-box;
                display: -ms-flexbox;
                display: -webkit-flex;
                display: flex;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-justify-content: center;
                justify-content: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-align-items: center;
                align-items: center;
            }
            .swiper-slide img {
                display: block;
                width: 100%;
                /* object-fit: cover; */
            }
            .quantity > i:hover{
                cursor: pointer;
            }
            #qty{
                width: 50px;
            }
            .product_detials > div{
                width: 50%;
            }
            @media (max-width:783px) {
                .product_detials > div{
                    margin-bottom: 10px;
                    width: 100% ;
                }

            }

        </style>
    @endsection


    @section('main')

        <section id="good" class="p-3" >
            <div class="container_xxl p-3">
                 {{-- 返回首頁 --}}
                <div class="mb-3">
                    <a href="/" style="color: black"><div style="font-size:18px; font-weight: 600;"> ← 返回首頁</div> </a>
                </div>
                <div class="product_detials col-md-12 ps-3 pe-3 d-flex flex-wrap justify-content-between">
                    <div class="product-images d-flex flex-column ">
                        {{-- 圖片 --}}
                        <img class="col-md-12" src="{{$product->img_path}}" >
                        <br>
                        {{-- 次要圖片 --}}
                        <div class="swiper mySwiper ">
                            <div class="swiper-wrapper">

                                @foreach ($product->imgs as $item)
                                    <div class="swiper-slide"><img src="{{$item->img_path}}" alt=""></div>
                                @endforeach
                            </div>

                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                    {{--詳情 --}}
                    <div class=" d-flex flex-column">

                        <h2 class="ms-3">{{$product->product_name}}</h2>

                        <div class="sum-price h3 mb-4 ms-3" style="color: red;">NT$ {{$product->product_price}}</div>

                        <div class="mb-4 ms-3" >{{$product->product_description}}</div>

                        <div class="h5 mb-4 ms-3" style="color: gray">剩餘數量 {{$product->product_amount}}</div>

                        <div class="quantity d-flex align-self-end mb-4 me-2" >
                            <span class="me-2 mt-1 h6">選擇數量</span>
                            <i class="fa-solid fa-minus mt-1 me-2" id="minus"></i>
                            <input type="number" value="1" name="qty" id="qty">
                            <i class="fa-solid fa-plus mt-1 ms-2" id="plus"></i>
                        </div>

                        <div class="r-button align-self-end">
                            <input type="number" id="product_id" value="{{$product->id}}" hidden>
                            <a class="btn btn-danger" role="button" id="add_product" style="height:45px; display:flex; align-items:center;">加入購物車</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection

    @section('js')
        <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>

        <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
        <script>
            var swiper = new Swiper(".mySwiper", {
              slidesPerView: 3,
              spaceBetween: 10,
              slidesPerGroup: 3,
              loop: true,
              loopFillGroupWithBlank: true,
              pagination: {
                el: ".swiper-pagination",
                clickable: true,
              },
              navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
              },
            });
        </script>

        <script>
            const minus = document.querySelector('#minus')
            const qty = document.querySelector('#qty')
            const plus = document.querySelector('#plus')
            const add_product = document.querySelector('#add_product')


            minus.onclick = function(){
                if(parseInt(qty.value) >= 2){
                    qty.value = parseInt(qty.value) - 1
                }
            }

            plus.onclick = function(){
                if(parseInt(qty.value) < {!! $product->product_amount !!} ){
                    //!!兩個驚嘆號（ 跟{{}}意思一樣 ），但可以檢查字串是否有攻擊事件，把內容轉換成最純粹的字串
                    qty.value = parseInt(qty.value) + 1  //parseInt把字串轉為數字，數字跟數字才能相加（因為字串1 加 字串1 等於11，但我們是要數字相加，所以要轉成數字1加1等於2 ）
                }
            }

            add_product.onclick = function(){

                //在JS建立一個虛擬的form表單
                var formData = new FormData();

                formData.append('add_qty', parseInt(qty.value));
                formData.append('product_id',  {!! $product->id !!} );
                formData.append('_token',  '{!! csrf_token() !!}' );

                // 利用fetch將form表單送到後台
                fetch('/add_to_cart',{
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .catch(error =>{
                    alert('新增失敗，請再試一次')
                    return 'error';
                })
                .then(response =>{
                    console.log(response);

                    if(response != 'error'){
                        if (response.result == 'success')
                            alert('新增成功')
                        else{
                            alert('新增失敗：' + response.message)
                        }
                    }
                });
            }
        </script>

    @endsection
