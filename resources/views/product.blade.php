@extends('layouts.site.site')
@section('pageTitle', 'محصولات')
@section('content')
    <br><br>
    <div class="container">
        <div class="row">
            @foreach($pro as $item)
            <div class="col-sm-3">
                <div class="panel panel-primary">
                <form action="{{ url('/cart') }}" method="POST" class="side-by-side">
                {!! csrf_field() !!}
                    <div class="panel-heading">{{$item->name}}</div>
                    <div class="panel-body"><img src="{{asset('img').'/'.$item->img}}" class="img-responsive" style="width:100%" alt="Image"></div>
                    <div class="panel-footer">قیمت: {{$item->price}}</div>
                    <div class="panel-footer">تعداد کاربران کامپیوتر: {{$item->count_user_pc}}</div>
                    <div class="panel-footer">تعداد کاربران موبایل: {{$item->count_user_mobile}}</div>
                    <input type="hidden" name="id" value="{{ $item->id }}">
                    <input type="hidden" name="name" value="{{ $item->name }}">
                    <input type="hidden" name="price" value="{{ $item->price }}">
                    <input type="submit" data="{{$item->id}}" class="btn btn-block btn-primary btn-success add-basket btn btn-success btn-lg" value="افزودن به سبد خرید">
                   </form> 
                </div>
            </div>
            @endforeach
        </div>
    </div><br><br>
    <script>
        $('add-basket').click(function(){
            var id = $(this).attr('data');
            $.post('add-basket',{id:id},function($result,$status)
             {
                    alert('ok');
             });
        });
    </script>
@endsection