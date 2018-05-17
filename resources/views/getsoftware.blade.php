
@extends('layouts.site.site')
@section('pageTitle', 'دریافت نرم افزار')
@section('content')
    <ol class="breadcrumb">
        <li><a href="/index">صفحه اصلی</a></li>
        <li><a href="/getsoftware">دریافت نرم افزار</a></li>
    </ol>
    <div class="page-header">
        <h1>دریافت نرم افزار</h1>
    </div>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>عنوان</th>
            <th>نسخه</th>
            <th>حجم</th>
            <th>لینک </th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Node 32</td>
            <td>x86</td>
            <td>50 MB</td>
            <td><a href="#">دانلود</a></td>
        </tr>
        <tr>
            <td>Node 32</td>
            <td>x64</td>
            <td>63 MB</td>
            <td><a href="#">دانلود</a></td>
        </tr>
        <tr>
            <td>Smart Security</td>
            <td>x86</td>
            <td>74 MB</td>
            <td><a href="#">دانلود</a></td>
        </tr>
        <tr>
            <td>Smart Security</td>
            <td>x64</td>
            <td>80 MB</td>
            <td><a href="#">دانلود</a> </td>
        </tr>
        </tbody>
    </table>
@endsection
