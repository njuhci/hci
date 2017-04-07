@extends('common/app')
@section('title')
    活动 - 唤醒
@stop
@section('content')
    <div class="row">
        <div class="col-lg-3">
            <div class="list-group" id="js-left">
                <a href="#" class="list-group-item active">所有活动</a>
                <a href="#" class="list-group-item">我发起的</a>
                <a href="#" class="list-group-item">我参与的</a>
            </div>
            <a href="/activity/add" class="btn btn-primary btn-block">发起新活动</a>
        </div>
        <div class="col-lg-9">
            <div class="panel activities-panel">
                <div class="panel-heading">
                    <h5 class="inline-title">活动一览</h5>
                </div>

                <div id="data-panel">

                </div>

            </div>
        </div>
    </div>
@stop
@section('css_js_extra_text')
    <script>
        $(document).ready(function() {
            $('#js-left').children().click(function () {
                $(this).parent().children().removeClass('active');
                $(this).addClass('active');
                getData($(this).index());
            });
            getData(0);
        });
        function getData(para) {
            $.ajax({
                url:"/activity/getAllData/" + para,
                type:"get",
                success:function(data){
                    $('#data-panel').empty();
                    var temp = '';
                    $.each(data, function(i, n) {
                        temp +='<div class="panel-body panel-top-border activity-body"><div class="row">'
                            +'<div class="col-lg-2"><div class="number pull-left">'+n['count']+'<br/>报名人数'
                            +'</div></div><div class="col-lg-10"><a href="/activity/detail/'+n['id']+'" class="title">'
                            +n['topic']+'</a><span class="pull-right" style="color: #a0a0a0;">'+n['start_time']
                            +'</span><div class="footer small" style="position: relative; top: 15px; color: #a0a0a0;">'
                            +n['address']+'&nbsp&nbsp&nbsp&nbsp由 '+n['nickname']+' 发起</div></div></div></div>';
                    });
                    $('#data-panel').append(temp);
                }
            });
        }
    </script>
    <style>
        .activity-body .number {
            background-color: #1FA67A;
            color: #FFFFFF;
            padding: 8px 10px 8px 10px;
            text-align: center;
        }

        .activity-body .title, .activity-body .title:visited {
            color: #6c6c6c;
            font-size: 16px;
        }

        .activity-body .title:hover, .activity-body .title:active {
            color: #3b3b3b;
        }
    </style>
@stop