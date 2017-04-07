@extends('common/app')
@section('title')
    活动 - {{ $activity->topic }} - 唤醒
@stop
@section('content')
    <div class="row">
        <div class="col-lg-3">
            <a href="/activity/add" class="btn btn-primary btn-block">发起新活动</a>
        </div>
        <div class="col-lg-9">
            <div class="panel activities-panel">
                <div class="panel-heading">
                    <h5 class="inline-title">活动 - {{ $activity->topic }}</h5>
                    <div class="pull-right">
                        <a href="/activity" class="btn btn-primary btn-xs">返回</a>
                    </div>
                </div>
                <div class="panel-body panel-top-border">
                    <div class="row">
                        <div class="col-lg-2">
                            <p>内容</p>
                        </div>
                        <div class="col-lg-10">
                            <p>{{ $activity->content }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <p>开始时间</p>
                        </div>
                        <div class="col-lg-10">
                            <p>{{ $activity->start_time }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <p>结束时间</p>
                        </div>
                        <div class="col-lg-10">
                            <p>{{ $activity->end_time }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <p>地点</p>
                        </div>
                        <div class="col-lg-10">
                            <p>{{ $activity->address }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <p>发起人</p>
                        </div>
                        <div class="col-lg-10">
                            <p>{{ \App\UserInfo::find($activity->user_id)->nickname }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <p>备注</p>
                        </div>
                        <div class="col-lg-10">
                            <p>{{ $activity->remark }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <p>报名人数</p>
                        </div>
                        <div class="col-lg-10">
                            <p>{{ $count }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <p>参与者</p>
                        </div>
                        <div class="col-lg-10">
                            <p>
                            <?php
                                foreach($data as $a) {
                                    echo $a->nickname.'&nbsp&nbsp&nbsp&nbsp';
                                }
                            ?>
                            </p>
                        </div>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-info btn-sm" id="js-join" href="/activity/join/{{ $activity->id }}">
                            @if ($join == 0)
                                未报名，马上报名
                            @else
                                已报名，取消报名
                            @endif
                        </a>
                        @if (Auth::user()->id == $activity->user_id)
                            <a href="/activity/edit/{{ $activity->id }}" class="btn btn-primary btn-sm">编辑</a>
                            <a href="/activity/delete/{{ $activity->id }}" class="btn btn-danger btn-sm">删除</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('css_js_extra_text')

@stop