$(function() {

    $("li.dropdown").hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn();
    },function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut();
    });

   
});
