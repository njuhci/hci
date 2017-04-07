@extends('common/app')
@section('title')
    批量导入建议 - 唤醒
@stop
@section('content')
    <div class="create-panel panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">批量导入建议</h3>
        </div>
        <div class="panel-body">
            <p class="tips">提示：支持XML和Excel文件的批量导入。</p>
            <p class="tips">导入内容包括提问ID和建议内容。</p>
            <form method="post" action="/expert/import" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <input type="file" id="upload" name="upload" enctype="multipart/form-data">
                </div>
                <div class="pull-right">
                    <a href="/expert" class="btn btn-default btn-sm">返回</a>
                    <button type="submit" class="btn btn-primary btn-sm">提交</button>
                </div>
            </form>
        </div>
    </div>
@stop
@section('css_js_extra_text')
    <style>
        .create-panel {
            width: 40%;
            margin-left: auto;
            margin-right: auto;
        }
        .tips {
            font-size: small;
            color: #565356;
        }
    </style>
    <script>
    </script>
@stop