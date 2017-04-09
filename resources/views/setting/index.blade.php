@extends('common/app')
@section('title')
    个人设置 - 唤醒
@stop
@section('css_js_extra_file')
    <script src="{{ URL::asset('/assets/js/moment-with-locales.js') }}"></script>
    <link rel="stylesheet"
          href="{{ URL::asset('/assets/plugins/DateTimePicker/css/bootstrap-datetimepicker.min.css') }}">
    <script src="{{ URL::asset('/assets/plugins/DateTimePicker/js/bootstrap-datetimepicker.min.js') }}"></script>
@stop
@section('content')
    <div class="setting-panel panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">个人信息设置</h3>
        </div>
        <div class="panel-body">
            <form id="js-form-info" class="form-horizontal">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="id" class="col-lg-3 control-label">ID</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" id="id" name="id" value="{{ $id }}"
                               disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="username" class="col-lg-3 control-label">用户名</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" id="username" name="username"
                               value="{{ $username }}" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-lg-3 control-label">邮箱</label>
                    <div class="col-lg-9">
                        <input type="email" class="form-control" id="email" name="email"
                               value="{{ $email }}" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="role" class="col-lg-3 control-label">角色</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" id="role" name="role"
                               value="{{ $role }}" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="real_name" class="col-lg-3 control-label">真实姓名</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" id="real_name" name="real_name"
                               value="{{ $real_name }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="nickname" class="col-lg-3 control-label">昵称</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" id="nickname" name="nickname"
                               value="{{ $nickname }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">性别</label>
                    <div class="col-lg-9">
                        <label class="radio-inline">
                            <input type="radio" name="gender" id="male" value="0"
                                   @if ($gender == 0)
                                   checked
                                    @endif
                            >
                            男
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="gender" id="female" value="1"
                                   @if ($gender == 1)
                                   checked
                                    @endif
                            >
                            女
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="province" class="col-lg-3 control-label">所在省份</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" id="province" name="province"
                               value="{{ $province }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="city" class="col-lg-3 control-label">所在城市</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" id="city" name="city"
                               value="{{ $city }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="birthday_picker" class="col-lg-3 control-label">生日</label>
                    <div class="col-lg-9">
                        <div class='input-group date' id='birthday_picker'>
                            <input type='text' class="form-control" name="birthday"
                                   value="{{ $birthday }}"/>
                            <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="introduction" class="col-lg-3 control-label">自我介绍</label>
                    <div class="col-lg-9">
                        <textarea class="form-control" rows="4" id="introduction"
                                  name="introduction">{{ $introduction }}</textarea>
                    </div>
                </div>
                <div class="pull-right">
                    <button type="submit" class="btn btn-primary btn-sm" id="js-btn-info">保存
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="setting-panel panel panel-primary" style="display: none">
        <div class="panel-heading">
            <h3 class="panel-title">修改头像</h3>
        </div>
        <div class="panel-body">
            <form method="post" action="/setting/avatar" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <img src="{{ URL::asset('/img/avatar').'/'.$avatar_url }}"
                     style="width: 100px; height: 100px">
                <input type="file" name="upload" id="upload" style="display:none"/>
                <input type="button" class="btn btn-info btn-sm"
                       onclick="document.getElementById('upload').click();"
                       style="position: relative; top: 35px; left: 10px;" value="上传头像"/>
                <div class="pull-right" style="position: relative; top: 70px;">
                    <button type="submit" class="btn btn-primary btn-sm" id="js-btn-info">保存
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="setting-panel panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">修改密码</h3>
        </div>
        <div class="panel-body">
            <div class="panel-body">
                <form class="form-horizontal" method="post" action="/setting/password">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="old_password" class="col-lg-3 control-label">旧密码</label>
                        <div class="col-lg-9">
                            <input type="password" class="form-control" id="old_password"
                                   name="old_password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="new_password" class="col-lg-3 control-label">新密码</label>
                        <div class="col-lg-9">
                            <input type="password" class="form-control" id="new_password"
                                   name="new_password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="new_password_again" class="col-lg-3 control-label">再次新密码</label>
                        <div class="col-lg-9">
                            <input type="password" class="form-control" id="new_password_again"
                                   name="new_password_again">
                        </div>
                    </div>
                    <div class="pull-right">
                        <button type="submit" class="btn btn-primary btn-sm" id="js-btn-info">保存
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
@section('css_js_extra_text')
    <style>
        .setting-panel {
            width: 50%;
            margin-left: auto;
            margin-right: auto;
        }

        form {
            width: 80%;
            margin-left: 5%;
        }
    </style>
    <script>
        $(document).ready(function () {
            $('#js-btn-info').click(function () {
                $.ajax({
                    url: "/setting/info",
                    data: $("#js-form-info").serialize(),
                    type: "post",
                    success: function (data) {
                        alert("修改成功！");
                    }
                });
            });
            $('#birthday_picker').datetimepicker({
                locale: 'zh-CN',
                format: 'YYYY-MM-DD'
            });
        });
    </script>
@stop