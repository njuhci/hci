@extends('data/common')
@section('title')
    存储睡眠数据 - 模拟可穿戴设备 - 唤醒
@stop
@section('main-content')
    <div class="panel">
        <div class="panel-body">
            {{--<p>API:&nbsp&nbsp&nbsp&nbsp'/data/sleep' By POST</p>--}}
            <form class="form-horizontal" method="post" action="/data/sleep">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="start_time" class="col-lg-2 control-label">开始时间</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="start_time" name="start_time" value="2016-12-01 23:00:00">
                    </div>
                </div>
                <div class="form-group">
                    <label for="end_time" class="col-lg-2 control-label">结束时间</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="end_time" name="end_time" value="2016-12-02 06:30:10">
                    </div>
                </div>
                <div class="form-group">
                    <label for="sleeping_time" class="col-lg-2 control-label">睡眠时长</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="sleeping_time" name="sleeping_time" value="07:30:00">
                    </div>
                </div>
                <div class="form-group">
                    <label for="deep_sleeping_time" class="col-lg-2 control-label">深睡时长</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="deep_sleeping_time" name="deep_sleeping_time" value="05:30:00">
                    </div>
                </div>
                <div class="form-group">
                    <label for="wake_up_times" class="col-lg-2 control-label">唤醒次数</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="wake_up_times" name="wake_up_times" value="1">
                    </div>
                </div>
                <div class="form-group">
                    <label for="sleep_points" class="col-lg-2 control-label">睡眠质量评分</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="sleep_points" name="sleep_points" value="90">
                    </div>
                </div>

                <div class="pull-right">
                    <button type="submit" class="btn btn-primary">提交</button>
                </div>

            </form>
        </div>
    </div>
@stop