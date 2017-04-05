$(function() {

    $( ".innersocial" ).hover(function() {
        var elem = $( this ).parent().find('.innersocialselect');
        elem.addClass('socialhover');
        elem.removeClass('innersocialbg');
    }, function() {
        var elem = $( this ).parent().find('.innersocialselect');
        elem.addClass('innersocialbg');
        elem.removeClass('socialhover');
    }
    );

  
   
});
