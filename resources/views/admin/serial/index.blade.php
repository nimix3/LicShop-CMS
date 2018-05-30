@extends('layouts.admin.admin_layout')
@section('content')
    <div class="page-header">
        <h1>محصولات</h1>
    </div>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>نام کاربری</th>
            <th>کلمه عبور</th>
            <th>لایسنس</th>
            <th>وضعیت فروش</th>
            <th>دسته</th>
            <th style="text-align: center" colspan="2">عملیات</th>
        </tr>
        </thead>
        <tbody>
        @foreach($serial as $item)
        <tr>
            <td>{{$item->username}}</td>
            <td>{{$item->password}}</td>
            <td>{{$item->lisence_code}}</td>
            <td>
                @if($item->is_sell==1)
                    <span class="label label-danger">فروخته شده</span>
                @elseif($item->state==0)
                    <span class="label label-success">آماده فروش</span>
                @endif
            </td>
            <td>
                @foreach($pro as $p)
                        @if($p->id == $item->antivirus_id)
                            {{$p->name}}
                        @endif
                @endforeach
            </td>
            <td><a href="/admin/product/edit/{{$item->id}}" class="btn btn-success">ویرایش</a> </td>
            <td><a href="/admin/product/delete/{{$item->id}}" class="btn btn-danger">حذف</a> </td>
        </tr>
        @endforeach

        </tbody>
    </table>
    <a href="add" class="btn btn-info">ثبت محصول جدید</a>
@endsection
