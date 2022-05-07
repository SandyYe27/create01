@extends('template.template')

    @section('pageTitle')
        Checkedout3
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
                /* 背景色 */
                padding-top: 50px;
                padding-bottom: 50px;
            }
            #shopping-step03{
                width: 1030px;
                /* height: 1000px; */
                margin: 0 auto;
                background-color: rgb(241, 242, 245);
                /* 中間主區塊色 */
                border-radius: 10px;

            }
            @media (max-width:1039px) {
                #shopping-step03{
                    width: 100%;
                }
            }
            @media (max-width:785px) {
                #shopping-step03{
                    width: 460px;
                }
                .steps{
                    font-size: 10px;
                }
            }
            @media (max-width:460px) {
                #shopping-step03{
                    width: 100%;
                }
            }
            #shopping-step03 .container_xxl{
                /* background-color: rgb(213, 232, 255); */
                /* height: 850px; */
                position: relative;

            }
            .buy-progress{
                /* background-color: rgb(120, 189, 249); */
                padding-top: 20px;

            }
            #shopping-step03 .steps{
                display: flex;
                align-items: center;
                justify-content: center;
                height: 70px;
            }

            #shopping-step03 .steps .step{
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

            #shopping-step03 .steps .step::before{
                /* content: '確認購物車'; */
                content: attr(data-text);
                position: absolute;
                bottom: -40px;
                text-align: center;
                word-break: keep-all;
                color: black;

            }

            #shopping-step03 .steps .buy-progress-bar{
                /* width: 180px; */
                width: 17%;
                height: 8px;
                border-radius: 5px;
                background-color: rgb(221, 221, 221);
                margin: 0px 8px;
            }

            @media (max-width:785px) {
                #shopping-step03 .steps .buy-progress-bar{
                    width: 10%;
                }
            }
            #shopping-step03 .steps .green{
                background-color: rgb(15, 190, 105);
                color: white;
            }
            #shopping-step03 .steps .progress-25::before{
                content: '';
                width: 100%;
                height: 100%;
                background-color: rgb(54, 224, 153);
                display: block;
                border-radius: 5px;
            }
            #shopping-step03 .steps .progress-50::before{
                content: '';
                width: 100%;
                height: 100%;
                background-color: rgb(54, 224, 153);
                display: block;
                border-radius: 5px;
            }
            #shopping-step03 .steps .progress-75::before{
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

        <section id="shopping-step03" class="pt-3 pb-3">
            <form action="/shopping4" method="POST">
                @csrf
                <div class="container_xxl">
                    <div class="buy-progress">
                        <h2 class="ms-5">購物車</h2>
                        <div class="steps">
                            <div class="step green" data-text="確認購物車">1</div>
                            <div class="buy-progress-bar progress-25"></div>
                            <div class="step green" data-text=" 付款與運送方式">2</div>
                            <div class="buy-progress-bar progress-50"></div>
                            <div class="step green" data-text=" 填寫資料">3</div>
                            <div class="buy-progress-bar progress-75"></div>
                            <div class="step" data-text=" 完成訂購">4</div>
                        </div>
                    </div>
                    <hr class="mt-5">
                    <div class="ms-5 me-5 mt-5">
                        <p>寄送資料</p>
                        <div class="row g-3">
                            <div class="col-md-12">
                                <label for="inputName" class="form-label">姓名</label>
                                <input type="email" class="form-control" id="inputName" placeholder="王小明">
                            </div>
                            <div class="col-md-12">
                                <label for="inputPhone" class="form-label">電話</label>
                                <input type="password" class="form-control" id="inputPhone" placeholder="0912345678">
                            </div>
                            <div class="col-12">
                                <label for="inputEmail" class="form-label">Email</label>
                                <input type="text" class="form-control" id="inputEmail" placeholder="abc@gmail.com" >
                            </div>
                            <div class="col-md-6">
                                <label for="inputCity" class="form-label">城市</label>
                                <input type="text" class="form-control" id="inputCity" placeholder="城市">
                            </div>
                            <div class="col-md-6 mt-5">
                                <input type="text" class="form-control" id="inputCity" placeholder="郵遞區號">
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="inputCity" placeholder="地址">
                            </div>
                        </div>
                    </div>
                    <hr class="mt-5">
                    <div class="total-box" style="height: 200px;">
                        <table>
                            <tr>
                                <td>數量：</td>
                                <td></td>
                                <td></td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>小計：</td>
                                <td></td>
                                <td></td>
                                <td >$24.90</td>
                            </tr>
                            <tr>
                                <td>運費：</td>
                                <td></td>
                                <td></td>
                                <td>$24.90</td>
                            </tr>
                            <tr>
                                <td>總計：</td>
                                <td></td>
                                <td></td>
                                <td>$24.90</td>
                            </tr>
                        </table>
                    </div>
                    <hr>
                    <div class="next-step d-flex justify-content-between mt-5">
                        <a href="/shopping2" style="color:white;">
                            <button class="btn btn-primary" style="width: 130px;height: 50px;">上一步</button>
                        </a>
                        <button class="btn btn-primary" style="width: 130px;height: 50px;"> 下一步</button>
                    </div>
                </div>
            </form>

        </section>
    @endsection
