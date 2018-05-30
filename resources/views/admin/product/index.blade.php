@extends('layouts.admin.admin_layout')
@section('content')
    <div class="page-header">
        <h1>محصولات</h1>
    </div>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>نام</th>
            <th>وضعیت</th>
            <th>قیمت</th>
            <th>تعداد کاربران کامپیوتر</th>
            <th>تعداد کاربران موبایل</th>
            <th style="text-align: center" colspan="2">عملیات</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pro as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>

                @if($item->state==1)
                    <span class="label label-success"> فعال</span>
                 @elseif($item->state==0)
                    <span class="label label-danger">غیر فعال</span>
                @endif
            </td>
            <td>{{$item->price}}</td>
            <td>{{$item->count_user_pc}}</td>
            <td>{{$item->count_user_mobile}}</td>
            <td><a href="/admin/product/edit/{{$item->id}}" class="btn btn-success">ویرایش</a> </td>
            <td><a href="/admin/product/delete/{{$item->id}}" class="btn btn-danger">حذف</a> </td>
        </tr>
        @endforeach

        </tbody>
    </table>
    <a href="/admin/product/add" class="btn btn-info">ثبت محصول جدید</a>
@endsection
