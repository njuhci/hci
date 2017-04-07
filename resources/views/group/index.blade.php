@extends('common.app')
@section('title')
    兴趣组 - 唤醒
@stop
@section('content')
    <div class="row">

        <div class="col-md-3 col-sm-5">

            <div class="panel my-group-panel">
                <div class="panel-heading panel-heading-up">
                    <h5 class="inline-title">我加入的兴趣组</h5>
                    <div class="pull-right">
                        <a href="#" class="small">更多</a>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-4">
                            <a href="#"><img src="img/avatar/1.png" class="img-responsive img-border img-margin-bottom" title="骑行小组"></a>
                        </div>
                        <div class="col-xs-4">
                            <a href="#"><img src="img/avatar/2.jpg" class="img-responsive img-border img-margin-bottom" title="骑行小组"></a>
                        </div>
                        <div class="col-xs-4">
                            <a href="#"><img src="img/avatar/3.jpg" class="img-responsive img-border img-margin-bottom" title="骑行小组"></a>
                        </div>
                        <div class="col-xs-4">
                            <a href="#"><img src="img/avatar/4.jpg" class="img-responsive img-border img-margin-bottom" title="骑行小组"></a>
                        </div>
                        <div class="col-xs-4">
                            <a href="#"><img src="img/avatar/5.jpg" class="img-responsive img-border img-margin-bottom" title="骑行小组"></a>
                        </div>
                        <div class="col-xs-4">
                            <a href="#"><img src="img/avatar/6.jpg" class="img-responsive img-border img-margin-bottom" title="骑行小组"></a>
                        </div>
                        <div class="col-xs-4">
                            <a href="#"><img src="img/avatar/7.png" class="img-responsive img-border img-margin-bottom" title="骑行小组"></a>
                        </div>
                        <div class="col-xs-4">
                            <a href="#"><img src="img/avatar/1.png" class="img-responsive img-border img-margin-bottom" title="骑行小组"></a>
                        </div>
                        <div class="col-xs-4">
                            <a href="#"><img src="img/avatar/2.jpg" class="img-responsive img-border img-margin-bottom" title="骑行小组"></a>
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary btn-block">创建兴趣组</a>
                </div>
            </div>

            <div class="panel more-group-panel">
                <div class="panel-heading panel-heading-up">
                    <h5 class="inline-title">热门兴趣组</h5>
                    <div class="pull-right">
                        <a href="#" class="small">发现更多兴趣组</a>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-4">
                            <a href="#"><img src="img/avatar/1.png" class="img-responsive img-border img-margin-bottom" title="骑行小组"></a>
                        </div>
                        <div class="col-xs-4">
                            <a href="#"><img src="img/avatar/2.jpg" class="img-responsive img-border img-margin-bottom" title="骑行小组"></a>
                        </div>
                        <div class="col-xs-4">
                            <a href="#"><img src="img/avatar/3.jpg" class="img-responsive img-border img-margin-bottom" title="骑行小组"></a>
                        </div>
                        <div class="col-xs-4">
                            <a href="#"><img src="img/avatar/4.jpg" class="img-responsive img-border img-margin-bottom" title="骑行小组"></a>
                        </div>
                        <div class="col-xs-4">
                            <a href="#"><img src="img/avatar/5.jpg" class="img-responsive img-border img-margin-bottom" title="骑行小组"></a>
                        </div>
                        <div class="col-xs-4">
                            <a href="#"><img src="img/avatar/6.jpg" class="img-responsive img-border img-margin-bottom" title="骑行小组"></a>
                        </div>
                        <div class="col-xs-4">
                            <a href="#"><img src="img/avatar/7.png" class="img-responsive img-border img-margin-bottom" title="骑行小组"></a>
                        </div>
                        <div class="col-xs-4">
                            <a href="#"><img src="img/avatar/1.png" class="img-responsive img-border img-margin-bottom" title="骑行小组"></a>
                        </div>
                        <div class="col-xs-4">
                            <a href="#"><img src="img/avatar/2.jpg" class="img-responsive img-border img-margin-bottom" title="骑行小组"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel search-panel">
                <div class="panel-heading panel-heading-up">
                    <h5>搜索</h5>
                </div>
                <div class="panel-body">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="搜索兴趣组/帖子...">
                        <span class="input-group-btn">
                            <a href="#" class="btn btn-primary"><i class="fa fa-search"></i></a>
                        </span>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-9 col-sm-7">

            <div class="panel content-panel">

                <div class="panel-heading">
                    <a href="#">我关注的</a>
                    <a href="#">我参与的</a>
                    <a href="#">全站热门</a>
                </div>

                <div class="panel-body panel-top-border group-post-brief">
                    <div class="row">
                        <div class="col-xs-9">
                            <a href="#" class="title"><p>欢迎你来到了游泳小组。</p></a>
                            <div class="footer">
                                <a href="#">游泳小组</a>&nbsp&nbsp&nbsp&nbsp
                                来自 • <a href="/user">啦啦啦</a>&nbsp&nbsp&nbsp&nbsp
                                最后回复来自 • <a href="/user">时遇倾城色</a>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="view pull-right">
                                1.5k<br/>浏览
                            </div>
                            <div class="reply pull-right">
                                129<br/>回复
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel-body panel-top-border group-post-brief">
                    <div class="row">
                        <div class="col-xs-9">
                            <a href="#" class="title"><p>欢迎你来到了游泳小组。</p></a>
                            <div class="footer">
                                <a href="#">游泳小组</a>&nbsp&nbsp&nbsp&nbsp
                                来自 • <a href="/user">啦啦啦</a>&nbsp&nbsp&nbsp&nbsp
                                最后回复来自 • <a href="/user">时遇倾城色</a>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="view pull-right">
                                1.5k<br/>浏览
                            </div>
                            <div class="reply pull-right">
                                129<br/>回复
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-body panel-top-border group-post-brief">
                    <div class="row">
                        <div class="col-xs-9">
                            <a href="#" class="title"><p>欢迎你来到了游泳小组。</p></a>
                            <div class="footer">
                                <a href="#">游泳小组</a>&nbsp&nbsp&nbsp&nbsp
                                来自 • <a href="/user">啦啦啦</a>&nbsp&nbsp&nbsp&nbsp
                                最后回复来自 • <a href="/user">时遇倾城色</a>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="view pull-right">
                                1.5k<br/>浏览
                            </div>
                            <div class="reply pull-right">
                                129<br/>回复
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-body panel-top-border group-post-brief">
                    <div class="row">
                        <div class="col-xs-9">
                            <a href="#" class="title"><p>欢迎你来到了游泳小组。</p></a>
                            <div class="footer">
                                <a href="#">游泳小组</a>&nbsp&nbsp&nbsp&nbsp
                                来自 • <a href="/user">啦啦啦</a>&nbsp&nbsp&nbsp&nbsp
                                最后回复来自 • <a href="/user">时遇倾城色</a>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="view pull-right">
                                1.5k<br/>浏览
                            </div>
                            <div class="reply pull-right">
                                129<br/>回复
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-body panel-top-border group-post-brief">
                    <div class="row">
                        <div class="col-xs-9">
                            <a href="#" class="title"><p>欢迎你来到了游泳小组。</p></a>
                            <div class="footer">
                                <a href="#">游泳小组</a>&nbsp&nbsp&nbsp&nbsp
                                来自 • <a href="/user">啦啦啦</a>&nbsp&nbsp&nbsp&nbsp
                                最后回复来自 • <a href="/user">时遇倾城色</a>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="view pull-right">
                                1.5k<br/>浏览
                            </div>
                            <div class="reply pull-right">
                                129<br/>回复
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-body panel-top-border group-post-brief">
                    <div class="row">
                        <div class="col-xs-9">
                            <a href="#" class="title"><p>欢迎你来到了游泳小组。</p></a>
                            <div class="footer">
                                <a href="#">游泳小组</a>&nbsp&nbsp&nbsp&nbsp
                                来自 • <a href="/user">啦啦啦</a>&nbsp&nbsp&nbsp&nbsp
                                最后回复来自 • <a href="/user">时遇倾城色</a>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="view pull-right">
                                1.5k<br/>浏览
                            </div>
                            <div class="reply pull-right">
                                129<br/>回复
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-body panel-top-border group-post-brief">
                    <div class="row">
                        <div class="col-xs-9">
                            <a href="#" class="title"><p>欢迎你来到了游泳小组。</p></a>
                            <div class="footer">
                                <a href="#">游泳小组</a>&nbsp&nbsp&nbsp&nbsp
                                来自 • <a href="/user">啦啦啦</a>&nbsp&nbsp&nbsp&nbsp
                                最后回复来自 • <a href="/user">时遇倾城色</a>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="view pull-right">
                                1.5k<br/>浏览
                            </div>
                            <div class="reply pull-right">
                                129<br/>回复
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel-body panel-top-border loading">
                    <i class="fa fa-2x fa-spinner fa-pulse"></i>
                </div>

            </div>

        </div>

    </div>
@stop
@section('css_js_extra_text')
    <style>
        .img-border {
            border: solid 2px #1FA67A;
        }

        .img-margin-bottom {
            margin-bottom: 15px;
        }

        .loading {
            text-align: center;
            color: #a0a0a0;
        }

        .content-panel .panel-heading a {
            margin-right: 20px;
        }

        .group-post-brief .title, .group-post-brief .title:visited {
            color: #6c6c6c;
            font-size: 16px;
        }

        .group-post-brief .title:hover, .group-post-brief .title:active {
            color: #3b3b3b;
        }

        .group-post-brief .footer {
            font-size: small;
            color: #a0a0a0;
        }

        .group-post-brief .view, .group-post-brief .reply {
            background-color: #1FA67A;
            color: #FFFFFF;
            padding: 8px 10px 8px 10px;
            text-align: center;
            font-size: small;
        }

        .group-post-brief .reply {
            margin-right: 10px;
        }
    </style>


    <script>
        $(document).ready(function() {
//            alert("此页面未完成，仅仅是静态页面");
        });
    </script>
@stop