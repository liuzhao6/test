@extends('layout.default')
@section('content')
    <div class="col-md-offset-2 col-md-8">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5><strong>注册</strong></h5>
                </div>
                <div class="panel-body">
                    @include('shared/_errors')
                    <form method="post" action="{{ route('users.store') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">名称：</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="email">邮箱：</label>
                            <input type="text" name="email" value="{{ old('email') }}" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="password">密码：</label>
                            <input type="password" name="password" value="{{ old('password') }}" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="password_confirmation">确认密码：</label>
                            <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" class="form-control" />
                        </div>
                        <button class="btn btn-primary">注册</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop