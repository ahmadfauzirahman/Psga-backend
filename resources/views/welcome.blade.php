<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PSGA</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link href="{{asset('public/dist/css/style.css')}}" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #ffffff;
            color: #6b6c6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            Pusat Studi Gender dan Anak
            <h4><strong>LPPM UIN SUSKA</strong></h4>
        </div>
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row flex-center">
                        <div class="col-lg-4">
                            <img src="{{asset('public/img/laravel.png')}}" alt="" width="100%">
                        </div>
                        <div class="col-lg-4">
                            <img src="{{asset('public/img/react.png')}}" alt="" width="100%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <div class="links">
                    <a href="https://laravel.com/docs">About Team</a>
                    <a href="https://github.com/ahmadfauzirahman/Psga-backend">GitHub</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
