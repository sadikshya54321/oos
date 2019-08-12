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
            .ttl{
                background: #fff;
                border: 1px #ebe9e9 solid;
                height: 100px ;
                width:400px;
                color: #37568f;

            }
            html, body {
                background-color: #5e3502;
                color: #636b6f;
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

            .title {//online ordering sys ko change garna ko lai
                font-size: 84px; //changed from 84 to 50 to make online ordering s ko size 
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
            .container {
                height: 600px;
                width: 100%;
                background: #fff !important;
                color:red;
            }
            .prod-img{
                height:150px;
                width:150px;

            }
            .box {
                background-color: #ebe9e9 !important;
                background: grey;
                border: 1px solid #red;
                margin: 10px 10px;

            }
            .add-to-cart-btn{
                background: green;
                color:#fff;

            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                         <a href="{{url('home') }}"> Home</a>
                    @else 
                        <a href="{{ route('login') }}"> Customer Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"> Sign up</a>
                    @endif
                    @endauth
                </div>
                @endif
                <div>
                
                </div>
         <div class="container">
            <span>Our Products</span>
            <?php foreach($products as $product) { ?>
                <div class="box">
                    
                    <span class="box-title">
                        <?php echo $product->products_name ?>

                    </span>
                    <br/>
                    <span class="box-body">
                        <img src="/uploads/<?php echo $product->image ?>" class="prod-img"/>
                        <br/>
                        RS: <?php echo $product->price ?>
                        <a href="/site/add-cart" class="add-to-cart-btn">Add To Cart</a>
                    </span>
                </div>
            <?php } ?>
        </div>

        </div>

        
    </body>
</html>
