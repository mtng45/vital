//スクロール移動
$('.fn-scroll').bind('click', function(){
    var ancher = $(this).attr('href');
    $("html,body").stop().animate({
        scrollTop:$(ancher).offset().top - 80
    }, 1500, 'easeInOutExpo');
    event.preventDefault();
})
//BacktoTop表示
$( window ).scroll(function(){
    var nowHeight = $(window).scrollTop();
    console.log(nowHeight);
    if (nowHeight >= 620) {
        $('#fn-backtoTop').fadeIn();
        console.log('now');
    } else if (nowHeight < 620) {
        $('#fn-backtoTop').fadeOut();
    }
});
