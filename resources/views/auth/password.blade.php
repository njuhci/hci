@extends('common/app')
@section('title')
    重置密码 - 唤醒
@stop
@section('content')
    <div class="col-sm-offset-3 col-sm-6 reset-panel">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">唤醒&nbsp&nbsp&nbsp
                    <i class="fa fa-angle-right"></i>&nbsp&nbsp&nbsp
                    重置密码&nbsp
                    <i class="fa fa-lock"></i>
                </h3>
            </div>
            <div class="panel-body" id="firstStep">
                <div class="row">
                    <div class="col-sm-offset-1 col-sm-10">
                        <div class="form-group">
                            <label for="email" class="sr-only">请输入您的邮箱</label>
                            <input type="email" class="form-control" id="email" placeholder="请输入您的邮箱">
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <input type="text" class="form-control" id="code" placeholder="请输入验证码">
                            </div>
                            <div class="col-md-5">
                                <button type="submit" class="btn btn-primary btn-block">获取验证码</button>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary pull-right" id="nextStep">下一步</button>
                    </div>
                </div>
            </div>
            <div class="panel-body" id="secondStep">
                <div class="row">
                    <div class="col-sm-offset-1 col-sm-10">
                        <div class="form-group">
                            <label for="password" class="sr-only">请输入新密码</label>
                            <input type="password" class="form-control" id="password" placeholder="请输入新密码">
                        </div>
                        <div class="form-group">
                            <label for="password" class="sr-only">请再次输入新密码</label>
                            <input type="password" class="form-control" id="passwordAgain" placeholder="请再次输入新密码">
                        </div>
                        <button type="submit" class="btn btn-primary pull-right" id="commit">确认</button>
                    </div>
                </div>
            </div>
            <div class="panel-body" id="thirdStep">
                <p>您已成功修改密码，请使用新密码登录。</p>
                <p id="jumpToLogin">正在跳转到登录界面......</p>
            </div>
        </div>
    </div>
@stop
@section('css_js_extra_text')
    <style>
        .reset-panel {
            margin-top: 20px;
        }

        .panel-title {
            font-weight: lighter;
        }

        .panel-body .row {
            margin-top: 15px;
            margin-bottom: 15px;
        }

        #secondStep, #thirdStep {
            display: none;
        }

        #thirdStep p {
            text-align: center;
        }

        #jumpToLogin {
            font-size: small;
            color: #938e95;
        }


    </style>

    <script>
        $(document).ready(function () {

            $("#nextStep").click(function() {
                $("#firstStep").hide();
                $("#secondStep").show();
            });
            $("#commit").click(function() {
                $("#secondStep").hide();
                $("#thirdStep").show();
            });
        });
    </script>
@stop