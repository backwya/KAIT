$(function(){
    $(".textbook_img").mouseenter(function(){
        $(this).parent().prev().fadeIn();
    });
    $(".textbook_img").mouseleave(function(){
        $(this).parent().prev().fadeOut();
    });
});