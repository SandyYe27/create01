@extends('template.template')
    @section('pageTitle')
        產品管理
    @endsection

    @section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
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
            @media (max-width:785px){
                #each-good-information{
                    flex-direction: column;
                }
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
            @media (max-width:785px) {
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

        <section id="good" class="pt-4 pb-4" >
            <div class="container_xxl ps-3 pe-3 mt-1 ">
                <div class="col-md-12 d-flex justify-content-between">
                    <h2 class="">產品管理</h2>
                    <a href="/good/create" class="btn btn-success d-flex align-items-center justify-content-center" style="text-decoration: none; width:100px;">新增產品</a>
                </div>
                <div class="col-md-12 mt-3 mb-5">
                    <div>
                        <label for="num">show</label>
                        <select id="num" name="num">
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="20">20</option>
                        </select>
                        <label for="num"> enties</label>
                    </div>
                </div>
                <div>
                    @foreach ($good as $goods)
                        <hr>
                        <div id="each-good-information" class="col-md-12 d-flex mt-2 mb-2">
                            <div class="col-md-6">
                                <img src="{{$goods->img_path}}" alt="" style="width: 100% ;">
                            </div>
                            <div class="col-md-6 d-flex flex-column justify-content-between p-4">
                                <table>
                                    <tr style="border-bottom: 1px solid gray">
                                        <td class="h6"  style="width:70px;" >品名：</td>
                                        <td class="h6">{{$goods->product_name}}</td>
                                    </tr>
                                    <tr style="border-bottom: 1px solid gray">
                                        <td class="h6" style="width:70px; vertical-align:top;padding-top:3px;">介紹：</td>
                                        <td>{{$goods->product_description}}</td>
                                    </tr>
                                    <tr style="border-bottom: 1px solid gray">
                                        <td class="h6" style="width:70px;">價格：</td>
                                        <td>NT${{$goods->product_price}}</td>
                                    </tr>
                                    <tr style="border-bottom: 1px solid gray">
                                        <td class="h6" style="width:70px;">數量：</td>
                                        <td>{{$goods->product_amount}}</td>
                                    </tr>
                                </table>

                                <div class="d-flex align-self-center">
                                    <button class="btn btn-secondary" onclick="location.href='/good/edit/{{$goods->id}}'">編輯</button>
                                    <button class="btn btn-danger ms-3" onclick="document.querySelector('#deleteForm{{$goods->id}}').submit();">刪除</button>
                                    <form action="/good/delete/{{$goods->id}}" method="post" hidden id="deleteForm{{$goods->id}}">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endsection
    @section('js')
        <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
        <script>
            function delete_banner($id){
                document.querySelector('#deleteForm'+$id).submit();
            }
        </script>
    @endsection
