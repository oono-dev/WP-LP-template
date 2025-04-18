jQuery(function ($) {
    $('a[href^="#"]').click(function(){
        var adjust = 0;
        var speed = 400;
        var href= $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top + adjust;
        $('body,html').animate({scrollTop:position}, speed, 'swing');
        return false;
    });
    $('.hum').click(function () {
        $('.main_header').toggleClass('hum-open');
        $('.hum').toggleClass('active');
    });
    $(".header_nav_link").click(function () {
        $(".main_header").removeClass("hum-open");
        $(".hum").removeClass("active");
    });
});