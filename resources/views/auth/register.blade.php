@extends('common/app')
@section('title')
    注册 - 唤醒
@stop
@section('content')
    <div class="col-sm-offset-3 col-sm-6 register-panel">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">唤醒&nbsp&nbsp&nbsp
                    <i class="fa fa-angle-right"></i>&nbsp&nbsp&nbsp
                    注册&nbsp
                    <i class="fa fa-user"></i>
                </h3>
            </div>
            <div class="panel-body">
                <form role="form" method="post" action="/auth/register">
                    <div class="row">
                        <div class="col-sm-offset-1 col-sm-10">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="username" class="sr-only">用户名</label>
                                <input type="text" class="form-control" name="username" placeholder="用户名">
                            </div>
                            <div class="form-group">
                                <label for="email" class="sr-only">邮箱</label>
                                <input type="text" class="form-control" name="email" placeholder="邮箱">
                            </div>
                            <div class="form-group">
                                <label for="password" class="sr-only">密码</label>
                                <input type="password" class="form-control" name="password" placeholder="密码">
                            </div>
                            <div class="form-group">
                                <label for="passwordAgain" class="sr-only">再次输入密码</label>
                                <input type="password" class="form-control" name="password_confirmation" placeholder="再次输入密码">
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
                                <div class="col-sm-8">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="agree" checked>
                                            同意唤醒服务条款
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <button type="submit" class="btn btn-primary pull-right">注册</button>
                                </div>
                            </div>
                            <div class="register-footer">
                                <a href="#">唤醒服务条款</a>
                                <a href="/auth/login" class="pull-right">已有账号，前往登录</a>
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
        .register-panel {
            margin-top: 20px;
        }

        .panel-title {
            font-weight: lighter;
        }

        .register-footer {
            clear: both;
            font-size: small;
        }

        .panel-body .row {
            margin-top: 15px;
            margin-bottom: 15px;
        }
    </style>
@stop
