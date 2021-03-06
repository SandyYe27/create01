<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <style>
        #login{
            height: 100vh;
            position: relative;
        }

        .text{
            background-color: rgba(0, 0, 0, 0.1);
            padding: 0px 96px;
        }
        .text h1{
            text-align: left;
            color: rgb(0, 0, 0);
            font-size: 3rem;
            font-weight: 700;
        }
        .text p{
            color: rgb(0, 0, 0);
        }
        .icons{
            color: rgb(255, 255, 255);
            left: 22%;
            transform: translateX(-22%);
            bottom: 10px;
            position: absolute;
        }

        @media (max-width:1000px) {
            .text{
                display: none!important;
            }
            .icons{
            color: rgb(255, 255, 255);
            left: 50%;
            transform: translateX(-50%);

            }
        }

        .form{
            background-color: rgb(19, 26, 94);
        }

        @media (max-width:1000px) {
            .form{
                width: 100%!important;
            }
        }
        .form *{
            color: rgb(255, 255, 255);
            margin-bottom: 15px;
            width: 100%;
        }
        .form .login-with div{
            border: 1px solid white;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: 700;
            margin-top: -10px;
            margin-bottom: -5px;
        }
        .login-with div:hover{
            background-color: aliceblue;
            color: blueviolet;
            cursor: pointer;
        }
        .name{
            width: 200px;
        }
        .form form input{
            background-color: rgb(21, 21, 21);
            width: 50%;
            height: 50px;
            border: none;
            outline: none;
            border-radius: 5px;
            font-size: 18px;
            padding-left: 10px;
        }
        .formm a{
        /* ????????????????????? */
            text-decoration: none;
            margin: 0 auto;
            margin-top: -30px;
            margin-bottom:20px;
        }
        .formm a:hover{
            color: white;
            text-decoration-line: underline
        }
        .w-50.ms-auto:hover{
            text-decoration: underline;
            cursor: pointer;
        }
        .form form button{
            width: 250px;
            height: 50px;
            background-color: rgb(119, 109, 185);
            border: none;
            outline: none;
            border-radius: 25px;
        }
        button:hover{
            cursor: pointer;
        }
        .left-box{
            background-color: rgb(170, 170, 170)
        }

    </style>
</head>
<body>
    <section id="login" class="w-100 d-flex">
        <div class="left-box text w-50 h-100 d-flex flex-column align-items-center justify-content-center">
            <h1 class="w-100">Keep it special</h1>
            <p class="w-100 fs-2">Capture your personal memory in unique way, anywhere.</p>
        </div>
        <div class="icons fs-3">
            <i class="bi bi-twitter"></i>
            <i class="bi bi-facebook ms-3 me-3"></i>
            <i class="bi bi-instagram"></i>
        </div>
        <div class="form w-50 h-100 d-flex flex-column justify-content-center align-items-center">
            <div class="name fs-1 fs-1 mb-1 d-flex justify-content-center">
                <img src="./img/?????? 2022-04-14 16.57.14.png" alt="" class="w-100">
                <!-- ???????????? -->
            </div>
            <div class="login-with d-flex justify-content-center">
                <div class="fb">f</div>
                <div class="google ms-3 me-3">G+</div>
                <div class="linkin">in</div>
            </div>
            <form method="POST" action="{{ route('login')}}" class="formm d-flex flex-column justify-content-center align-items-center">
                @csrf
                <span class="w-50">or use email your account</span>
                <input style="background-color: rgb(255, 255, 255); color:black;" type="text"  placeholder="Email" name="email">
                <input style="background-color: rgb(255, 255, 255); color:black;" type="password" placeholder="Password" name="password">

                <div class="d-flex w-50">
                    <label class="d-flex w-50" for="remember_me" >
                        <input id="remember_me" type="checkbox" name="remember" style="width: 20px;height:20px; margin-right:5px; margin-top:2px;">
                        <span class="w-80 ml-2 text-sm text-gray-600 me-auto">{{ __('Remember me') }}</span>
                    </label>
                    <span id="emailHelp" class="w-50 ms-auto" >Forgot your password?</span>
                </div>
                <a href="/register" class="w-50">??????????????????????????? Click to Register</a>

                <button type="submit">SIGN IN</button>
            </form>

        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>
