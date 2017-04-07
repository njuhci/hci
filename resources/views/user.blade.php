@extends('common.app')
@section('title')
    个人主页 - 知康
@stop
@section('content')
    <div class="col-sm-3">
        <div class="panel user-panel">
            <div class="panel-body">
                <div class="col-xs-offset-1 col-xs-10">
                    <img src="img/avatar/28.jpeg" class="img-responsive img-rounded" >
                </div>
                <div class="name-info">
                    <b>Crystal</b>&nbsp
                    陶子涵&nbsp
                    <i class="fa fa-mars"></i>
                </div>
                <p class="col-xs-offset-1">
                    <i class="fa fa-fw fa-location-arrow"></i>&nbsp
                    <small>江苏省 南京市</small>
                </p>
                <p class="col-xs-offset-1">
                    <i class="fa fa-fw fa-birthday-cake"></i>&nbsp
                    <small>1995 年 11 月 22 日</small>
                </p>
                <p class="col-xs-offset-1">
                    <i class="fa fa-fw fa-file-o"></i>&nbsp
                    <small>我是Crystal，我热爱运动，也喜欢玩游戏，希望大家一起玩！</small>
                </p>
                <a href="/setting" class="pull-right small">个人设置</a>

            </div>
        </div>

        <div class="panel groups-panel">
            <div class="panel-heading panel-heading-up">
                <h5 class="inline-title">我的兴趣组</h5>
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
                <div class="pull-right">
                    <a href="#" class="small">显示更多</a>
                </div>
            </div>
        </div>

    </div>

    <div class="col-sm-9">

        <div class="panel health-panel">
            <div class="panel-heading panel-heading-up">
                <h5 class="inline-title">今日运动数据</h5>
                <div class="pull-right">
                    <a href="/health" class="small">更多数据</a>
                </div>
            </div>
            <div class="panel-body">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#sports" data-toggle="tab" aria-expanded="true">运动</a></li>
                    <li class=""><a href="#health" data-toggle="tab" aria-expanded="false">身体健康</a></li>
                    <li class=""><a href="#sleep" data-toggle="tab" aria-expanded="false">睡眠</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="sports">
                        <div class="sub-content">
                            <p>您今天一共运动 <i class="big-number">125</i> 分钟，燃烧热量 <i class="big-number">125</i> 大卡。继续努力哦~</p>
                            <li class="small">跑步：
                                运动时长 <i class="small-number">125</i> 分钟，
                                运动距离 <i class="small-number">10</i> 公里，
                                燃烧热量 <i class="small-number">125</i> 大卡
                            </li>
                            <li class="small">步行：
                                运动时长 <i class="small-number">0</i> 分钟，
                                运动距离 <i class="small-number">0</i> 公里，
                                燃烧热量 <i class="small-number">0</i> 大卡
                            </li>
                            <li class="small">健身：
                                运动时长 <i class="small-number">0</i> 分钟，
                                运动距离 <i class="small-number">0</i> 公里，
                                燃烧热量 <i class="small-number">0</i> 大卡
                            </li>
                            <li class="small">游泳：
                                运动时长 <i class="small-number">0</i> 分钟，
                                运动距离 <i class="small-number">0</i> 公里，
                                燃烧热量 <i class="small-number">0</i> 大卡
                            </li>
                            <li class="small">骑行：
                                运动时长 <i class="small-number">0</i> 分钟，
                                运动距离 <i class="small-number">0</i> 公里，
                                燃烧热量 <i class="small-number">0</i> 大卡
                            </li>
                            <div class="pull-right">
                                <a href="/health" class="btn btn-primary btn-sm btn-detail">查看详细数据</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="health">
                        <div class="sub-content">
                            <p>您最近的一次身体测量数据如下：</p>
                            <table class="table table-striped table-hover small">
                                <tbody>
                                <tr>
                                    <td>身高</td>
                                    <td>163 cm</td>
                                </tr>
                                <tr>
                                    <td>体重</td>
                                    <td>55 kg</td>
                                </tr>
                                <tr>
                                    <td>脂肪率</td>
                                    <td>18.5%</td>
                                </tr>
                                <tr>
                                    <td>脂肪率</td>
                                    <td>18.5%</td>
                                </tr>
                                <tr>
                                    <td>肌肉率</td>
                                    <td>30.8%</td>
                                </tr>
                                <tr>
                                    <td>内脏脂肪</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>基础代谢率</td>
                                    <td>66.7%</td>
                                </tr>
                                <tr>
                                    <td>水分率</td>
                                    <td>80.9%</td>
                                </tr>
                                <tr>
                                    <td>蛋白质</td>
                                    <td>26.7%</td>
                                </tr>
                                <tr>
                                    <td>骨量</td>
                                    <td>
                                        24 kg
                                        <div class="pull-right">
                                            <div class="label label-warning">
                                                注意
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>BMI</td>
                                    <td>
                                        20
                                        <div class="pull-right">
                                            <div class="label label-primary">
                                                优秀
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>心率</td>
                                    <td>72</td>
                                </tr>
                                <tr>
                                    <td>血压</td>
                                    <td>110/75</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="sleep">
                        <div class="sub-content">
                            <p style="display: inline">最近一次睡眠状况</p>
                            <div class="pull-right">
                                <small class="sleep_time">2016/10/29 晚</small>
                            </div>
                            <table class="table table-striped table-hover small" style="margin-top: 10px">
                                <tbody>
                                <tr>
                                    <td>睡眠开始</td>
                                    <td>23:59</td>
                                </tr>
                                <tr>
                                    <td>睡眠结束</td>
                                    <td>07:59</td>
                                </tr>
                                <tr>
                                    <td>睡眠时长</td>
                                    <td>8小时</td>
                                </tr>
                                <tr>
                                    <td>深度睡眠时长</td>
                                    <td>5小时50分</td>
                                </tr>
                                <tr>
                                    <td>唤醒次数</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>睡眠质量评分</td>
                                    <td>80</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel activities-panel">
            <div class="panel-heading">
                <h5 class="inline-title">我的活动</h5>
            </div>
            <div class="panel-body panel-top-border">
                <div class="heading inline-title">[ 游泳小组 ] <a href="#">仙林游泳馆室内接力赛</a></div>
                <div class="small pull-right time" >2016年10月30日上午9点</div>
            </div>
            <div class="panel-body panel-top-border">
                <div class="heading inline-title">[ 游泳小组 ] <a href="#">仙林游泳馆室内接力赛</a></div>
                <div class="small pull-right time" >2016年10月30日上午9点</div>
            </div>
            <div class="panel-body panel-top-border">
                <div class="heading inline-title">[ 游泳小组 ] <a href="#">仙林游泳馆室内接力赛</a></div>
                <div class="small pull-right time" >2016年10月30日上午9点</div>
            </div>
            <div class="panel-body panel-top-border">
                <div class="heading inline-title">[ 游泳小组 ] <a href="#">仙林游泳馆室内接力赛</a></div>
                <div class="small pull-right time" >2016年10月30日上午9点</div>
            </div>
            <div class="panel-body panel-top-border">
                <div class="heading inline-title">[ 游泳小组 ] <a href="#">仙林游泳馆室内接力赛</a></div>
                <div class="small pull-right time" >2016年10月30日上午9点</div>
            </div>
            <div class="panel-body panel-top-border">
                <div class="pull-right">
                    <a href="activity.html" class="small">更多活动</a>
                </div>
            </div>
        </div>

        <div class="panel posts-panel">
            <div class="panel-heading">
                <h5 class="inline-title">我的兴趣组帖子</h5>
            </div>
            <div class="panel-body panel-top-border group-post-brief">
                <div class="row">
                    <div class="col-xs-9">
                        <a href="#" class="title"><p>你好世界，欢迎你来到了骑行小组。</p></a>
                        <div class="footer">
                            <a href="#">骑行小组</a>&nbsp&nbsp&nbsp&nbsp
                            来自 • <a href="/user">终焉的终焉</a>&nbsp&nbsp&nbsp&nbsp
                            最后回复来自 • <a href="/user">其实我是那颗星</a>
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
                        <a href="#" class="title"><p>你好世界，欢迎你来到了骑行小组。</p></a>
                        <div class="footer">
                            <a href="#">骑行小组</a>&nbsp&nbsp&nbsp&nbsp
                            来自 • <a href="/user">终焉的终焉</a>&nbsp&nbsp&nbsp&nbsp
                            最后回复来自 • <a href="/user">其实我是那颗星</a>
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
                        <a href="#" class="title"><p>你好世界，欢迎你来到了骑行小组。</p></a>
                        <div class="footer">
                            <a href="#">骑行小组</a>&nbsp&nbsp&nbsp&nbsp
                            来自 • <a href="/user">终焉的终焉</a>&nbsp&nbsp&nbsp&nbsp
                            最后回复来自 • <a href="/user">其实我是那颗星</a>
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
                        <a href="#" class="title"><p>你好世界，欢迎你来到了骑行小组。</p></a>
                        <div class="footer">
                            <a href="#">骑行小组</a>&nbsp&nbsp&nbsp&nbsp
                            来自 • <a href="/user">终焉的终焉</a>&nbsp&nbsp&nbsp&nbsp
                            最后回复来自 • <a href="/user">其实我是那颗星</a>
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

            <div class="panel-body panel-top-border">
                <div class="pull-right">
                    <a href="#" class="small">更多</a>
                </div>
            </div>
        </div>

    </div>
@stop
@section('css_js_extra_text')
    <script>
        $(document).ready(function() {
//            alert("此页面未完成，仅仅是静态页面");
        });
    </script>
<style>

    .user-panel img {
        border-radius: 6px;
        margin-bottom: 10px;
    }

    .user-panel .name-info {
        text-align: center;
        margin-bottom: 10px;
    }

    .user-panel .fa-mars {
        color: #5f9fd7;
    }

    .health-panel .sub-content {
        padding: 10px 0px 0px 10px;
    }

    .health-panel .sub-content .big-number {
        font-size: 25px;
        color: #ff6a46;
        font-weight: bold;
    }

    .health-panel .sub-content .small-number {
        font-size: 18px;
        color: #ff6a46;
    }

    .activities-panel .time, .posts-panel .footer {
        color: #a0a0a0;
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

    .img-border {
        border: solid 2px #1FA67A;
    }

    .img-margin-bottom {
        margin-bottom: 15px;
    }

    .panel-top-border {
        border-top: solid 1px #e0e0e0;
    }

    .inline-title {
        display: inline;
    }

    .panel-heading-up {
        margin-bottom: -12px;
    }

</style>
@stop