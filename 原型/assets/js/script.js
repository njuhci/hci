/**
 * Created by Vboar on 2015/10/22.
 */
$(document).ready(function () {

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