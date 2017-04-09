@extends('data/common')
@section('title')
    存储身体健康数据 - 模拟可穿戴设备 - 唤醒
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
            {{--<p>API:&nbsp&nbsp&nbsp&nbsp'/data/health' By POST</p>--}}
            <form class="form-horizontal" method="post" action="/data/health">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="row">
                    <div class="form-group">
                        <label for="time" class="col-lg-2 control-label">测量时间</label>
                        <div class="col-lg-5">
                            <div class='input-group date' id='js-start_time'>
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
                        <label for="height" class="col-lg-4 control-label">身高(cm)</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="height" name="height">
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="weight" class="col-lg-4 control-label">体重(kg)</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="weight" name="weight">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-lg-6">
                        <label for="fat_percentage" class="col-lg-4 control-label">脂肪率(%)</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="fat_percentage"
                                   name="fat_percentage">
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="muscle_percentage" class="col-lg-4 control-label">肌肉率(%)</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="muscle_percentage"
                                   name="muscle_percentage">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-lg-6">
                        <label for="visceral_fat" class="col-lg-4 control-label">内脏脂肪(g)</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="visceral_fat"
                                   name="visceral_fat">
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="metabolic_rate" class="col-lg-4 control-label">基础代谢率(%)</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="metabolic_rate"
                                   name="metabolic_rate">
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="form-group col-lg-6">
                        <label for="moisture_percentage" class="col-lg-4 control-label">水分率(%)</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="moisture_percentage"
                                   name="moisture_percentage">
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="protein" class="col-lg-4 control-label">蛋白质(g)</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="protein" name="protein">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-lg-6">
                        <label for="bone_mass" class="col-lg-4 control-label">骨量(kg)</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="bone_mass" name="bone_mass">
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="bmi" class="col-lg-4 control-label">BMI</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="bmi" name="bmi">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-lg-6">
                        <label for="heart_rate" class="col-lg-4 control-label">心率(min)</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="heart_rate"
                                   name="heart_rate">
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="blood_pressure" class="col-lg-4 control-label">血压(kpa)</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="blood_pressure"
                                   name="blood_pressure">
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
        });
    </script>
@stop