@extends('common/app')
@section('title')
    后台管理 - 唤醒
@stop
@section('content')
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                <a href="#" class="list-group-item active">所有用户</a>
                <a href="#" class="list-group-item">个人用户</a>
                <a href="#" class="list-group-item">医生</a>
                <a href="#" class="list-group-item">教练</a>
            </div>
        </div>
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="pull-right" style="margin-bottom: 10px">
                        <a href="/admin/add" class="btn btn-primary btn-sm">添加新用户</a>
                    </div>

                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>用户名</th>
                            <th>邮箱</th>
                            <th>昵称</th>
                            <th>真实姓名</th>
                            <th>角色</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
@section('css_js_extra_text')
    <script>
        $(document).ready(function(){
            $.ajax({
                url: "/admin/all",
                type: "get",
                dataType: "json",
                success: function (data) {
                    var temp = '';
                    $.each(data, function(i, n) {
                        temp += "<tr><td>" + n["id"] + "</td><td>" + n["username"] + "</td><td>" +
                                n["email"] + "</td><td>" + n["nickname"] + "</td><td>" +
                                n["real_name"] + "</td><td>" + n["role"] +
                                "</td><td><a href='/admin/edit/" + n["id"] + "' class='btn btn-primary" +
                                " btn-xs js-btn-edit'>改变角色</a>" + "\n<button class='btn btn-danger" +
                                " btn-xs js-btn-delete'>删除</button></td></tr>";
                    });
                    $('tbody').append(temp);
                    $('.js-btn-delete').bind('click', function () {
                        $.ajax({
                            url: "/admin/delete/" + $(this).parent().parent().children().eq(0).text(),
                            type: "get",
                            success: function () {
                                alert("删除成功!");
                            }
                        });
                        $(this).parent().parent().remove();
                    });
                }
            });
            $('.list-group-item').click(function () {
                $(this).parent().children().removeClass('active');
                $(this).addClass('active');
                $('tbody').empty();
                $.ajax({
                    url: "/admin/all/" + $(this).index(),
                    type: "get",
                    dataType: "json",
                    success: function (data) {
                        var temp = '';
                        $.each(data, function(i, n) {
                            temp += "<tr><td>" + n["id"] + "</td><td>" + n["username"] + "</td><td>" +
                                    n["email"] + "</td><td>" + n["nickname"] + "</td><td>" +
                                    n["real_name"] + "</td><td>" + n["role"] +
                                    "</td><td><a href='/admin/edit/" + n["id"] + "' class='btn btn-primary" +
                                    " btn-xs'>改变角色</a>" + "\n<button class='btn btn-danger" +
                                    " btn-xs js-btn-delete'>删除</button></td></tr>";
                        });
                        $('tbody').append(temp);
                        $('.js-btn-delete').bind('click', function () {
                            $(this).parent().parent().remove();
                            $.ajax({
                                url: "/admin/delete/" + $(this).parent().parent().children().eq(0).text(),
                                type: "get",
                                success: function () {
                                    alert("删除成功!");
                                }
                            });
                        });
                        $(this).parent().parent().remove();
                    }
                });
            });
        });
    </script>
@stop