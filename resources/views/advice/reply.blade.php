@extends('common/app')
@section('title')
    发表建议 - 唤醒
@stop
@section('content')
    <div class="create-panel panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">发表建议</h3>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" method="post" action="/expert/reply">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="id" value="{{ $id }}">
                <div class="form-group">
                    <label for="content" class="col-lg-2 control-label">内容</label>
                    <div class="col-lg-10">
                        <textarea class="form-control" rows="8" id="content" name="content"></textarea>
                    </div>
                </div>
                <div class="pull-right">
                    <a href="/expert/detail/{{ $id }}" class="btn btn-default">返回</a>
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
            width: 95%;
        }
    </style>
    <script>
    </script>
@stop