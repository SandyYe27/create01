@extends('template.template')

    @section('pageTitle')
        訂單明細
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

            label{
                width: 40px;
                height: 40px;
                display: none;

            }
            label > div{
                width: 20px;
                height: 20px;
                margin-top: 10px;
                background-image: url('{{asset('img/bootstrap.img/qJeRpp_WmKGWrqc.jpeg')}}');

                background-size: cover;
                background-color: aquamarine;
            }
            label:hover{
                cursor: pointer;
            }
            @media (max-width:768px) {
                label{
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
                position: relative;
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

            }
            .buy-progress{
                /* background-color: rgb(120, 189, 249); */
                padding-top: 20px;

            }
            #shopping-step01 .steps{
                display: flex;
                align-items: center;
                justify-content: center;
                height: 70px;
            }

            #shopping-step01 .steps .step{
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

            #shopping-step01 .steps .step::before{
                /* content: '確認購物車'; */
                content: attr(data-text);
                position: absolute;
                bottom: -40px;
                text-align: center;
                word-break: keep-all;
                color: black;

            }

            #shopping-step01 .steps .buy-progress-bar{
                /* width: 180px; */
                width: 17%;
                height: 8px;
                border-radius: 5px;
                background-color: rgb(221, 221, 221);
                margin: 0px 8px;
            }

            @media (max-width:785px) {
                #shopping-step01 .steps .buy-progress-bar{
                    width: 10%;
                }
            }
            #shopping-step01 .steps .green{
                background-color: rgb(15, 190, 105);
                color: white;
            }
            #shopping-step01 .steps .progress-25::before{
                content: '';
                width: 35%;
                height: 100%;
                background-color: rgb(54, 224, 153);
                display: block;
                border-radius: 5px;
            }
            #shopping-step01 .buy-list{
                height: 20px;
            }
            .list-detail{
                font-size: 25px;
                height: 80px;
            }
            .dishes-list-box{
                width: 90%;
                height: 120px;
            }

            .dishes-name-num > div{
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
        <section id="shopping-step01" class="pt-3 pb-5">
            <form action="/shopping2" method="POST">
                @csrf
                <div class="container_xxl">
                    <div class="buy-progress">
                        <h2 class="ms-5">購物車</h2>
                        <div class="steps">
                            <div class="step green" data-text="確認購物車">1</div>
                            <div class="buy-progress-bar progress-25"></div>
                            <div class="step" data-text=" 付款與運送方式">2</div>
                            <div class="buy-progress-bar"></div>
                            <div class="step" data-text=" 填寫資料">3</div>
                            <div class="buy-progress-bar"></div>
                            <div class="step" data-text=" 完成訂購">4</div>
                        </div>
                    </div>
                    <hr style="width: 90%; margin: 0 auto; margin-top: 40px; color: rgb(165, 165, 165);">
                    <div class="list-detail ms-5 d-flex align-items-center">
                        @if ( count($shopping) >= 1)
                        訂單明細
                        @else
                        尚未加入購物車
                        @endif
                    </div>

                    <div>
                        {{-- @foreach ($陣列 as $item) --}}
                        @foreach ($shopping as $item)
                        <div class="dishes-list-box d-flex align-items-center ms-5 justify-content-between">
                            <div class="d-flex meal-detail mt-3">
                                <img src="{{ $item->product->img_path }}" style="width:60px; height: 60px; border-radius: 50%;">
                                <div class="dishes-name-num">
                                    <div>
                                        <p>{{$item->product->product_name}}</p>
                                    </div>
                                    <div class="number"
                                        data-product_qty="{{$item->product->product_amount}}"
                                        data-product_price="{{$item->product->product_price}}">
                                        #{{$item->product->id}}
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex how-many-how-much align-items-center me-3">
                                <div class="d-flex" style="font-weight: 600;width: 100px;">
                                    <i class="mt-1 fa-solid fa-minus"></i>
                                    &nbsp;
                                    <div><input type="number" name="qty[]" class="qty" value="{{$item->qty}}" readonly></div>
                                    &nbsp;
                                    <i class="mt-1 fa-solid fa-plus"></i>
                                </div>
                                <div  class="sum-price">NT${{$item->qty * $item->product->product_price}}</div>
                                <div class="btn btn-danger ms-3" onclick="delete_cart('{{$item->id}}')">刪除</div>

                            </div>
                        </div>
                        <hr>
                        @endforeach
                    </div>

                    <div class="mt-4 mb-4" style="width:250px; margin-left:auto; color:rgb(71, 71, 71);">
                        @if ( count($shopping) >= 1)
                            <div class="h6">數量：{{count($shopping)}}</div>
                            <div class="h6 sub_total">小計：NT${{$sub_total}}</div>
                            <div class="h6">運費：NT$100</div>
                            <div class="h6 total">總計：NT${{$sub_total+100}}</div>
                        @endif
                    </div>
                    <hr class="mb-4">
                </div>
                <div class="col-md-10 d-flex justify-content-between" style="margin: 0 auto;">
                    <a href="/" style="color: black"><div class="h6 mt-3"> ← 返回購物</div></a>
                    @if (count($shopping) >= 1)
                        <button class="btn btn-primary" type="submit" style="width: 130px;height: 50px;">下一步</button>
                    @endif
                </div>
            </form>
        </section>
    @endsection

    @section('js')
        <script>
            const minus = document.querySelectorAll('.fa-minus')
            const plus = document.querySelectorAll('.fa-plus')
            const qty = document.querySelectorAll('.qty')
            const sum_price = document.querySelectorAll('.sum-price')
            const number = document.querySelectorAll('.number')

            //小計與總計的元素
            const sub_total = document.querySelector('.sub_total')
            const total = document.querySelector('.total')


            for (let i = 0; i < minus.length; i++) { //用for迴圈做每一個plus和minus的功能
                minus[i].onclick = function(){
                    if(parseInt(qty[i].value)> 1){
                        qty[i].value = parseInt(qty[i].value) - 1
                        //重新計算價格（商品單價 * 數量）
                        sum_price[i].innerHTML = 'NT$' + (parseInt(number[i].dataset.product_price) * parseInt(qty[i].value))
                    }
                    get_total()
                }

                plus[i].onclick = function(){
                    if(parseInt(qty[i].value) < parseInt(number[i].dataset.product_qty) ){
                        qty[i].value = parseInt(qty[i].value) + 1
                        sum_price[i].innerHTML = 'NT$' + (parseInt(number[i].dataset.product_price) * parseInt(qty[i].value))
                    }
                    get_total()
                }

            }

            function get_total(){ //計算所有品項的金額，並加總
                var sum = 0
                    for (let j = 0; j < minus.length; j++) {
                        sum += parseInt(number[j].dataset.product_price) * parseInt(qty[j].value)
                    }
                    sub_total.innerHTML = '小計：NT$' + sum
                    total.innerHTML = '總計：NT$' + (sum + 150)
            }

            function delete_cart(id) {

                var form = new FormData();
                form.append('_token',  '{!! csrf_token() !!}' );

                fetch('/delete_from_cart/'+ id,{
                    method:'POST',
                    body: form
                }).then(res => {
                    location.reload() //稍微浪費資源、但可行
                })

                //~耐心~//
            }
        </script>
    @endsection

