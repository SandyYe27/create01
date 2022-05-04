<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>

        @yield('pageTitle')

        {{-- 各業專屬檔案名 --}}
    </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="./css/bootstrap.css"> --}}

    @yield('css')

</head>

<body>

    <nav class="d-flex justify-content-between align-items-center flex-wrap">
        <div class="nav-logo-box d-flex justify-content-center">
            <a href="/"><img src="https://lesson-bootstrap.dev-hub.io/img/logo.svg" alt=""></a>
        </div>
        <div class="navbar-right gap-4 d-md-flex">
            <div class="navbar-right-button gap-4 d-md-flex">
                {{-- <a href="/good"><button class="btn h6">Product</button></a>
                <a href="/banner"><button class="btn h6">Banner</button></a> --}}
                <a href="/comment"><button class="btn h6">Comment</button></a>
                <a href="/shopping1"><button class="btn h6">Shopping</button></a>

                @auth
                {{--如果有登入，看到user您好，和登出鍵--}}
                    @if (Auth::user()->power == 1)
                        <a href="/dashboard"><button class="btn h6">Dashboard</button></a>
                    @endif

                    <li class="list-unstyled">
                        <a class="d-flex flex-wrap" style="width:100px;padding-top:13px;">{{ Auth::user()->name }}, 您好</a> {{--用 Auth::user()->name 調出使用者資料，如名字、信箱 --}}
                    </li>
                    <li class="list-unstyled">
                        <a href="" onclick="event.preventDefault(); document.querySelector('#logout_form').submit()" style="padding-top:13px;">登出</a>
                        {{--使用event.preventDefault() 來停止換頁動作、或送出表單 --}}
                        <form method="POST" action="{{ route('logout')}}" hidden id="logout_form">
                            @csrf
                        </form>
                    </li>
                @endauth


                {{--如果沒登入，就看到登入鍵，導到登入頁login--}}
                @guest
                    <button style="border: 0; background-color:white;">
                        <a href="/login" class="d-flex">
                            <i class="h3 bi bi-person-circle"></i>
                            <span class="ms-1" style="margin-top: 12px">登入</span>
                        </a>
                    </button>
                @endguest

            </div>
        </div>
        <input type="checkbox" id="ham" hidden>
        <label for="ham"><div></div></label>
        <div class="ham-div list-unstyled" style="width: 100%;" >
            <a href="/good"><button class="btn h6" style="width: 100% ;">Product</button></a>
            <a href="/banner"><button class="btn h6" style="width: 100% ;">Banner</button></a>
            <a href="/comment"><button class="btn h6" style="width: 100% ;">Comment</button></a>

            <button class="d-flex justify-content-center" style="width: 100%; border: 0px; background-color: rgb(255, 255, 255);">
                <i class=" h3 bi bi-cart-fill"></i>
                &nbsp;
                &nbsp;
                <i class="h3 bi bi-person-circle"></i>
            </button>

        </div>
    </nav>

    <main> {{-- 各頁專屬main --}}
        @yield('main')
    </main>

    <footer>
        <section class="footer-top">
           <div class="container">
               <div class="footer-top-left">
                    <a href="/"><img src="{{asset('img/bootstrap.img/footer-logo.png')}}" alt=""></a>
                   <div>Air plant banjo lyft occupy retro adaptogen indego</div>
               </div>
               <div class="footer-top-right">
                    <div class="list-unstyled d-flex">
                        <div>
                            <li>CATEGORIES</li>
                            <li>First Link</li>
                            <li>Second Link</li>
                            <li>Third Link</li>
                            <li>Fourth Link</li>
                        </div>
                        <div>
                            <li>CATEGORIES</li>
                            <li>First Link</li>
                            <li>Second Link</li>
                            <li>Third Link</li>
                            <li>Fourth Link</li>
                        </div>
                        <div>
                            <li>CATEGORIES</li>
                            <li>First Link</li>
                            <li>Second Link</li>
                            <li>Third Link</li>
                            <li>Fourth Link</li>
                        </div>
                        <div>
                            <li>CATEGORIES</li>
                            <li>First Link</li>
                            <li>Second Link</li>
                            <li>Third Link</li>
                            <li>Fourth Link</li>
                        </div>
                   </div>
               </div>
           </div>
        </section>
        <section class="footer-bottom">
            <div class="container_xxl d-flex" style="background-color: rgb(223, 227, 232);">
                <div> © 2020 Tailblocks — @knyttneve</div>
                <div>
                    <i class="bi bi-facebook h4 "></i>
                    <i class="bi bi-twitter h4 ms-2"></i>
                    <i class="bi bi-instagram h4 ms-2"></i>
                    <i class="bi bi-app-indicator h4 ms-2"></i>
                </div>
            </div>

        </section>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    @yield('js')
</body>
</html>
