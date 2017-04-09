@extends('data/common')
@section('title')
    存储运动数据 - 模拟可穿戴设备 - 唤醒
@stop
@section('css_js_extra_file')
    <script src="{{ URL::asset('/assets/js/moment-with-locales.js') }}"></script>
    <link rel="stylesheet"
          href="{{ URL::asset('/assets/plugins/DateTimePicker/css/bootstrap-datetimepicker.min.css') }}">
    <script src="{{ URL::asset('/assets/plugins/DateTimePicker/js/bootstrap-datetimepicker.min.js') }}"></script>
@stop
@section('main-content')
    <div class="panel">
        <div class="panel-body">
            {{--<p>API:&nbsp&nbsp&nbsp&nbsp'/data/sports' By POST</p>--}}
            <form class="form-horizontal" method="post" action="/data/sports">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="row">
                    <div class="form-group col-lg-6">
                        <label for="type" class="col-lg-4 control-label">运动类型</label>
                        <div class="col-lg-8">
                            <select class="form-control" id="type" name="type">
                                <option value="0">跑步</option>
                                <option value="1">步行</option>
                                <option value="2">健身</option>
                                <option value="3">游泳</option>
                                <option value="4">骑行</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-lg-6">
                        <label for="start_time" class="col-lg-4 control-label">开始时间</label>
                        <div class="col-lg-8">
                            <div class='input-group date' id='js-start_time'>
                                <input type='text' class="form-control" name="start_time"/>
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="end_time" class="col-lg-4 control-label">结束时间</label>
                        <div class="col-lg-8">
                            <div class='input-group date' id='js-end_time'>
                                <input type='text' class="form-control" name="start_time"/>
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-lg-6">
                        <label for="sports_time" class="col-lg-4 control-label">运动时长</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="sports_time"
                                   name="sports_time">
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="heat" class="col-lg-4 control-label">燃烧热量</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="heat" name="heat">
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="form-group col-lg-6">
                        <label for="distance" class="col-lg-4 control-label">运动距离</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="distance" name="distance">
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="step" class="col-lg-4 control-label">运动步数</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="step" name="step">
                        </div>
                    </div>
                </div>
                <div class="pull-right" style="margin-right: 60px">
                    <button type="submit" class="btn btn-primary btn-sm">保存</button>
                </div>

            </form>
        </div>
    </div>
@stop
@section('css_js_extra_text')

    <script>
        $(document).ready(function () {
            $('#js-start_time').datetimepicker({
                locale: 'zh-CN',
                format: 'YYYY-MM-DD hh:mm:ss'
            });
            $('#js-end_time').datetimepicker({
                locale: 'zh-CN',
                format: 'YYYY-MM-DD hh:mm:ss'
            });
        });
    </script>
@stop