@extends('template.template')

    @section('pageTitle')
        Checkedout4
    @endsection

    @section('css')
        <style>
            a{
                text-decoration: none;

            }
            nav{
                /* background-color: aquamarine; */
                padding: 10px 120px;
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
                display: none;
                background-color: rgb(255, 255, 255);
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
                /* ????????? */
                padding-top: 50px;
                padding-bottom: 50px;

            }
            #shopping-step04{
                width: 1030px;
                margin: 0 auto;
                background-color: rgb(241, 242, 245);
                /* ?????????????????? */
                border-radius: 10px;
            }
            @media (max-width:1039px) {
                #shopping-step04{
                    width: 100%;
                }
            }
            @media (max-width:785px) {
                #shopping-step04{
                    width: 460px;
                }
                .steps{
                    font-size: 10px;
                }
            }
            @media (max-width:460px) {
                #shopping-step04{
                    width: 100%;
                }
            }

            .buy-progress{
                /* background-color: rgb(120, 189, 249); */
                padding-top: 20px;

            }
            #shopping-step04 .steps{
                display: flex;
                align-items: center;
                justify-content: center;
                height: 70px;
            }

            #shopping-step04 .steps .step{
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

            #shopping-step04 .steps .step::before{
                /* content: '???????????????'; */
                content: attr(data-text);
                position: absolute;
                bottom: -40px;
                text-align: center;
                word-break: keep-all;
                color: black;

            }

            #shopping-step04 .steps .buy-progress-bar{
                /* width: 180px; */
                width: 17%;
                height: 8px;
                border-radius: 5px;
                background-color: rgb(221, 221, 221);
                margin: 0px 8px;
            }

            @media (max-width:785px) {
                #shopping-step04 .steps .buy-progress-bar{
                    width: 10%;
                }
            }
            #shopping-step04 .steps .green{
                background-color: rgb(15, 190, 105);
                color: white;
            }
            #shopping-step04 .steps .progress-25::before{
                content: '';
                width: 100%;
                height: 100%;
                background-color: rgb(54, 224, 153);
                display: block;
                border-radius: 5px;
            }
            #shopping-step04 .steps .progress-50::before{
                content: '';
                width: 100%;
                height: 100%;
                background-color: rgb(54, 224, 153);
                display: block;
                border-radius: 5px;
            }
            #shopping-step04 .steps .progress-75::before{
                content: '';
                width: 100%;
                height: 100%;
                background-color: rgb(54, 224, 153);
                display: block;
                border-radius: 5px;
            }
            #shopping-step04 .buy-list{
                height: 20px;
            }
            .list-done{
                height: 80px;
                width: 145px;
                margin: 0 auto;
                font-size: 35px;
                font-weight: 600;
                margin: 0 auto;
            }
            .list-detail{
                font-size: 25px;
                /* background-color: aquamarine; */
                height: 80px;
            }

            .dishes-list-box{
                width: 90%;
                height: 120px;
                /* background-color: rgb(41, 156, 118); */
            }
            .meal-detail{
                /* background-color: burlywood; */
                height: 60px;
            }
            .dishes-name-num > div{
                height: 30px;
                margin-left: 10px;
            }
            .dishes-name-num > div:first-of-type{
                font-weight: 600;

            }
            .dishes-name-num > div:last-of-type{
                font-size: small;
                color: darkgray;
            }

            .how-many-how-much{
                /* background-color: blueviolet; */
                height: 60px;
            }
            input{
                width: 40px;
                border-radius: 5px;
                border: 1px solid gray;
            }
            .how-many-how-much > div:last-child{
                font-weight: 600;
                font-size: small;
            }
            hr{
                color:rgb(165, 165, 165);
                width: 90%;
                margin: 0 auto;
            }
            table{
                /* width: 300px; */
                /* position: absolute; */
                top: 1000px;
                right: 30px;
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
                    margin:0;
                    text-align:center;
                    margin-bottom: -50px;
                    padding-top: 0;

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
        <section id="shopping-step04" class="pt-3 pb-3">
            <div class="container_xxl">
                <div class="buy-progress">
                    <h2 class="ms-5">?????????</h2>
                    <div class="steps">
                        <div class="step green" data-text="???????????????">1</div>
                        <div class="buy-progress-bar progress-25"></div>
                        <div class="step green" data-text=" ?????????????????????">2</div>
                        <div class="buy-progress-bar progress-50"></div>
                        <div class="step green" data-text=" ????????????">3</div>
                        <div class="buy-progress-bar progress-75"></div>
                        <div class="step green" data-text=" ????????????">4</div>
                    </div>
                </div>
                <hr style="width: 90%; margin: 0 auto; margin-top: 40px; color: rgb(165, 165, 165);">
                <div class="list-done d-flex align-items-center">????????????</div>
                <div class="list-detail ms-5 d-flex align-items-center">????????????</div>
                <div>
                    @foreach ($order->detail as $item)
                        <div class="dishes-list-box d-flex align-items-center ms-5 justify-content-between">
                            <div class="d-flex meal-detail">
                                <img src="{{$item->product->img_path}}" alt="" style="width:60px; height: 60px; border-radius: 50%;">
                                <div class="dishes-name-num">
                                    <div style="padding-top: 9px;">
                                        <p>{{$item->product->product_name}}</p>
                                    </div>
                                    <div>
                                        <p>#{{$item->product->id}}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex how-many-how-much align-items-center">
                                <div class="d-flex" style="font-weight: 600;width: 100px;">
                                    <div>x{{$item->qty}}</div>
                                </div>
                                <div style="width:60px;">${{$item->qty * $item->price}}</div>
                            </div>
                        </div>
                        <hr>
                    @endforeach

                    {{-- <hr class="mb-4"> --}}
                    <div class="ms-5 mt-5" style="width: 100%; font-size: 18px;">
                        <div class="mb-2">????????????</div>
                        <div class="mb-2">?????????&nbsp; {{$order->name}}</div>
                        <div class="mb-2">?????????&nbsp; {{$order->phone}}</div>
                        <div class="mb-2">Email???&nbsp; {{$order->email}}</div>
                        <div class="mb-2">
                            @if ($order->shipping_way == 1)
                                ?????????&nbsp; {{$order->address}}
                            @else
                                ???????????????&nbsp; {{$order->store_address}}
                            @endif
                        </div>
                    </div>
                </div>
                {{-- <hr class="mb-5" style="border: 5px;"> --}}

                <div class="d-flex justify-content-end me-5" style="font-size: 16px;">
                    <table>
                        <tr>
                            <td>?????????</td>
                            <td></td>
                            <td></td>
                            <td>{{$order->product_qty}}</td>
                        </tr>
                        <tr>
                            <td>?????????</td>
                            <td></td>
                            <td></td>
                            <td>NT${{$order->sub_total}}</td>
                        </tr>
                        <tr>
                            <td>?????????</td>
                            <td></td>
                            <td></td>
                            <td>NT${{$order->shipping_fee}}</td>
                        </tr>
                        <tr>
                            <td>?????????</td>
                            <td></td>
                            <td></td>
                            <td>NT${{$order->total}}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <hr>
            <div class="next-step d-flex justify-content-end">
                <a href="/" style="color: white"><button class="btn btn-primary" style="width: 130px;height: 50px; margin-top: 20px;">????????????</button></a>

            </div>
        </section>

    @endsection

