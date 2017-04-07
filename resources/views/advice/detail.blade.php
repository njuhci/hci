@extends('common/app')
@section('title')
    提问 - 唤醒
@stop
@section('content')
    <div class="row">
        <div class="col-lg-3">
            @if (Auth::user()->info->id == 2 || Auth::user()->info->id == 3)
            <a href="/expert/import" class="btn btn-primary btn-block">批量导入建议</a>
            @endif
            <a href="/expert/addQuestion" class="btn btn-primary btn-block">创建新提问</a>
        </div>
        <div class="col-lg-9">
            <div class="panel">
                <div class="panel-heading">
                    <h5 class="inline-title">
                        @if($q->type == 1)
                            [健康]&nbsp
                        @else
                            [运动]&nbsp
                        @endif
                        {{ $q->topic }}</h5>
                </div>
                <div class="panel-body panel-top-border">

                    <div class="row">
                        <div class="col-lg-2">
                            <p>提问ID</p>
                        </div>
                        <div class="col-lg-10">
                            {{ $q->id }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <p>提问人</p>
                        </div>
                        <div class="col-lg-10">
                            {{ $nickname->nickname }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <p>提问内容</p>
                        </div>
                        <div class="col-lg-10">
                            {{ $q->content }}
                        </div>
                    </div>
                    @if (count($d) == 0 && $q->user_id != Auth::user()->id)
                    <div class="pull-right">
                        <a href="/expert/reply/{{ $q->id }}" class="btn btn-primary btn-sm">发表建议</a>
                    </div>
                    @endif
                    @if($q->user_id == Auth::user()->id)
                    <div class="pull-right">
                        <a href="/expert/editQuestion/{{ $q->id }}" class="btn btn-primary btn-sm">编辑</a>
                        <a href="/expert/deleteQuestion/{{ $q->id }}" class="btn btn-danger btn-sm">删除</a>
                    </div>
                    @endif
                </div>
            </div>
            <div class="panel">
                <div class="panel-heading">
                    <h5 class="inline-title">专家建议</h5>
                </div>
                @foreach($a as $t)
                    <div class="panel-body panel-top-border">
                        <p class="who">
                            @if($q->type = 1)
                                医生&nbsp
                            @else
                                教练&nbsp
                            @endif
                            {{ $t->real_name }}：
                        </p>
                        <p>{{ $t->content }}</p>
                        <div class="pull-right">
                            @if (Auth::user()->id == $t->user_id)
                            <a href="/expert/editReply/{{ $q->id }}/{{ $t->id }}" class="btn btn-primary btn-sm">编辑</a>
                            <a href="/expert/deleteReply/{{ $q->id }}/{{ $t->id }}" class="btn btn-danger btn-sm">删除</a>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop
@section('css_js_extra_text')
    <script>
        $(document).ready(function() {

        });
    </script>
    <style>
        .who {
            color: #708078;
        }
    </style>
@stop