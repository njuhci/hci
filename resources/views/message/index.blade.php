@extends('common.app')
@section('title')
    通知 - 唤醒
@stop
@section('css_js_extra_file')
    <link rel="stylesheet" href="{{ URL::asset('/assets/plugins/iCheck/square/green.css') }}">
    <script src="{{ URL::asset('/assets/plugins/iCheck/icheck.min.js') }}"></script>
@stop
@section('content')
    <div class="row">

        <div class="col-sm-3">
            <div class="panel type-panel">
                <div class="panel-heading">
                    <h5 class="inline-title">通知类型</h5>
                    <div class="pull-right">
                        <a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#type-setting-modal">设置</a>
                    </div>
                </div>
                <div class="list-group small">
                    <a href="#" class="list-group-item active">所有</a>
                    <a href="#" class="list-group-item">系统通知</a>
                    <a href="#" class="list-group-item">专家建议</a>
                    <a href="#" class="list-group-item">好友申请</a>
                    <a href="#" class="list-group-item">活动通知</a>
                    <a href="#" class="list-group-item">朋友圈动态</a>
                    <a href="#" class="list-group-item">兴趣组通知</a>
                </div>
            </div>
        </div>

        <div class="col-sm-9">
            <div class="panel message-panel">
                <div class="panel-body message-body">
                    [系统通知] 系统将于2015年10月31凌晨5点进行升级，对用户表示歉意。
                </div>
                <div class="panel-body message-body panel-top-border">
                    <div class="row">
                        <div class="col-md-11 col-sm-10">
                            [专家建议] 您的提问“我太胖了”已有专家给出建议，请前往查看。
                        </div>
                        <div class="col-md-1 col-sm-2">
                            <a href="#" class="btn btn-primary btn-xs pull-right">前往查看</a>
                        </div>
                    </div>
                </div>
                <div class="panel-body message-body panel-top-border">
                    <div class="row">
                        <div class="col-xs-11">
                            [好友申请] 小野猪申请成为你的好友。
                        </div>
                        <div class="col-xs-1">
                            <a href="#" class="btn btn-primary btn-xs pull-right">前往查看</a>
                        </div>
                    </div>
                </div>
                <div class="panel-body message-body panel-top-border">
                    <div class="row">
                        <div class="col-xs-11">
                            [好友申请] 小小野猪申请成为你的好友。
                        </div>
                        <div class="col-xs-1">
                            <a href="#" class="btn btn-primary btn-xs pull-right">前往查看</a>
                        </div>
                    </div>
                </div>
                <div class="panel-body message-body panel-top-border">
                    <div class="row">
                        <div class="col-xs-11">
                            [好友申请] 中野猪申请成为你的好友。
                        </div>
                        <div class="col-xs-1">
                            <a href="#" class="btn btn-primary btn-xs pull-right">前往查看</a>
                        </div>
                    </div>
                </div>
                <div class="panel-body message-body panel-top-border have_read_panel">
                    <div class="row">
                        <div class="col-xs-11">
                            [好友申请] 大野猪申请成为你的好友。
                        </div>
                        <div class="col-xs-1">
                            <a href="#" class="btn btn-primary btn-xs pull-right">前往查看</a>
                        </div>
                    </div>
                </div>
                <div class="panel-body message-body panel-top-border have_read_panel">
                    <div class="row">
                        <div class="col-xs-11">
                            [好友申请] 大野猪申请成为你的好友。
                        </div>
                        <div class="col-xs-1">
                            <a href="#" class="btn btn-primary btn-xs pull-right">前往查看</a>
                        </div>
                    </div>
                </div>
                <div class="panel-body message-body panel-top-border have_read_panel">
                    <div class="row">
                        <div class="col-xs-11">
                            [好友申请] 大野猪申请成为你的好友。
                        </div>
                        <div class="col-xs-1">
                            <a href="#" class="btn btn-primary btn-xs pull-right">前往查看</a>
                        </div>
                    </div>
                </div>
                <div class="panel-body message-body panel-top-border have_read_panel">
                    <div class="row">
                        <div class="col-xs-11">
                            [好友申请] 大野猪申请成为你的好友。
                        </div>
                        <div class="col-xs-1">
                            <a href="#" class="btn btn-primary btn-xs pull-right">前往查看</a>
                        </div>
                    </div>
                </div>
                <div class="panel-body message-body panel-top-border have_read_panel">
                    <div class="row">
                        <div class="col-xs-11">
                            [好友申请] 大野猪申请成为你的好友。
                        </div>
                        <div class="col-xs-1">
                            <a href="#" class="btn btn-primary btn-xs pull-right">前往查看</a>
                        </div>
                    </div>
                </div>
                <div class="panel-body message-body panel-top-border have_read_panel">
                    <div class="row">
                        <div class="col-xs-11">
                            [好友申请] 大野猪申请成为你的好友。
                        </div>
                        <div class="col-xs-1">
                            <a href="#" class="btn btn-primary btn-xs pull-right">前往查看</a>
                        </div>
                    </div>
                </div>
                <div class="panel-body message-body panel-top-border have_read_panel">
                    <div class="row">
                        <div class="col-xs-11">
                            [好友申请] 大野猪申请成为你的好友。
                        </div>
                        <div class="col-xs-1">
                            <a href="#" class="btn btn-primary btn-xs pull-right">前往查看</a>
                        </div>
                    </div>
                </div>
                <div class="panel-body message-body panel-top-border have_read_panel">
                    <div class="row">
                        <div class="col-xs-11">
                            [好友申请] 大野猪申请成为你的好友。
                        </div>
                        <div class="col-xs-1">
                            <a href="#" class="btn btn-primary btn-xs pull-right">前往查看</a>
                        </div>
                    </div>
                </div>
                <div class="panel-body message-body panel-top-border have_read_panel">
                    <div class="row">
                        <div class="col-xs-11">
                            [好友申请] 大野猪申请成为你的好友。
                        </div>
                        <div class="col-xs-1">
                            <a href="#" class="btn btn-primary btn-xs pull-right">前往查看</a>
                        </div>
                    </div>
                </div>
                <div class="panel-body message-body panel-top-border have_read_panel">
                    <div class="row">
                        <div class="col-xs-11">
                            [好友申请] 大野猪申请成为你的好友。
                        </div>
                        <div class="col-xs-1">
                            <a href="#" class="btn btn-primary btn-xs pull-right">前往查看</a>
                        </div>
                    </div>
                </div>
                <div class="panel-body message-body panel-top-border have_read_panel">
                    <div class="row">
                        <div class="col-xs-11">
                            [好友申请] 大野猪申请成为你的好友。
                        </div>
                        <div class="col-xs-1">
                            <a href="#" class="btn btn-primary btn-xs pull-right">前往查看</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="loading">
                <i class="fa fa-2x fa-spinner fa-pulse"></i>
            </div>
        </div>
    </div>
@stop
@section('css_js_extra_text')
    <style>
        #type-setting-modal {
            top: 20%;
        }

        .have_read_panel {
            background-color: #f3f3f3;
            color: #969696;
        }


        .loading {
            text-align: center;
            color: #a0a0a0;
        }

    </style>

    <script>
        $(document).ready(function() {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-green',
                increaseArea: '20%' // optional
            });
            alert("此页面未完成，仅仅是静态页面");
        });
    </script>
@stop