@extends('layouts.admin.admin_layout')
@section('content')
    {!! Form::open(['url'=>'admin/product/store','files'=>true]) !!}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="name">نام محصول</label>
            <input type="text" class="form-control" id="pro_name" name="pro_name" required>
        </div>
        <div class="form-group">
            <label for="InputTitle">وضعیت</label>
            <select name="status" id="status"  class="form-control input-sm m-bot15">
                <option value="0">غیر فعال</option>
                <option value="1">فعال</option>
            </select>
        </div>
        <div class="form-group">
            <label for="InputTitle">عکس محصول</label>
          <input type="file" name="pic" id="pic" accept="image/*" required>
        </div>
          <div class="form-group">
        <label for="Textarea">قیمت</label>
        <input type="number" class="form-control" id="price" name="price">
           </div>
        <div class="form-group">
            <label for="Textarea">تعداد کاربران کامپیوتر</label>
            <input type="number" class="form-control" id="count_pc" name="count_pc">
        </div>
        <div class="form-group">
            <label for="Textarea">تعداد کاربران موبایل</label>
            <input type="number" class="form-control" id="count_mobile" name="count_mobile">
        </div>
        <input type="submit" name="btn_send" value="ارسال" class="btn btn-primary">
    {!! Form::close() !!}

        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach

@endsection
