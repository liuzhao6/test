@extends('layout/default')
@section('title','主页')
@section('content')
    @if(Auth::check())
        <div class="row">
            <div class="col-md-8">
                <section class="status_form">
                    @include('statuses._status_form')
                </section>
                <h3>微博列表</h3>
                @include('statuses._feed')
            </div>
            <aside  class="col-md-4">
                <section class="user_info">
                    @include('shared._user_info',['user' => Auth::user()])
                </section>

                <section class="stats">
                    @include('shared._stats', ['user' => Auth::user()])
                </section>
            </aside >

        </div>
    @else
    <div class='jumbotron'>
        <h1>hello laravel</h1>
        <ul class="alert alert-warning" style="list-style: none;">
            <li>laravel入门</li>
            <li>一切，将从这里开始。</li>
        </ul>
        <p>
            <a class="btn btn-success btn-lg" href='{{ route("signUp") }}'>现在注册</a>
        </p>
    </div>
    @endif
@stop