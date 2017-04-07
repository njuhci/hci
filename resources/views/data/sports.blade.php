@extends('data/common')
@section('title')
    存储运动数据 - 模拟可穿戴设备 - 唤醒
@stop
@section('main-content')
    <div class="panel">
        <div class="panel-body">
            {{--<p>API:&nbsp&nbsp&nbsp&nbsp'/data/sports' By POST</p>--}}
            <form class="form-horizontal" method="post" action="/data/sports">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="type" class="col-lg-2 control-label">运动类型</label>
                    <div class="col-lg-10">
                        <select class="form-control" id="type" name="type">
                            <option value="0">跑步</option>
                            <option value="1">步行</option>
                            <option value="2">健身</option>
                            <option value="3">游泳</option>
                            <option value="4">骑行</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="start_time" class="col-lg-2 control-label">开始时间</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="start_time" name="start_time" value="2016-12-01 19:00:10">
                    </div>
                </div>
                <div class="form-group">
                    <label for="end_time" class="col-lg-2 control-label">结束时间</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="end_time" name="end_time" value="2016-12-01 20:00:10">
                    </div>
                </div>
                <div class="form-group">
                    <label for="sports_time" class="col-lg-2 control-label">运动时长</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="sports_time" name="sports_time" value="60">
                    </div>
                </div>
                <div class="form-group">
                    <label for="heat" class="col-lg-2 control-label">燃烧热量</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="heat" name="heat" value="200">
                    </div>
                </div>
                <div class="form-group">
                    <label for="distance" class="col-lg-2 control-label">运动距离</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="distance" name="distance" value="10">
                    </div>
                </div>
                <div class="form-group">
                    <label for="step" class="col-lg-2 control-label">运动步数</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="step" name="step" value="18000">
                    </div>
                </div>
                <div class="pull-right">
                    <button type="submit" class="btn btn-primary">提交</button>
                </div>

            </form>
        </div>
    </div>
@stop