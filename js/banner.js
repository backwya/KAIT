$(function(){
	$('.banner_close').click(function(){
		$.cookie('banner', 'hidden', {expires : 1});
            $("#all_wrap").stop().animate({top:0});
        }); 
        if($.cookie('banner') == 'hidden'){
            $("#all_wrap").stop().animate({top:0});
            } else {
            $("#all_wrap").stop().animate({top:100},"slow");
        }
    
    // 모바일
if($(window).width() < 767){
    $('.banner_del').click(function(){
		$.cookie('banner', 'hidden', {expires : 1});
            $(".mobile_wrap").stop().css("top", "0");
        }); 
        if($.cookie('banner') == 'hidden'){
            $(".mobile_wrap").stop().css("top", "0");
            } else {
            $(".mobile_wrap").stop().css("top", "60");
        }
}
});