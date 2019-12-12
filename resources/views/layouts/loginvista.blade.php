<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
            .fondo{
                background: url(img/fondo_login.jpg) no-repeat center center fixed; 
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
               
            }
            .fondodiv{
                background: #eeeef2;
            }
            .margin-top10{
                margin-top: 10px;
            }
                 .caja-login {
                   
                   
                    background-color: rgb(255, 255, 255,255);
                    border-radius: 10px;
                        width: 600px;
                    top:50%;
                    height:300px;
                    font-family: 'Roboto', sans-serif;
                }

                .verde{
                    color:#22a191;
                    font-size:18px;
                }

                .titulos{
                    
                    color:#22a191;
                }
                .centradovertical{
                    position: absolute;
                    top: 150px;
                    left: 26%;
                                }
                                .iconos{    width: 26px;
                    text-align: center;
                    background: white;}

                    .colorbtn{
                background: #29bca9;
                color:white;
                    }

                    .sinborder{
                background-color: #fff;
                    border: 0;
                    }
                        </style>
                    }
                    }

</head>
<body class="fondo">
    <div id="app" >
        

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
