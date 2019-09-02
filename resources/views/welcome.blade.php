<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-image: url('/img/background/bg1.jpg');
                color: #fff;
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
                color: #fff;
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
                    OSTA 
                </div><span>Vehicle Management System</span>
                
               
            </div>

            
        </div>
        <div class="container">
            <div class="row">
                 <div class="jumbotron">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis veniam sit officia illo incidunt consequatur recusandae cum libero fugiat inventore, odit iure. Doloremque, illo culpa? Minima reprehenderit at vitae eos?Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos rem cupiditate recusandae sunt accusantium tenetur laudantium aut magnam ab culpa ad quo, a hic libero ex corporis labore ducimus earum!lorem  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste numquam nobis nulla expedita voluptates aliquam ipsa quod, veniam optio esse magni eum mollitia quia, iusto id facilis eveniet quibusdam neque.</p>
            <br><br>
            <div class="col-lg-3 col-md-3">
                <img src="img/logo/carlogo.jpg" alt="..." height="600px" width="600px">
            </div>
            </div>
        </div>
            </div>
           
        
    </body>
</html>
