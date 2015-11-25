$(window).bind("load", function(){
    if(document.URL.match(/artists/)) {
        $('.m-navbar li:nth-child(2) a').addClass('u-border-link');
    } else if (document.URL.match(/events/)) {
        $('.m-navbar li:nth-child(3) a').addClass('u-border-link');
    } else if (document.URL.match(/music/)) {
        $('.m-navbar li:nth-child(4) a').addClass('u-border-link');
    } else if (document.URL.match(/blog/)) {
        $('.m-navbar li:nth-child(5) a').addClass('u-border-link');
    }
});