@extends('health/common')
@section('title')
    运动数据 - 唤醒
@stop
@section('css_js_extra_file')
    <script src="{{ URL::asset('/assets/js/moment-with-locales.js') }}"></script>
    <link rel="stylesheet" href="{{ URL::asset('/assets/plugins/DateTimePicker/css/bootstrap-datetimepicker.min.css') }}">
    <script src="{{ URL::asset('/assets/plugins/DateTimePicker/js/bootstrap-datetimepicker.min.js') }}"></script>
@stop
@section('main-content')
    <div class="panel">
        <div class="panel-body">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#brief" data-toggle="tab" aria-expanded="true">简要</a></li>
                <li class=""><a href="#detail" data-toggle="tab" aria-expanded="false">详细</a></li>
                <li class=""><a href="#data" data-toggle="tab" aria-expanded="false">统计</a></li>
                <div class="pull-right set-goal">
                    <a href="/health/goal" class="small">设置目标</a>
                </div>
            </ul>
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade active in" id="brief">
                    <div class="sub-content">
                        <h4 style="margin-bottom: 20px">本周目标</h4>
                        <div>
                            燃烧热量
                            <small  class="pull-right">
                                目标：{{ $goal->heat }}大卡&nbsp&nbsp&nbsp
                                已完成：{{ $result->heat }}大卡&nbsp&nbsp&nbsp
                                完成度：{{ $per['heat'] }}%&nbsp&nbsp&nbsp
                            </small>
                            <div class="progress progress-striped active">
                                <div class="progress-bar progress-bar-warning" style="width: {{ $per['heat'] }}%"></div>
                            </div>
                        </div>
                        <div>
                            运动距离
                            <small class="pull-right">
                                目标：{{ $goal->distance }}公里&nbsp&nbsp&nbsp
                                已完成：{{ $result->distance }}公里&nbsp&nbsp&nbsp
                                完成度：{{ $per['distance'] }}%&nbsp&nbsp&nbsp
                            </small>
                            <div class="progress progress-striped active">
                                <div class="progress-bar progress-bar-success" style="width: {{ $per['distance'] }}%"></div>
                            </div>
                        </div>
                        <div>
                            运动步数
                            <small  class="pull-right">
                                目标：{{ $goal->step }}步&nbsp&nbsp&nbsp
                                已完成：{{ $result->step }}步&nbsp&nbsp&nbsp
                                完成度：{{ $per['step'] }}%&nbsp&nbsp&nbsp
                            </small>
                            <div class="progress progress-striped active">
                                <div class="progress-bar progress-bar-info" style="width: {{ $per['step'] }}%"></div>
                            </div>
                        </div>
                        <hr />
                        <h4 style="margin-top: 25px">本周运动情况</h4>
                        <div class="row">
                            <div class="col-lg-4">
                                <h5>跑步</h5>
                                <div class="small">
                                    <p>运动时长：{{ $a1->time }}分钟</p>
                                    <p>运动距离：{{ $a1->distance }}公里</p>
                                    <p>燃烧热量：{{ $a1->heat }}大卡</p>
                                    <p>运动步数：{{ $a1->step }}步</p>

                                </div>
                            </div>
                            <div class="col-lg-4">
                                <h5>步行</h5>
                                <div class="small">
                                    <p>运动时长：{{ $a2->time }}分钟</p>
                                    <p>运动距离：{{ $a2->distance }}公里</p>
                                    <p>燃烧热量：{{ $a2->heat }}大卡</p>
                                    <p>运动步数：{{ $a2->step }}步</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <h5>健身</h5>
                                <div class="small">
                                    <p>运动时长：{{ $a3->time }}分钟</p>
                                    <p>燃烧热量：{{ $a3->heat }}大卡</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <h5>游泳</h5>
                                <div class="small">
                                    <p>运动时长：{{ $a4->time }}分钟</p>
                                    <p>运动距离：{{ $a4->distance }}公里</p>
                                    <p>燃烧热量：{{ $a4->heat }}大卡</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <h5>骑行</h5>
                                <div class="small">
                                    <p>运动时长：{{ $a5->time }}分钟</p>
                                    <p>运动距离：{{ $a5->distance }}公里</p>
                                    <p>燃烧热量：{{ $a5->heat }}大卡</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="detail">
                    <div class="sub-content">
                        <div class="selector row">
                            <div class="col-xs-6" style="position: relative; top: 20px" id="js-selector">
                                <a class="a-active">今日</a>
                                <a>本周</a>
                                <a>本月</a>
                                <a>有史以来</a>
                            </div>
                            <div class="col-lg-5">
                                <div class='input-group date' id='date_picker'>
                                    <input type='text' class="form-control" id="js-input"/>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-1">
                                <button class="btn btn-primary" id="js-go" style="position: relative; right: 20px">GO</button>
                            </div>
                        </div>
                        <table class="table table-striped table-hover small">
                            <thead>
                            <tr>
                                <th>运动类型</th>
                                <th>开始时间</th>
                                <th>结束时间</th>
                                <th>运动时长（分钟）</th>
                                <th>燃烧热量（大卡）</th>
                                <th>运动距离（公里）</th>
                                <th>运动步数</th>
                            </tr>
                            </thead>
                            <tbody style="text-align: center" id="js-tbody">

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="data">
                    <div class="sub-content">
                        <p style="margin-top: 10px">自加入知康以来，您：</p>
                        <ul class="data-ul">
                            <li>一共燃烧了 <span>{{ $all->heat }}</span> 大卡的热量</li>
                            <li>一共运动了 <span>{{ $all->time }}</span> 分钟</li>
                            <li>一共踏过了 <span>{{ $all->distance }}</span> 公里的马路</li>
                            <li>一共飞踏了 <span>{{ $all->step }}</span> 的步伐</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('css_js_extra_text')
    <style>
        .set-goal {
            position: relative;
            top: 10px;
        }
        .sub-content {
            padding: 10px 0px 0px 10px;
        }
        .selector a {
            margin-right: 15px;
            cursor: pointer;
        }
        .selector {
            margin-bottom: 15px;
        }
        .a-active {
            text-decoration: underline;
            color: #136c4f;
            font-weight: bold;
        }
        .more-data {
            cursor: pointer;
        }
        .data-ul li {
            margin-bottom: 10px;
        }
        .data-ul li span {
            font-size: large;
            font-weight: bold;
        }
    </style>
    <script>
        $(document).ready(function () {
            $('#date_picker').datetimepicker({
                locale: 'zh-CN',
                format: 'YYYY-MM-DD'
            });

            $('#js-go').click(function () {
                $date = $('#js-input').val();
                if ($date == '') return;
                $('#js-selector').children().removeClass('a-active');
                loadData($date);
            });

            $('#js-selector').children().click(function() {
                $(this).parent().children().removeClass('a-active');
                $(this).addClass('a-active');
                var index = $(this).index();
                loadData(index);
            });
            loadData(0);
        });
        function loadData(para) {
            $.ajax({
                url:"/health/getSportsData/" + para,
                type:"get",
                success:function(data){
                    $('#js-tbody').empty();
                    var temp = '';
                    $.each(data, function(i, n) {
                        temp += "<tr><td>" + n['type'] + "</td><td>" + n['start_time'] + "</td><td>" +
                                n['end_time'] + "</td><td>" + n['sports_time'] + "</td><td>" + n['heat']
                                + "</td><td>" + n['distance'] + "</td><td>" + n['step'] + "</td></tr>";
                    });
                    $('#js-tbody').append(temp);
                }
            });
        };

    </script>
@stop