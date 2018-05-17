@extends('layouts.site.site')
@section('pageTitle', 'سفارش')
@section('content')
    <form method="post" action="/order">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="name">نام</label>
            <input type="name" class="form-control" name="name" id="name" aria-describedby="name" required>
        </div>

        <div class="form-group">
            <label for="family">نام خانوادگی</label>
            <input type="family" class="form-control" name="family" id="family" required>
        </div>
        <div class="form-group">
            <label for="mobile">موبایل</label>
            <input type="number" class="form-control" name="mobile" id="mobile" required>
        </div>
        <div class="form-group">
            <label for="InputEmail">ایمیل</label>
            <input type="email" name="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" required>
            <small id="emailHelp" class="form-text text-muted">ایمیل شما محرمانه باقی خواهد ماند</small>
        </div>
        <div class="form-group">
            <label for="count">تعداد</label>
            <input type="number" class="form-control" name="count" id="count" required>
        </div>
        <input type="submit" name="btn_send" value="پرداخت" class="btn btn-primary">
    </form>
@endsection
