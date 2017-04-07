@extends('common/app')
@section('title')
    编辑建议 - 唤醒
@stop
@section('content')
    <div class="create-panel panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">编辑建议</h3>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" method="post" action="/expert/editReply">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="id" value="{{ $a->id }}">
                <input type="hidden" name="qid" value="{{ $qid }}">
                <div class="form-group">
                    <label for="content" class="col-lg-3 control-label">内容</label>
                    <div class="col-lg-9">
                        <textarea class="form-control" rows="8" id="content" name="content">{{ $a->content }}</textarea>
                    </div>
                </div>
                <div class="pull-right">
                    <a href="/expert/detail/{{ $qid }}" class="btn btn-default">返回</a>
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