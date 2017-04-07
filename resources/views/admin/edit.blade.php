@extends('common/app')
@section('title')
    后台管理 - 改变角色 - 唤醒
@stop
@section('content')
    <div class="add-panel panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">改变用户角色</h3>
        </div>
        <div class="panel-body">
            <p>将用户 {{ $username }} (ID = {{ $id }}) 的角色更改为：</p>
            <form method="post" action="/admin/update">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="id" value="{{ $id }}">
                <select class="form-control" id="select" name="role" style="width: 70%;">
                    <option>用户</option>
                    <option>医生</option>
                    <option>教练</option>
                </select>
                <div class="pull-right" style="margin-top: 20px">
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