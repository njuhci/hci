@extends('common/app')
@section('title')
    健康 - 设置目标 - 唤醒
@stop
@section('content')
    <div class="setting-panel panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">设置目标</h3>
        </div>
        <div class="panel-body">
            <form method="post" action="/health/goal">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="row goal-item">
                    <div class="col-lg-8  goal-text">
                        每周目标： 燃烧热量(大卡)
                    </div>
                    <div class="col-lg-4">
                        <input type="text" class="form-control"name="heat" value="{{ $heat }}">
                    </div>
                </div>
                <div class="row goal-item">
                    <div class="col-lg-8  goal-text">
                        每周目标： 运动距离（公里）
                    </div>
                    <div class="col-lg-4">
                        <input type="text" class="form-control"name="distance" value="{{ $distance }}">
                    </div>
                </div>
                <div class="row goal-item">
                    <div class="col-lg-8  goal-text">
                        每周目标： 运动步数
                    </div>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="step" value="{{ $step }}">
                    </div>
                </div>
                <div class="row goal-item">
                    <div class="col-lg-8  goal-text">
                        理想体重（公斤）
                    </div>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="weight" value="{{ $weight }}">
                    </div>
                </div>
                <div class="pull-right">
                    <button type="submit" class="btn btn-primary btn-sm">保存</button>
                    <a href="/health" class="btn btn-danger btn-sm">返回</a>
                </div>
            </form>
        </div>
    </div>
@stop
@section('css_js_extra_text')
    <style>
        .setting-panel {
            width: 40%;
            margin-left: auto;
            margin-right: auto;
        }
        .goal-item {
            margin-bottom: 10px;
        }
        .goal-text {
            position: relative;
            top: 10px;
        }
    </style>
@stop