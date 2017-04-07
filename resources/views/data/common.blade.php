@extends('common/app')
@section('content')
    <div class="row">
        <div class="col-lg-3">
            <div class="list-group">
                <a href="/data/sports/create" class="list-group-item">运动</a>
                <a href="/data/health/create" class="list-group-item">身体健康</a>
                <a href="/data/sleep/create" class="list-group-item">睡眠</a>
            </div>
        </div>
        <div class="col-lg-9">
            @yield('main-content')
        </div>
    </div>
@stop
