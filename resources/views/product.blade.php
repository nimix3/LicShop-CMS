@extends('layouts.site.site')
@section('pageTitle', 'محصولات')
@section('content')
    <br><br>
    <div class="container">
        <div class="row">
            @foreach($pro as $item)
            <div class="col-sm-3">
                <div class="panel panel-primary">

                    <div class="panel-heading">{{$item->name}}</div>
                    <div class="panel-body"><img src="{{asset('img').'/'.$item->img}}" class="img-responsive" style="width:100%" alt="Image"></div>
                    <div class="panel-footer">قیمت: {{$item->price}}</div>
                    <div class="panel-footer">تعداد کاربران کامپیوتر: {{$item->count_user_pc}}</div>
                    <div class="panel-footer">تعداد کاربران موبایل: {{$item->count_user_mobile}}</div>
                    <a href="/order/{{$item->id}}" class="btn btn-block btn-primary btn-success"><span class="glyphicon glyphicon-shopping-cart"></span>سفارش</a>

                </div>
            </div>
            @endforeach
        </div>
    </div><br><br>
@endsection