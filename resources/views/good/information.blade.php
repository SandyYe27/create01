@extends('template.template')
    @section('pageTitle')
        編輯產品
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
            body {
                background: #eee;
                font-family: Helvetica Neue, Helvetica, Arial, sans-serif;

            }
            .swiper {
                width: 100%;
                height: 100%;
            }
            .swiper-slide {
                text-align: center;
                font-size: 18px;
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
                height: 100%;
                object-fit: cover;
            }

        </style>
    @endsection


    @section('main')

        <section id="good" class="p-3" >
            <div class="container_xxl p-3">
                <div class="col-md-12 d-flex justify-content-between mb-3">
                    <h2 class="">商品內頁</h2>
                </div>
                <div class="col-md-12 ps-5 pe-5">
                    {{-- enctype="multipart/form-data" --}}
                    <form class="form row g-3" action="" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="product-images d-flex flex-column col-md-6">
                                {{-- 圖片 --}}
                                <img class="col-md-12" src="{{asset('upload/product/16510463406c4b761a28b734fe93831e3fb400ce87.png')}}" >
                                <br>
                                {{-- 次要圖片 --}}
                                <div class="swiper mySwiper ">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="{{asset('upload/product/16514860258f85517967795eeef66c225f7883bdcb.png')}}" alt=""></div>
                                        <div class="swiper-slide"><img src="{{asset('upload/product/16514860257f6ffaa6bb0b408017b62254211691b5.png')}}" alt=""></div>
                                        <div class="swiper-slide"><img src="{{asset('upload/product/165148602537a749d808e46495a8da1e5352d03cae.png')}}" alt=""></div>
                                        <div class="swiper-slide"><img src="{{asset('upload/product/1651046340006f52e9102a8d3be2fe5614f42ba989.png')}}" alt=""></div>
                                        <div class="swiper-slide"><img src="{{asset('upload/product/1651046340e00da03b685a0dd18fb6a08af0923de0.png')}}" alt=""></div>
                                        <div class="swiper-slide"><img src="{{asset('upload/product/16510463406c4b761a28b734fe93831e3fb400ce87.png')}}" alt=""></div>

                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <table>
                                    <tr>
                                        <td colspan="4" class="h3">Nintendo Switch Lite</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="h4" style="color: red">NT$3190</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">「Nintendo Switch Lite」採控制器和主機一體成形、細小輕巧，是方便攜帶外出的手提專用Nintendo Switch。 支援所有可利用手提模式來玩的Nintendo Switch遊戲軟體。 不單止推薦給會經常攜帶外出遊玩的用家，想和已持有Nintendo Switch的家人朋友一起透過網路或鄰近主機連線進行多人遊戲的用家也很適合。</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>剩餘數量 27</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </div>
                            {{-- 按鈕 --}}
                            <input class="btn btn-danger" type="submit" style="width: 130px;height: 50px; margin-left:auto;" value="加入購物車">

                    </form>
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
    @endsection
