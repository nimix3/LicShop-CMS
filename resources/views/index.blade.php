
@extends('layouts.site.site')
@section('pageTitle', 'صفحه اصلی')
@section('content')
<div class="container text-center">
    <div calss="row" style="margin-bottom: 20px">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="{{asset('img/slider/1.jpg')}}" alt="Image">

            </div>

            <div class="item">
                <img src="{{asset('img/slider/2.jpg')}}" alt="Image">

            </div>
            <div class="item">
                <img src="{{asset('img/slider/3.jpg')}}" alt="Image">

            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <img src="{{asset('img/1.png')}}" class="img-responsive" style="width:100%" alt="Image">
            <p class="title">نرم افزار "NOD32 Antivirus"</p>
            <p class="text">با بهره گیری از نسل دهم نرم افزار ضد ویروس شرکت "ESET" رایانه خود را در مقابل  حجم عظیمی از تهدیدات امنیتی  مانند: ویروسها، کرمها و ... محافطت کنید.</p>
        </div>
        <div class="col-sm-3">
            <img src="{{asset('img/13.png')}}" class="img-responsive" style="width:100%" alt="Image">
            <p class="title">نرم افزار "Internet Security"</p>
            <p class="text">این بسته نرم افزاری با دارا بودن دیواره آتش دو طرفه، ماژول ضد هرزنامه، ماژول ضد بدافزار و جاسوس افزار قادر به حفاظت جامع و موثری از اطلاعات رایانه می باشد.</p>
        </div>
        <div class="col-sm-3">
            <img src="{{asset('img/2.png')}}" class="img-responsive" style="width:100%" alt="Image">
            <p class="title">نرم افزار "Smart Security Premium"</p>
            <p class="text">این بسته نرم افزاری علاوه بر برخورداری از دیوار آتش و ضد هرزنامه، مجهز به ماژول ضد بذافزاهای کد کننده (Encrypt) و مدیریت رمزهای عبور می باشد.</p>
        </div>
        <div class="col-sm-3">
            <img src="{{asset('img/11.png')}}" class="img-responsive" style="width:100%" alt="Image">
            <p class="title">نرم افزار "Cybersecurity"</p>
            <p class="text">از این پس کاربرانی که از سیستم عاملهای "Mac OS"استفاده می کنند نیز می توانند به منظور ارتقاء امنیت رایانه خود از محصولات ارائه شده شرکت "ESET" که استفاده نمایند.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <img src="{{asset('img/10.png')}}" class="img-responsive" style="width:100%" alt="Image">
            <p class="title">نرم افزار "Mobile Security"</p>
            <p class="text">حفاظت از تلفنهای هوشمند و دستگاههای تلفن همراه خود  را در مقابل هجوم ویروسها و برنامه های مخرب  به نسخه مخصوص موبایل ضد ویروس شرکت "ESET" بسپارید.</p>
        </div>
        <div class="col-sm-3">
            <img src="{{asset('img/12.png')}}" class="img-responsive" style="width:100%" alt="Image">
            <p class="title">نسخه های مخصوص شبکه نود32</p>
            <p class="text">
                حفاظت یکپارچه در شبکه های کامپیوتری از یک نقطه، مدیریت متمرکز، اعمال تنظیمات، به
                روز رسانی، دریافت گزارشات ، نصب از راه دور و ...  در نسخه های شبکه ای شرکت
            </p>
        </div>
        <div class="col-sm-3">
            <img src="{{asset('img/6.png')}}" class="img-responsive" style="width:100%" alt="Image">
            <p class="title">جوایز و نشانها</p>
            <p class="text">نرم افزارهای امنیتی شرکت "ESET" در آخرین آزمون مرکز "Virus Bulletin" در ماه فوریه سال 2015 موفق به دریافت نودمین نشان "VB100%" گردید.</p>
        </div>

    </div>
</div><br>
@endsection
