<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('pageTitle')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/site/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/site/bootstrap-rtl.css')}}">
    <link rel="stylesheet" href="{{asset('css/site/app.css')}}">
    <script src="{{asset('js/site/jquery-1.9.1.min.js')}}"></script>
    <script src="{{asset('js/site/bootstrap.min.js')}}"></script>
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Add a gray background color and some padding to the footer */
        footer {
            background-color: #f2f2f2;
            padding: 25px;
        }

        .carousel-inner img {
            width: 100%; /* Set width to 100% */
            margin: auto;
            min-height:200px;
        }
        
    

        /* Hide the carousel text when the screen is less than 600 pixels wide */
        @media (max-width: 600px) {
            .carousel-caption {
                display: none;
            }
        }

        @font-face {
            font-family: 'yekan';
            src: url('{{asset('fonts/BYekan/BYekan.eot?#iefix')}}') format('embedded-opentype'),   url('{{asset('fonts/BYekan/BYekan.woff')}}') format('woff'),  url('{{asset('fonts/BYekan/BYekan.ttf')}}')  format('truetype'), url('{{asset('fonts/BYekan/BYekan.svg#BYekan+')}}') format('svg');
            font-weight: normal;
            font-style: normal;
        }
        *{font-family: 'yekan'}
    </style>
</head>
<body style="background-color: #ccc;overflow-x: hidden">
<div class="row">
        <img src="{{asset('img/header.jpg')}}" style="width: 100%;height: 250px">
</div>
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar3">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://disputebills.com"><img src="{{asset('img/ESET_Logo.png')}}" alt="Dispute Bills">
            </a>
        </div>
        <div id="navbar3" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="/basket"><span class="glyphicon glyphicon-shopping-cart"></span>سبد خرید</a></li>
                <li class=""><a href="{{ url('/wishlist') }}">Wishlist ({{ Cart::instance('wishlist')->count(false) }})</a></li>
                <li class=""><a href="{{ url('/cart') }}">Cart ({{ Cart::instance('default')->count(false) }})</a></li>
 
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="index">صفحه اصلی</a></li>
                <li><a href="product">محصولات</a></li>
                <li><a href="getsoftware">دریافت نرم افزار</a></li>
                <li><a href="support">پشتیبانی</a></li>
                <li><a href="aboutus">درباره ما</a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
</nav>

<div class="panel panel-default" style="margin: 10px">
    <div class="panel-body">
        @yield('content')
    </div>
</div>
<footer class="container-fluid text-center">
    <p class="footer">1382 - 1394 © کلیه حقوق این سایت برای شرکت و فروشگاه مرکزی نرم افزارهای ضد ویروس امین محفوظ می باشد.
    </p>
</footer>

</body>
</html>