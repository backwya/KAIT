$(function(){
	/* tab_license */
	$(".license_produce h4").click(function(){
		$(".tab_license").css('height', '620px');
	});
	$(".license_test h4").click(function(){
		$(".tab_license").css('height', '420px');
	});
	$(".license_area h4").click(function(){
		$(".tab_license").css('height', '380px');
	});
	$(".license_problem h4").click(function(){
		$(".tab_license").css('height', '50px');
	});
});