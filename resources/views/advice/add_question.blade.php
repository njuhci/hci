@extends('common/app')
@section('title')
    创建新提问 - 唤醒
@stop
@section('content')
    <div class="create-panel panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">创建新提问</h3>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" method="post" action="/expert/addQuestion">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="topic" class="col-lg-3 control-label">主题</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" id="topic" name="topic">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">类型</label>
                    <div class="col-lg-9">
                        <label class="radio-inline">
                            <input type="radio" name="type" id="health" value="1" checked>
                            健康
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="type" id="sports" value="2">
                            运动
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="content" class="col-lg-3 control-label">内容</label>
                    <div class="col-lg-9">
                        <textarea class="form-control" rows="4" id="content" name="content"></textarea>
                    </div>
                </div>
                <div class="pull-right">
                    <a href="/expert" class="btn btn-default">返回</a>
                    <button type="submit" class="btn btn-primary">提交</button>
                </div>
            </form>
        </div>
    </div>
@stop
@section('css_js_extra_text')
    <style>
        .create-panel {
            width: 50%;
            margin-left: auto;
            margin-right: auto;
        }

        form {
            width: 90%;
        }
    </style>
    <script>
    </script>
@stop