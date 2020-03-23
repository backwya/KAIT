$(function(){
	$(".main_menu h3").click(function(){
		$(".main_menu > ul").fadeToggle();
	});
	
	$(".user_mypage a").click(function(){
		$(".user_mypage_non_members").fadeToggle();
	});
});