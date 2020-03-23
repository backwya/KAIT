$(function(){
	/* tab_license */
	$(".license_produce h4").click(function(){
		$(".tab_license").css('height', '900px');
	});
	$(".license_test h4").click(function(){
		$(".tab_license").css('height', '580px');
	});
	$(".license_area h4").click(function(){
		$(".tab_license").css('height', '380px');
	});
	$(".license_problem h4").click(function(){
		$(".tab_license").css('height', '50px');
	});
});