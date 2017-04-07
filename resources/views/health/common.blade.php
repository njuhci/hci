@extends('common/app')
@section('content')
    <div class="row">
        <div class="col-lg-3">
            <div class="list-group">
                <a href="/health/sports" class="list-group-item">运动</a>
                <a href="/health/health" class="list-group-item">身体健康</a>
                <a href="/health/sleep" class="list-group-item">睡眠</a>
            </div>
            <a href="/data/sports/create" class="btn btn-primary btn-block">模拟可穿戴设备</a>
        </div>
        <div class="col-lg-9">
            @yield('main-content')
        </div>
    </div>
@stop
