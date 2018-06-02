@extends('layout/default')
@section('title','主页')
@section('content')
    <div class='jumbotron'>
        <h1>hello laravel</h1>
        <ol class="alert alert-warning">
            <li>laravel入门</li>
            <li>一切，将从这里开始。</li>
        </ol>
        <p>
            <a class="btn btn-success btn-lg" href='{{ route("signUp") }}'>现在注册</a>
        </p>
    </div>
@stop