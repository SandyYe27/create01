@extends('template.template')

    @section('pageTitle')
        首頁
    @endsection

    @section('css')
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

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
                    padding-top: 0;
                    margin-bottom:-50px;
                }
                .footer-top-right{
                    margin-top: -60px;
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

        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RWLAmj?ver=35aa&q=0&m=8&h=472&w=1259&b=%23FFFFFFFF&l=f&x=0&y=0&s=1898&d=712&aim=true" alt=""></div>
                <div class="swiper-slide"><img src="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RWUuNl?ver=8047&q=0&m=8&h=600&w=1600&b=%23FFFFFFFF&l=f&x=67&y=336&s=2690&d=1009&aim=true" alt=""></div>
                <div class="swiper-slide"><img src="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE3hFDE?ver=e113&q=0&m=8&h=472&w=1259&b=%23FFFFFFFF&l=f&x=0&y=187&s=2120&d=795&aim=true" alt=""></div>
            </div>
            <div class="swiper-button-next"><i class="fa-solid fa-angle-right"></i></div>
            <div class="swiper-button-prev"><i class="fa-solid fa-angle-left"></i></div>
            <div class="swiper-pagination"></div>
        </div>

        <section class="section-2 denim-heirloom">
            <div class="container">
                <div class="row d-flex flex-column align-items-center justify-content-center">
                    <div class="section-2-top d-flex flex-column align-items-center justify-content-center">
                        <h3 class="section-2-top-h mb-4">最新消息</h3>
                        <span class="section-2-top-span lh-2 mb-4 text-center">最新消息與各項優惠如下，請別錯過！</span>

                        {{-- <span class="section-2-top-span lh-2 mb-4 text-center">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug.</span> --}}
                        <div></div>
                    </div>
                </div>

                <div class="row d-flex justify-content-between">

                    @foreach ($data2 as $item)
                        <div class="card mb-3 d-flex flex-column align-items-center " style=" border: none;">
                            <div class="d-flex align-items-center justify-content-center h3" style="width: 80px; height: 80px; border-radius: 50px; background-color: rgb(222, 228, 255); ">
                                {{-- <i class="fa-solid fa-scissors" style="color: rgb(92, 106, 255);"></i> --}}
                                <img src="{{$item->img}}" style="width: 100%;" alt="">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-center">{{$item->title}}</h5>
                                <p class="card-text text-center">{{$item->artical}}</p>
                            </div>
                            <a href="/news_detail/{{$item->id}}" class="btn" style="color: rgb(92, 106, 255);">Learn More →</a>
                        </div>
                    @endforeach

                </div>
                <div class="row">
                    <div class="section-2-bottom d-flex justify-content-center align-items-center">
                        <a href="/news_list" >
                            <button type="button" class="btn btn-primary" style="width: 110px; height: 45px; background-color:rgb(114, 98, 255); color: #ffffff; border:none;">
                                所有消息
                            </button>
                        </a>

                    </div>
                </div>
            </div>
        </section>
        <section class="section-3 Master-Cleanse">
            <div class="container">
                <div class="row d-flex justify-content-between align-items-center">
                    <h3>Master Cleanse Reliac Heirloom</h1>
                    <span>Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom.</span>
                </div>
            </div>

        </section>
        <section id="gallery" class="mt-5 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-6 left d-flex flex-wrap justify-content-between">
                        <div class="small">
                            {{-- <img src="./img/RE4FTtq.jpeg" alt=""> --}}
                            <img src="{{asset('../img/bootstrap.img/RE4FTtq.jpeg')}}" alt="">
                        </div>
                        <div class="small">
                            {{-- <img src="./img/RWKAPX.jpeg" alt=""> --}}
                            <img src="{{asset('../img/bootstrap.img/RWKAPX.jpeg')}}" alt="">

                        </div>
                        <div class="big">
                            {{-- <img src="./img/RWLJ3u.jpeg" alt=""> --}}
                            <img src="{{asset('../img/bootstrap.img/RWLJ3u.jpeg')}}" alt="">

                        </div>
                    </div>
                    <div class="col-6 right d-flex flex-wrap justify-content-between">
                        <div class="big">
                            {{-- <img src="./img/RWURKU.jpeg" alt=""> --}}
                            <img src="{{asset('../img/bootstrap.img/RWURKU.jpeg')}}" alt="">
                        </div>
                        <div class="small">
                            {{-- <img src="./img/RWKCS2.jpeg" alt=""> --}}
                            <img src="{{asset('../img/bootstrap.img/RWKCS2.jpeg')}}" alt="">

                        </div>
                        <div class="small">
                            {{-- <img src="./img/RE4P80m.jpeg" alt=""> --}}
                            <img src="{{asset('../img/bootstrap.img/RE4P80m.jpeg')}}" alt="">

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="pricing" class="mt-5 mb-5">
            <div class="container">
                <div class="row d-flex flex-column justify-content-center align-items-center" >
                    <span class="h3" style="width: 100px;">Pricing</span>
                    <span class="text-center" style="width: 700px" >Banh mi cornhole echo park skateboard authentic crucifix neutra tilde lyft biodiesel artisan direct trade mumblecore 3 wolf moon twee</span>
                </div>
                <div class="row d-flex justify-content-center align-items-center">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Plan</th>
                                <th scope="col">Speed</th>
                                <th scope="col">Storage</th>
                                <th scope="col">Price</th>
                                <th scope="col">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Start</td>
                                <td>5 Mb/s</td>
                                <td>15 GB</td>
                                <td>Free</td>
                                <td><input type="radio" name="radio-button">
                                </td>
                            </tr>
                            <tr>
                                <td>Pro</td>
                                <td>25 Mb/s</td>
                                <td>25 GB</td>
                                <td>$24</td>
                                <td><input type="radio" name="radio-button"></td>

                            </tr>
                            <tr>
                                <td>Business</td>
                                <td>36 Mb/s</td>
                                <td>40 GB</td>
                                <td>$50</td>
                                <td><input type="radio" name="radio-button"></td>

                            </tr>
                            <tr>
                                <td>Exclusive</td>
                                <td>48 Mb/s</td>
                                <td>120 GB</td>
                                <td>$72</td>
                                <td><input type="radio" name="radio-button"></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="table-bottom d-flex align-items-center justify-content-between">
                        <a href="#" class="btn btn-primary" style="width: 130px; background-color: #ffffff;color:rgb(0, 115, 255); border: none;">Learn More ></a>
                        <input class="btn btn-primary" type="button" value="Input" style="width: 100px;">
                    </div>
                </div>

            </div>
        </section>
        <section id="card02" class="mt-5 mb-5">
            <div class="container">
                <div class="row d-flex align-items-center pt-5 pb-5">
                    <div class="h3-wordbox mt-2 mb-2">
                        <h3>Pitchfork Kickstarter Taxidermy</h3>
                        <div></div>
                    </div>
                    <span>Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.</span>
                </div>
                <div class="row card-region-1 d-flex flex-wrap justify-content-between">
                    <div class="card mb-3 p-3">
                        {{-- <img src="./img/RE4DSSg.jpeg" class="card-img-top" alt="..."> --}}
                        <img src="{{asset('../img/bootstrap.img/RE4DSSg.jpeg')}}" class="card-img-top" alt="">
                        <div class="card-body">
                            <p class="mb-0" style="color: #6365F1;">SUBTITLE</p>
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                    <div class="card mb-3 p-3">
                        {{-- <img src="./img/RE4DVtl.jpeg" class="card-img-top" alt="..."> --}}
                        <img src="{{asset('../img/bootstrap.img/RE4DVtl.jpeg')}}" class="card-img-top" alt="">
                        <div class="card-body">
                            <p class="mb-0" style="color: #6365F1;">SUBTITLE</p>
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                    <div class="card mb-3 p-3">
                        {{-- <img src="./img/RE4DVtp.jpeg" class="card-img-top" alt="..."> --}}
                        <img src="{{asset('../img/bootstrap.img/RE4DVtp.jpeg')}}" class="card-img-top" alt="">
                        <div class="card-body">
                            <p class="mb-0" style="color: #6365F1;">SUBTITLE</p>
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                    <div class="card mb-3 p-3">
                        {{-- <img src="./img/RE4DYaV.jpeg" class="card-img-top" alt="..."> --}}
                        <img src="{{asset('../img/bootstrap.img/RE4DYaV.jpeg')}}" class="card-img-top" alt="">

                        <div class="card-body">
                            <p class="mb-0" style="color: #6365F1;">SUBTITLE</p>
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section id="circle-02" class="mt-5 mb-5">
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center mt-5">
                    <div class="card mb-3 d-flex  align-items-center mt-5" style=" border: none;">
                        <div class="d-flex align-items-center justify-content-center h1" style="width: 100px; height: 100px; border-radius: 50px; background-color: rgb(222, 228, 255); ">
                            <i class="fa-solid fa-chart-line" style="color:#6365F1;"></i>
                        </div>

                        <div class="card-body d-flex flex-column align-items-start">
                            <h5 class="card-title ms-2">Shooting Stars</h5>
                            <p class="card-text ms-2">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <a href="#" class="btn" style="color: #6365F1;">Learn More →</a>
                        </div>
                    </div>
                    <hr class="mt-4 mb-4" >
                    <div class="card mb-3 d-flex  align-items-center" style=" border: none;">
                        <div id="show-top-div" class="d-flex align-items-center justify-content-center h1 show-top-div" style=" width: 100px; height: 100px; border-radius: 50px; background-color: rgb(222, 228, 255); ">
                            <i class="fa-solid fa-scissors" style="color:#6365F1; margin-top: 30px; margin-left: 30px;"></i>
                        </div>

                        <div class="card-body d-flex flex-column align-items-start">
                            <h5 class="card-title ms-2">The Catalyzer</h5>
                            <p class="card-text ms-2">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <a href="#" class="btn m-" style="color: #6365F1;">Learn More →</a>
                        </div>

                        <div id="show-bottom-div" class="d-flex align-items-center justify-content-center h1" style="width: 100px; height: 100px; border-radius: 50px; background-color: rgb(222, 228, 255); ">
                            <i class="fa-solid fa-scissors" style="color: #6365F1;"></i>
                        </div>
                    </div>
                    <hr class="mt-4 mb-4" >
                    <div class="card mb-3 d-flex  align-items-center" style=" border: none;">
                        <div class="d-flex align-items-center justify-content-center h1" style="width: 100px; height: 100px; border-radius: 50px; background-color: rgb(222, 228, 255); ">
                            <i class="fa-solid fa-user" style="color: #6365F1;"></i>
                        </div>

                        <div class="card-body d-flex flex-column align-items-start">
                            <h5 class="card-title ms-2">The 400 Blows</h5>
                            <p class="card-text ms-2">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <a href="#" class="btn" style="color:#6365F1">Learn More →</a>
                        </div>
                    </div>
                </div>
                <div class="row d-flex align-items-center justify-content-center" style="height:150px">
                    <button type="button" class="btn" style="width:100px; background-color: #6365F1; color: #ffffff; border-color: #6365F1;">Button</button>
                </div>
            </div>
        </section>
        <section id="merch" class="mt-5 mb-5">
            <div class="container">
                @foreach ($good2 as $good2)
                <div class="row d-flex flex-column flex-md-row justify-content-around align-items-center">
                    <div class="col-12 col-md-6 h-auto sm-height" >
                        <img src="{{$good2->img_path}}" class="merch-pic h-100" alt="" >
                    </div>
                    <div class="col-12 col-md-6 pt-4 pb-4 pe-0">
                        <span class="subtitle">BRAND NAME</span>
                        <h2>{{$good2->product_name}}</h2>
                        <div class="reviews d-flex align-items-center mb-2">
                            <div class="stars me-2">
                                <svg fill="#6365F1" stroke="#6365F1" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                </svg>
                                <svg fill="#6365F1" stroke="#6365F1" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                </svg>
                                <svg fill="#6365F1" stroke="#6365F1" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                </svg>
                                <svg fill="#6365F1" stroke="#6365F1" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                </svg>
                                <svg fill="none" stroke="#6365F1" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                    </path>
                                </svg>
                            </div>
                            <div class="score d-flex align-items-center me-2" style="height: 40px; width: 90px; border-right: 2px solid rgb(175, 175, 175);">4 Reviews</div>
                            <div class="social">
                                <i class="fa-brands fa-facebook-f"></i>
                                <i class="fa-brands fa-twitter"></i>
                                <i class="fa-brands fa-facebook-messenger"></i>
                            </div>
                        </div>

                        <div class="content">
                            {{$good2->product_description}}
                        </div>

                        <div class="choice d-flex mt-3 md-3 border-bottom pb-3">
                            <div class="color d-flex align-items-center">
                                <label for="" class="me-3">Color</label>
                                <div class="rounded-circle ball bg-primary me-3"></div>
                                <div class="rounded-circle ball bg-danger me-3"></div>
                                <div class="rounded-circle ball bg-warning me-3"></div>
                            </div>
                            <div class="size d-flex">
                                <label for="abcd">Size</label>
                                <br>
                                <select name="" id="abcd">
                                    <option value="">SM</option>
                                    <option value="">M</option>
                                    <option value="">L</option>
                                    <option value="">XL</option>
                                </select>
                            </div>
                        </div>
                        <div class="add d-flex pt-3">
                            <div class="price me-auto h4">NT${{$good2->product_price}}</div>
                            <button class="btn" type="submit" style="width: 100px; background-color: #6365F1; color: #ffffff;">Button</button>
                            <div class="favourite d-flex align-items-center justify-content-center ms-3"><i class="fa-solid fa-heart"></i></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
        <section id="card03" class="">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    @foreach ($good1 as $goods)
                        <div class="card mb-3 p-3">
                            <a href="/product_detail/{{$goods->id}}">
                                <img src="{{$goods->img_path}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="subtitle">CATEGORY</p>
                                    <h5 class="card-title">{{$goods->product_name}}</h5>
                                    <p class="card-text">NT${{$goods->product_price}}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section id="map" class="mt-5 mb-5">
            <div class="container-fluid p-0 mt-5">
                <div class="row row-map" style="opacity: 0.9;"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.27989667974!2d-74.25986987516099!3d40.697670066721045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2z576O5ZyL57SQ57SE!5e0!3m2!1szh-TW!2stw!4v1649666682631!5m2!1szh-TW!2stw" width="800" height="690" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>

                <div class="row row-mail p-3">
                    <h5 class="mt-3">Feedback</h5>
                    <span class="span01">Post-ironic portland shabby chic echo park, banjo fashion axe</span>
                    &nbsp;
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="section-2-bottom d-flex justify-content-center align-items-center">
                        <button type="button" class="btn btn-primary" style="width: 100%; height: 45px; background-color:rgb(114, 98, 255); color: #ffffff;">Button</button>
                    </div>
                    <span class="span02">Chicharrones blog helvetica normcore iceland tousled brook viral artisan.</span>
                </div>

            </div>
        </section>

    @endsection

    @section('js')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script>
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 1,
                autoplay: {
                delay: 5500,
                disableOnInteraction: false,
                },

                keyboard: {
                enabled: true,
                },

                loop: true,
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
