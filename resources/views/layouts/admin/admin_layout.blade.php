<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('pageTitle') - مدیریت</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Bootstrap Core CSS RTL-->
    <link href="{{asset('css/bootstrap-rtl.min.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        /* Set height of the grid so .sidenav can be 100% (adjust if needed) */

        html {
            height: 100%
        }

        body {
            height: 100%;
            background-color: #ddd;
        }
        /* Set gray background color and 100% height */

        .sidenav {
            background-color: #222;
            height: 100%;
            color: #fff;
        }
        /* Set black background color, white text and some padding */

        footer {
            background-color: #111;
            color: white;
            padding: 15px;
        }
        /* On small screens, set height to 'auto' for sidenav and grid */

        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }
            .row.content {
                height: auto;
            }
        }

        @font-face {
            font-family: 'yekan';
            src: url('{{asset('fonts/BYekan/BYekan.eot?#iefix')}}') format('embedded-opentype'),
            url('{{asset('fonts/BYekan/BYekan.woff')}}') format('woff'),
            url('{{asset('fonts/BYekan/BYekan.ttf')}}') format('truetype'),
            url('{{asset('fonts/BYekan/BYekan.svg#BYekan+')}}') format('svg');
            font-weight: normal;
            font-style: normal;
        }

        * {
            font-family: 'yekan'
        }
    </style>
</head>

<body>

    <div class="container-fluid" style="height:100%">
        <div class="row content" style="height:100%">
            <div class="col-sm-3 sidenav">
                <h4>پنل مدیریت</h4>
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="#section1"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> صفحه اصلی</a></li>
                    <li><a href="/admin/product/"><span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span> محصولات</a></li>
                    <li><a href="#section3"><span class="glyphicon glyphicon-barcode" aria-hidden="true"></span> سریال</a></li>
                    <li><a href="#section3"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> سفارشات</a></li>
                    <li><a href="#section3"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> نمایش سایت</a></li>
                    <li><a href="#section3"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> خروج</a></li>
                </ul>
            </div>
            <div class="col-sm-9">
                <div class="panel panel-default" style="margin: 10px">
                    <div class="panel-body">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer navbar-fixed-bottom">
        <p class="footer">1382 - 1394 © کلیه حقوق این سایت برای شرکت و فروشگاه مرکزی نرم افزارهای ضد ویروس امین محفوظ می باشد.
        </p>
    </footer>

</body>

</html>