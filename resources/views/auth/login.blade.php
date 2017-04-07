@extends('common/app')
@section('title')
    登录 - 唤醒
@stop
@section('content')
    <div class="col-sm-offset-3 col-sm-6 login-panel">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">唤醒&nbsp&nbsp&nbsp
                    <i class="fa fa-angle-right"></i>&nbsp&nbsp&nbsp
                    登录&nbsp
                    <i class="fa fa-sign-in"></i>
                </h3>
            </div>
            <div class="panel-body">
                <form role="form" method="post" action="/auth/login">
                    <div class="row">
                        <div class="col-sm-offset-1 col-sm-10">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="email" class="sr-only">邮箱</label>
                                <input type="text" class="form-control" name="email" placeholder="邮箱" value="{{ old('email') }}">
                            </div>
                            <div class="form-group">
                                <label for="password" class="sr-only">密码</label>
                                <input type="password" class="form-control" name="password" placeholder="密码">
                            </div>
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> 记住登录状态
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary pull-right">登录</button>
                                </div>
                            </div>
                            <div class="login-footer">
                                <a href="/auth/password_reset" class="pull-left">忘记密码</a>
                                <a href="/auth/register" class="pull-right">还没有注册？</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
@section('css_js_extra_text')
    <style>
        .login-panel {
            margin-top: 20px;
        }

        .panel-title {
            font-weight: lighter;
        }

        .login-footer {
            clear: both;
            font-size: small;
        }

        .panel-body .row {
            margin-top: 15px;
            margin-bottom: 15px;
        }

    </style>
@stop