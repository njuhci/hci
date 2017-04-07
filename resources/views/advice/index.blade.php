@extends('common/app')
@section('title')
    活动 - 唤醒
@stop
@section('content')
    <div class="row">
        <div class="col-lg-3">
            @if (Auth::user()->info->id == 2 || Auth::user()->info->id == 3)
            <div class="list-group" id="js-left">
                <a href="#" class="list-group-item active">所有提问</a>
                <a href="#" class="list-group-item">我回答的</a>
                <a href="#" class="list-group-item">我的提问</a>
            </div>
            <a href="/expert/import" class="btn btn-primary btn-block">批量导入建议</a>
            @endif
            <a href="/expert/addQuestion" class="btn btn-primary btn-block">创建新提问</a>
        </div>
        <div class="col-lg-9">
            <div class="panel">
                <div class="panel-heading">
                    <h5 class="inline-title">提问一览</h5>
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
                $t = $(this).index();
                if ($t == 0) {
                    getData(1, {{ $type }});
                } else if ($t == 1) {
                    getData(2, 0);
                } else {
                    getData(0, 0);
                }
            });
            @if ($para == 0)
            getData(0, 0);
            @else
            getData(1, {{ $type }});
            @endif
        });
        function getData(para, type) {
            $.ajax({
                url:"/expert/getQuestionData/" + para + "/" + type,
                type:"get",
                success:function(data){
                    $('#data-panel').empty();
                    var temp = '';
                    $.each(data, function(i, n) {
                        var s;
                        if (n['type'] == 1) s = '【健康】';
                        else s = '【运动】';
                        temp +='<div class="panel-body panel-top-border data-body"><span class="type">'+s+'</span><a href="/expert/detail/'
                            +n['id']+'" class="topic">'+n['topic']+'</a><div class="footer small" style="position: relative; top: 15px; left: 10px; color: #a0a0a0;">'
                            +n['content']+'</div></div>';
                    });
                    $('#data-panel').append(temp);
                }
            });
        }
    </script>
    <style>
        .data-body {
            margin-bottom: 13px;
        }
        .data-body .topic, .data-body .topic:visited {
            color: #6c6c6c;
            font-size: 16px;
        }

        .data-body-body .topic:hover, .data-body-body .topic:active {
            color: #3b3b3b;
        }
        .type {
            color: #1FA67A;
        }
    </style>
@stop