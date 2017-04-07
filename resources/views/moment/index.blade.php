@extends('common.app')
@section('title')
    朋友圈 - 唤醒
@stop
@section('content')
    <div class="row">

        <div class="col-sm-3">

            <div class="panel friends-panel">
                <div class="panel-heading panel-heading-up">
                    <h5 class="inline-title">我的好友</h5>
                    <div class="pull-right">
                        <a href="#" class="small">查看所有好友</a>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-4">
                            <a href="/user" title="小明">
                                <img src="img/avatar/1.png" class="img-responsive img-border img-margin-bottom">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a href="/user" title="小洪">
                                <img src="img/avatar/2.jpg" class="img-responsive img-border img-margin-bottom">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a href="/user" title="小白">
                                <img src="img/avatar/3.jpg" class="img-responsive img-border img-margin-bottom">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a href="/user" title="小明">
                                <img src="img/avatar/4.jpg" class="img-responsive img-border img-margin-bottom">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a href="/user" title="小明">
                                <img src="img/avatar/5.jpg" class="img-responsive img-border img-margin-bottom">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a href="/user" title="小明">
                                <img src="img/avatar/6.jpg" class="img-responsive img-border img-margin-bottom">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a href="/user" title="小明">
                                <img src="img/avatar/4.jpg" class="img-responsive img-border img-margin-bottom">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a href="/user" title="小明">
                                <img src="img/avatar/5.jpg" class="img-responsive img-border img-margin-bottom">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a href="/user" title="小明">
                                <img src="img/avatar/6.jpg" class="img-responsive img-border img-margin-bottom">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel rank-panel">
                <div class="panel-heading">
                    <h5 class="inline-title">当日运动排行榜</h5>
                    <div class="pull-right">
                        <a href="#" class="small">查看更多榜单</a>
                    </div>
                </div>
                <div class="panel-body user-rank panel-top-border">
                    <div class="row">
                        <div class="col-xs-2 rank-number">
                            <i class="h2">1</i>
                        </div>
                        <div class="col-xs-4">
                            <a href="/user" title="小明">
                                <img src="img/avatar/1.png" class="img-responsive img-border">
                            </a>
                        </div>
                        <div class="col-xs-6">
                            <div class="progress progress-striped active" style="width: 100%">
                                <div class="progress-bar" style="width: 100%"></div>
                            </div>
                            250 大卡
                        </div>
                    </div>
                </div>
                <div class="panel-body user-rank panel-top-border">
                    <div class="row">
                        <div class="col-xs-2 rank-number">
                            <i class="h2">2</i>
                        </div>
                        <div class="col-xs-4">
                            <a href="/user" title="小洪">
                                <img src="img/avatar/2.jpg" class="img-responsive img-border">
                            </a>
                        </div>
                        <div class="col-xs-6">
                            <div class="progress progress-striped active" style="width: 80%">
                                <div class="progress-bar" style="width: 100%"></div>
                            </div>
                            200 大卡
                        </div>
                    </div>
                </div>
                <div class="panel-body user-rank panel-top-border">
                    <div class="row">
                        <div class="col-xs-2 rank-number">
                            <i class="h2">3</i>
                        </div>
                        <div class="col-xs-4">
                            <a href="/user" title="小白">
                                <img src="img/avatar/3.jpg" class="img-responsive img-border">
                            </a>
                        </div>
                        <div class="col-xs-6">
                            <div class="progress progress-striped active" style="width: 70%">
                                <div class="progress-bar" style="width: 100%"></div>
                            </div>
                            180 大卡
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-sm-9">

            <div class="panel submit-panel">

                <form>
                    <div class="panel-body">
                        <textarea class="form-control" rows="4" id="moment-textarea" style="resize: none; margin-bottom: 5px"></textarea>
                        <div>
                            <button class="btn btn-info btn-sm">图片</button>
                            <button class="btn btn-info btn-sm">定位</button>
                            <button type="submit" class="btn btn-primary btn-sm pull-right">发布</button>
                        </div>
                    </div>
                </form>

            </div>

            <div class="panel moments-panel">

                <div class="panel-top-border">
                    <div class="panel-body">
                        <a href="#">
                            <img src="img/avatar/28.jpeg" class="img-responsive img-circle" title="vboar"
                                 style="width: 70px; float: left; margin-right: 10px" />
                        </a>
                    <span class=""><b>Crystal</b><br/>传说：奶油和蛋糕走进了婚礼的殿堂，所以有了奶油蛋糕。[可怜]而深爱着奶油的面包只能把爱埋在心里，
                        变成了一只泡芙。当你咬下第一口，你就会[心]上它。</span>
                        <div class="clearfix" style="margin-bottom: 10px"></div>
                        <img src="img/avatar/1.png" style="width: 150px; margin-left: 80px; margin-bottom: 10px">
                        <p class="small" style="color: #a0a0a0; margin-left: 80px;">6分钟前</p>
                        <div class="pull-right" style="margin-top: -10px">
                            <a class="small comment-click">评论</a>&nbsp&nbsp&nbsp&nbsp
                            <a href="#"><i class="fa fa-thumbs-o-up"> 127</i></a>
                        </div>
                    </div>
                    <div class="panel-body panel-top-border comment-panel" style="background-color: #fafafa; ;">
                        <form>
                            <img src="img/avatar/28.jpeg" class="img-responsive img-circle" title="vboar"
                                 style="width: 40px; float: left; margin-right: 10px" />
                        <textarea class="form-control" rows="1" class="comment-textArea"
                                  style="resize: none; margin-bottom: 5px; float: right; width: 90%"></textarea>
                            <div class="clearfix" style="margin-bottom: 10px"></div>
                            <button type="submit" class="btn btn-primary btn-sm pull-right">评论</button>
                            <div class="clearfix" style="margin-bottom: 20px"></div>
                        </form>
                        <div style="margin-left: 55px;">
                            <div class="panel-body panel-top-border">
                                <a href="#">
                                    <img src="img/avatar/28.jpeg" class="img-responsive img-circle" title="vboar"
                                         style="width: 40px; float: left; margin-right: 10px" />
                                </a>
                                <p class="small"><b>Crystal</b>： 感谢主页娘【哎是主页娘♀对吧】邮箱小编也非常nice</p>
                                <span class="small" style="color: #a0a0a0;">3分钟前</span>
                                <a href="#" class="small pull-right">回复</a>
                            </div>
                            <div class="panel-body panel-top-border">
                                <a href="#">
                                    <img src="img/avatar/28.jpeg" class="img-responsive img-circle" title="vboar"
                                         style="width: 40px; float: left; margin-right: 10px" />
                                </a>
                                <p class="small"><b>Crystal</b>： 感谢主页娘【哎是主页娘♀对吧】邮箱小编也非常nice</p>
                                <span class="small" style="color: #a0a0a0;">3分钟前</span>
                                <a href="#" class="small pull-right">回复</a>
                            </div>
                            <div class="panel-body panel-top-border">
                                <a href="moment_home.html">
                                    <img src="img/avatar/28.jpeg" class="img-responsive img-circle" title="vboar"
                                         style="width: 40px; float: left; margin-right: 10px" />
                                </a>
                                <p class="small"><b>Crystal</b>： 感谢主页娘【哎是主页娘♀对吧】邮箱小编也非常nice</p>
                                <span class="small" style="color: #a0a0a0;">3分钟前</span>
                                <a href="#" class="small pull-right">回复</a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="panel-top-border">
                    <div class="panel-body">
                        <a href="moment_home.html">
                            <img src="img/avatar/28.jpeg" class="img-responsive img-circle" title="vboar"
                                 style="width: 70px; float: left; margin-right: 10px" />
                        </a>
                    <span class=""><b>Crystal</b><br/>传说：奶油和蛋糕走进了婚礼的殿堂，所以有了奶油蛋糕。[可怜]而深爱着奶油的面包只能把爱埋在心里，
                        变成了一只泡芙。当你咬下第一口，你就会[心]上它。</span>
                        <div class="clearfix" style="margin-bottom: 10px"></div>
                        <img src="img/avatar/28.jpeg" style="width: 150px; margin-left: 80px; margin-bottom: 10px">
                        <p class="small" style="color: #a0a0a0; margin-left: 80px;">6分钟前</p>
                        <div class="pull-right" style="margin-top: -10px">
                            <a class="small comment-click">评论</a>&nbsp&nbsp&nbsp&nbsp
                            <a href="#"><i class="fa fa-thumbs-o-up"> 127</i></a>
                        </div>
                    </div>
                    <div class="panel-body panel-top-border comment-panel" style="background-color: #fafafa; display: none;">
                        <form>
                            <img src="img/avatar/28.jpeg.jpg" class="img-responsive img-circle" title="vboar"
                                 style="width: 40px; float: left; margin-right: 10px" />
                        <textarea class="form-control" rows="1" class="comment-textArea"
                                  style="resize: none; margin-bottom: 5px; float: right; width: 90%"></textarea>
                            <div class="clearfix" style="margin-bottom: 10px"></div>
                            <button type="submit" class="btn btn-primary btn-sm pull-right">评论</button>
                            <div class="clearfix" style="margin-bottom: 20px"></div>
                        </form>
                        <div style="margin-left: 55px;">
                            <div class="panel-body panel-top-border">
                                <a href="#">
                                    <img src="img/avatar/28.jpeg" class="img-responsive img-circle" title="vboar"
                                         style="width: 40px; float: left; margin-right: 10px" />
                                </a>
                                <p class="small"><b>Crystal</b>： 感谢主页娘【哎是主页娘♀对吧】邮箱小编也非常nice</p>
                                <span class="small" style="color: #a0a0a0;">3分钟前</span>
                                <a href="#" class="small pull-right">回复</a>
                            </div>
                            <div class="panel-body panel-top-border">
                                <a href="#">
                                    <img src="img/avatar/28.jpeg" class="img-responsive img-circle" title="vboar"
                                         style="width: 40px; float: left; margin-right: 10px" />
                                </a>
                                <p class="small"><b>Crystal</b>： 感谢主页娘【哎是主页娘♀对吧】邮箱小编也非常nice</p>
                                <span class="small" style="color: #a0a0a0;">3分钟前</span>
                                <a href="#" class="small pull-right">回复</a>
                            </div>
                            <div class="panel-body panel-top-border">
                                <a href="#">
                                    <img src="img/avatar/28.jpeg" class="img-responsive img-circle" title="vboar"
                                         style="width: 40px; float: left; margin-right: 10px" />
                                </a>
                                <p class="small"><b>Crystal</b>： 感谢主页娘【哎是主页娘♀对吧】邮箱小编也非常nice</p>
                                <span class="small" style="color: #a0a0a0;">3分钟前</span>
                                <a href="#" class="small pull-right">回复</a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@stop
@section('css_js_extra_text')
    <style>
        .comment-click {
            cursor: pointer;
        }
        .img-border {
            border: solid 2px #1FA67A;
        }

        .img-margin-bottom {
            margin-bottom: 15px;
        }


    </style>

    <script>
        $(document).ready(function() {
            $('.comment-click').click(function () {
                $('.comment-panel').fadeToggle(200);
            })
//            alert("此页面未完成，仅仅是静态页面");
        });
    </script>
@stop