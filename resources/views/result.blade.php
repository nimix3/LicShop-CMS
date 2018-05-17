@extends('layouts.site.site')
@section('pageTitle', 'دریافت')
@section('content')
    <div class="page-header">
        <h1>دریافت نرم افزار</h1>
    </div>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Username</th>
            <th>Password</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $item)
        <tr>
            <td>{{$item->username}}</td>
            <td>{{$item->password}}</td>

        </tr>
        @endforeach
        </tbody>
    </table>
@endsection