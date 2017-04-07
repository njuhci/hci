@extends('common/blank')
@section('title')
    唤醒 - 激发你的运动能量
@stop
@section('body')
    @include('common/header')

    <div class="content container text-center">
        <h1>唤醒</h1>
        <h1>激发你的运动能量</h1>
        <a href="/auth/register" class="btn btn-default btn-lg welcome-join-button">马上加入</a>
    </div>
    <div class="footer navbar-fixed-bottom">
        <div class="container text-center">
            <p>Copyright © 2016 唤醒 南京大学软件学院</p>
        </div>
    </div>

    <style>
        body {
            background-color: #1FA67A;
        }

        .navbar {
            border-bottom: 1px solid #199375;
        }

        h1 {
            color: #ffffff;
            font-size: 80px;
            font-weight: bold;
            margin-bottom: 50px;
        }

        .footer {
            color: #116957;
            font-size: small;
            margin-bottom: 10px;
        }

    </style>
@stop
