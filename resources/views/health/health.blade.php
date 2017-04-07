@extends('health/common')
@section('title')
    身体健康数据 - 唤醒
@stop
@section('css_js_extra_file')
    <script src="{{ URL::asset('/assets/plugins/chartjs/Chart.min.js') }}"></script>
@stop
@section('main-content')
    <div class="panel">
        <div class="panel-body">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#data" data-toggle="tab" aria-expanded="true"  id="js-data">数据</a></li>
                <li class=""><a href="#chart" data-toggle="tab" aria-expanded="false" id="js-chart">图表</a></li>
                <div class="pull-right set-goal">
                    <a href="/health/goal" class="small">设置目标</a>
                </div>
            </ul>
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade active in" id="data">
                    <div class="sub-content">
                        <h4 style="margin-bottom: 20px">您的目标</h4>
                        <p>您期待的体重为： <span class="goal-weight">{{ $goal_weight }}</span> 公斤</p>
                        <p>然而，您最近的体重为： <span class="real-weight">{{ $real_weight }}</span> 公斤</p>
                        <hr />
                        <h4 style="margin-bottom: 20px">您的测量数据</h4>
                        <p style="display: inline;">测量时间：<span class="t-time"></span></p>
                        <div class="pull-right" style="margin-bottom: 10px">
                            <button class="btn btn-primary btn-xs pre">上一次</button>
                            <button class="btn btn-primary btn-xs next">下一次</button>
                        </div>
                        <table class="table table-striped table-hover small">
                            <tbody>
                            <tr>
                                <td>身高</td>
                                <td><span class="t-height"></span> cm</td>
                            </tr>
                            <tr>
                                <td>体重</td>
                                <td><span class="t-weight"></span> kg</td>
                            </tr>
                            <tr>
                                <td>脂肪率</td>
                                <td><span class="t-fat"></span>%</td>
                            </tr>
                            <tr>
                                <td>肌肉率</td>
                                <td><span class="t-muscle"></span>%</td>
                            </tr>
                            <tr>
                                <td>内脏脂肪</td>
                                <td><span class="t-vis"></span></td>
                            </tr>
                            <tr>
                                <td>基础代谢率</td>
                                <td><span class="t-met"></span>%</td>
                            </tr>
                            <tr>
                                <td>水分率</td>
                                <td><span class="t-moi"></span>%</td>
                            </tr>
                            <tr>
                                <td>蛋白质</td>
                                <td><span class="t-protein"></span>%</td>
                            </tr>
                            <tr>
                                <td>骨量</td>
                                <td><span class="t-bone"></span> kg</td>
                            </tr>
                            <tr>
                                <td>BMI</td>
                                <td><span class="t-bmi"></span></td>
                            </tr>
                            <tr>
                                <td>心率</td>
                                <td><span class="t-rate"></span></td>
                            </tr>
                            <tr>
                                <td>血压</td>
                                <td><span class="t-perssure"></span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade active in" id="chart">
                    <div class="sub-content">
                        <h4 style="margin-bottom: 20px;">最近几次<span id="js-type"> 身高</span></h4>
                        <div id="js-selector" style="margin-bottom: 15px">
                            <button class="btn btn-primary btn-xs">身高</button>
                            <button class="btn btn-primary btn-xs">体重</button>
                            <button class="btn btn-primary btn-xs">BMI</button>
                        </div>
                        <canvas id="lineChart" width="800" height="400"></canvas>
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
        .goal-weight {
            font-size: large;
            font-weight: bold;
        }
        .real-weight {
            font-size: large;
            font-weight: bold;
        }
        
    </style>
    <script>
        var count = 1;

        $(document).ready(function() {
            loadData(1);
            loadChart(0);
            $('#chart').hide();
            $('.pre').click(function () {
                count++;
                loadData(count);
            });
            $('.next').click(function () {
                count--;
                loadData(count);
            });
            $('#js-chart').click(function() {
                $('#chart').show();
            });
            $('#js-data').click(function() {
                $('#chart').hide();
            });
            $('#js-selector').children().click(function () {
                loadChart($(this).index());
                $('#js-type').text(" " + $(this).text());
            })
        });

        function loadChart(para) {
            var canvas = $("#lineChart").get(0).getContext("2d");
            var lineChart = new Chart(canvas);
            var temp1 = new Array();
            var temp2 = new Array();
            $.ajax({
                url:"/health/getHealthChartData/",
                type:"get",
                success:function(data){
                    $.each(data, function(i, n) {
                        var t = data.length-i-1;
                        temp1[t] = n['time'];
                        if (para == 0) temp2[t] = n['height'];
                        else if (para == 1) temp2[t] = n['weight'];
                        else if (para == 2) temp2[t] = n['bmi'];
                    });
                    var data = {
                        labels: temp1,
                        datasets: [
                            {
                                label: "dataset",
                                fillColor: "rgba(151,187,205,0.2)",
                                strokeColor: "rgba(151,187,205,1)",
                                pointColor: "rgba(151,187,205,1)",
                                pointStrokeColor: "#fff",
                                pointHighlightFill: "#fff",
                                pointHighlightStroke: "rgba(151,187,205,1)",
                                data: temp2
                            }
                        ]
                    };
                    lineChart.Line(data);
                }
            });
        }

        function loadData(n) {
            if (n == 0) {
                count = 1;
                return;
            }
            $.ajax({
                url:"/health/getHealthData/" + n,
                type:"get",
                success:function(data){
                    if (data[0] == null) {
                        count = n-1;
                        return;
                    }
                    $('.t-time').text(data[0]['time']);
                    $('.t-height').text(data[0]['height']);
                    $('.t-weight').text(data[0]['weight']);
                    $('.t-fat').text(data[0]['fat_percentage']);
                    $('.t-muscle').text(data[0]['muscle_percentage']);
                    $('.t-moi').text(data[0]['moisture_percentage']);
                    $('.t-vis').text(data[0]['visceral_fat']);
                    $('.t-met').text(data[0]['metabolic_rate']);
                    $('.t-protein').text(data[0]['protein']);
                    $('.t-bone').text(data[0]['bone_mass']);
                    $('.t-bmi').text(data[0]['bmi']);
                    $('.t-rate').text(data[0]['heart_rate']);
                    $('.t-perssure').text(data[0]['blood_pressure']);
                }
            });
        };
    </script>

@stop