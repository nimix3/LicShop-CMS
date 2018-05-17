
@extends('layouts.site.site')
@section('pageTitle', 'پشتیبانی')
@section('content')
    <ol class="breadcrumb">
        <li><a href="/index">صفحه اصلی</a></li>
        <li><a href="/support">پشتیبانی</a></li>
    </ol>
    <div class="jumbotron">
        <h1>به بخش پشتیبانی خوش آمدید</h1>
        <p>لطفا سوالات خود را از طریق فرم زیر ارسال کنید</p>
    </div>
    <form>
        <div class="form-group">
            <label for="InputEmail">ایمیل</label>
            <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">ایمیل شما محرمانه باقی خواهد ماند</small>
        </div>
        <div class="form-group">
            <label for="InputTitle">عنوان</label>
            <input type="email" class="form-control" id="InputTitle">
        </div>
        <div class="form-group">
            <label for="Textarea">متن</label>
            <textarea class="form-control" id="Textarea" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">ارسال</button>
    </form>
@endsection
