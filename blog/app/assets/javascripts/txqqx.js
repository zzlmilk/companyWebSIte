/* 代码整理：懒人之家 www.lanrenzhijia.com */
var isChrome = navigator.userAgent.toLowerCase().match(/chrome/) != null; 

$(function() {
    bindGroupBtn('.service_menu li dl dt'); //光标经过显示分组
    $('.service_menu li.hover dl dd').show();
    scrollAd('#online_service_bar1');
    scrollAd('#online_service_bar');
    //当页面大小改变时
    $(window).scroll(function() {
        scrollAd('#online_service_bar1');
        scrollAd('#online_service_bar');
    });
});


//光标经过显示分组
function bindGroupBtn(obj) {
    $(obj).hover(function() {
        var pobj = $(this).parent().parent();
        $(pobj).stop();
        $(pobj).siblings(".hover").removeClass('hover');
        showServiceMenu(pobj);
    }, function() {
        $(this).parent().parent().stop();
    });
}

//显示当前菜单
function showServiceMenu(obj, speed) {
    speed = speed || 500;
    $(obj).addClass('hover').children('dl').children('dd').slideDown(speed);
    $(obj).siblings().children('dl').children('dd').slideUp(speed);
}

//定义一个名字为scrollAD的函数
function scrollAd(obj) {
    //定义位移为floatdiv的高度加上滚动条的顶部距离
    var offset = $(obj).height() + $(document).scrollTop() - 30;
    //为floatdiv添加动画为TOP位移offset的高度，持续0.8秒。
    $(obj).stop().animate({ top: offset }, 1000);
}
