@extends('common/app')
@section('title')
    后台管理 - 添加新用户 - 唤醒
@stop
@section('content')
    <div class="add-panel panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">添加新用户</h3>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" method="post" action="/admin/create">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="username" class="col-lg-2 control-label">用户名</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-lg-2 control-label">邮箱</label>
                    <div class="col-lg-10">
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-lg-2 control-label">密码</label>
                    <div class="col-lg-10">
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="select" class="col-lg-2 control-label">角色</label>
                    <div class="col-lg-10">
                        <select class="form-control" id="select" name="role">
                            <option>用户</option>
                            <option>医生</option>
                            <option>教练</option>
                        </select>
                    </div>
                </div>
                <div class="pull-right">
                    <a href="/admin" class="btn btn-default">取消</a>
                    <button type="submit" class="btn btn-primary">确定</button>
                </div>
            </form>
        </div>
    </div>
@stop
@section('css_js_extra_text')
    <style>
        .add-panel {
            width: 40%;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
    <script>

    </script>
@stop