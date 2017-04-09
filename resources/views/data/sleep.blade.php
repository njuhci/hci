@extends('data/common')
@section('title')
    存储睡眠数据 - 模拟可穿戴设备 - 唤醒
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
            {{--<p>API:&nbsp&nbsp&nbsp&nbsp'/data/sleep' By POST</p>--}}
            <form class="form-horizontal" method="post" action="/data/sleep">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
                                <input type='text' class="form-control" name="end_time"/>
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-lg-6">
                        <label for="sleeping_time" class="col-lg-4 control-label">睡眠时长</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="sleeping_time"
                                   name="sleeping_time">
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="deep_sleeping_time" class="col-lg-4 control-label">深睡时长</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="deep_sleeping_time"
                                   name="deep_sleeping_time">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-lg-6">
                        <label for="wake_up_times" class="col-lg-4 control-label">唤醒次数</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="wake_up_times"
                                   name="wake_up_times">
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="sleep_points" class="col-lg-4 control-label">睡眠质量评分</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="sleep_points"
                                   name="sleep_points">
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