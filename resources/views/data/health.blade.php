@extends('data/common')
@section('title')
    存储身体健康数据 - 模拟可穿戴设备 - 唤醒
@stop
@section('main-content')
    <div class="panel">
        <div class="panel-body">
            {{--<p>API:&nbsp&nbsp&nbsp&nbsp'/data/health' By POST</p>--}}
            <form class="form-horizontal" method="post" action="/data/health">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="time" class="col-lg-2 control-label">测量时间</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="time" name="time" value="2016-12-01 21:10:15">
                    </div>
                </div>
                <div class="form-group">
                    <label for="height" class="col-lg-2 control-label">身高</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="height" name="height" value="160">
                    </div>
                </div>
                <div class="form-group">
                    <label for="weight" class="col-lg-2 control-label">体重</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="weight" name="weight" value="55">
                    </div>
                </div>
                <div class="form-group">
                    <label for="fat_percentage" class="col-lg-2 control-label">脂肪率</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="fat_percentage" name="fat_percentage" value="20">
                    </div>
                </div>
                <div class="form-group">
                    <label for="muscle_percentage" class="col-lg-2 control-label">肌肉率</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="muscle_percentage" name="muscle_percentage" value="10">
                    </div>
                </div>
                <div class="form-group">
                    <label for="visceral_fat" class="col-lg-2 control-label">内脏脂肪</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="visceral_fat" name="visceral_fat" value="2">
                    </div>
                </div>
                <div class="form-group">
                    <label for="metabolic_rate" class="col-lg-2 control-label">基础代谢率</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="metabolic_rate" name="metabolic_rate" value="10">
                    </div>
                </div>
                <div class="form-group">
                    <label for="moisture_percentage" class="col-lg-2 control-label">水分率</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="moisture_percentage" name="moisture_percentage" value="65">
                    </div>
                </div>
                <div class="form-group">
                    <label for="protein" class="col-lg-2 control-label">蛋白质</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="protein" name="protein" value="15">
                    </div>
                </div>
                <div class="form-group">
                    <label for="bone_mass" class="col-lg-2 control-label">骨量</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="bone_mass" name="bone_mass" value="2.6">
                    </div>
                </div>
                <div class="form-group">
                    <label for="bmi" class="col-lg-2 control-label">BMI</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="bmi" name="bmi" value="20">
                    </div>
                </div>
                <div class="form-group">
                    <label for="heart_rate" class="col-lg-2 control-label">心率</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="heart_rate" name="heart_rate" value="72">
                    </div>
                </div>
                <div class="form-group">
                    <label for="blood_pressure" class="col-lg-2 control-label">血压</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="blood_pressure" name="blood_pressure" value="110/75">
                    </div>
                </div>

                <div class="pull-right">
                    <button type="submit" class="btn btn-primary">提交</button>
                </div>

            </form>
        </div>
    </div>
@stop