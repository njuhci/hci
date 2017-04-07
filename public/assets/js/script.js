/**
 * Created by Vboar on 2015/11/29.
 */

$(document).ready(function() {
    // 当前导航菜单高亮
    var current = window.location.pathname;
    var menus = $('.navbar-nav').children();
    menus.each(function() {
        var temp = $(this).find('a').attr("href");
        var result = current.indexOf(temp);
        if (result == 0) {
            $(this).addClass('active');
        }
    });

    var current = window.location.pathname;
    var menus = $('.list-group').children();
    menus.each(function() {
        var temp = $(this).attr("href");
        var result = current.indexOf(temp);
        if (result == 0) {
            $(this).addClass('active');
        }
    });

    // 下拉菜单自动展开收回
    $("li.dropdown").mouseover(function() {
        $(this).addClass('open');
    }).mouseout(function() {
        $(this).removeClass('open');
    });

});

// 回到顶部
$(function () {
    $.scrollUp({
        scrollTitle: false,
        scrollImg: true
    });
});