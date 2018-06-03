<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BARilang</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                color: black;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .p{
                font-size: 20px;
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
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
            <div class="content">
                <div class="title m-b-md">
                    <h2><b>Bar</b>Ilang</h2>
                    Barang Hilang
                </div>
                <div>
                    <p>
                        temukan barang hilangmu disini.
                        posting juga barang temuanmu disini.
                    </p>
                    <br>
                    <br>
                    <br>
                </div>

                <div class="links">
                    <a href="{{url('front/dicuri')}}">Barang Dicuri</a>
                    <a href="{{url('front/kehilangan')}}">Barang Hilang</a>
                    <a href="{{url('front/ditemukan')}}">Barang Ditemukan</a>
                    <a href="{{url('front/berita')}}">Berita</a>
                </div>

                <div>
                    <br>
                    <br>
                </div>
            </div>

        </div>

        <footer class="main-footer">
            <div class="pull-right hidden-xs">
            <b>Version</b> 0.0.1
            </div>
            <strong>Copyright &copy; 2018 <a href="#"></a>.</strong> All rights
    reserved.
  </footer>
    </body>
</html>
