$(document).ready(function(){
    $('.btn-scroll').click(function(){
        var u = $(this).attr('scrollUntil');
        $('html, body').animate({ scrollTop: ($(u).offset().top) },1500);
    });
});