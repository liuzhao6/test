@extends('layout.default')
@section('title','登录')
@section('content')
    <div class="row">
        <div class="col-md-offset-2 col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5><strong>登录</strong></h5>
                </div>
                <div class="panel-body">
                    @include('shared._errors')
                    <form method="post" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <lable for="name">邮箱：</lable>
                            <input type="text" name="email" class="form-control" value="{{ old('email') }}" />
                        </div>
                        <div class="form-group">
                            <lable for="name">密码：</lable>
                            <input type="text" name="password" class="form-control" value="{{ old('password') }}" />
                        </div>

                        <div class="checkbox">
                            <label><input type="checkbox" name="remember"> 记住我</label>
                        </div>


                        <button class="btn btn-primary">登录</button>
                    </form>
                    <hr/>
                    <p>还没账号？<a href="{{ route('signUp') }}">现在注册</a></p>
                </div>
            </div>

        </div>
    </div>

@stop
