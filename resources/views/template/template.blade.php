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
                <button class="btn h6">About</button>
                <a href="/good"><button class="btn h6">Product</button></a>
                <a href="/banner"><button class="btn h6">Banner</button></a>
                <a href="/comment"><button class="btn h6">Comment</button></a>
                <button style="border: 0; background-color:white;"><a href="/shopping1"><i class="h3 bi bi-cart-fill"></i></a></button>
                <div class="dropdown">
                    <button class="btndropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="border: 0; background-color:white;">
                        <i class="h3 bi bi-person-circle"></i>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <a class="dropdown-item" href="/login"><li>Login</li></a>
                    </ul>
                </div>
            </div>
        </div>
        <input type="checkbox" id="ham" hidden>
        <label for="ham"><div></div></label>
        <div class="ham-div list-unstyled" style="width: 100%;" >
            <button class="btn h6" style="width: 100% ;">Blog</button>
            <button class="btn h6" style="width: 100% ;">Product</button>
            <button class="btn h6" style="width: 100% ;">About</button>
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
