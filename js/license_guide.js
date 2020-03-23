$(function(){
	/* sub */
	$(".sub_type").mouseenter(function(){
		$(".sub_type ul").stop().fadeIn();
	});
	$(".sub_type").mouseleave(function(){
		$(".sub_type ul").stop().fadeOut();
	});
	
	var produce_name = $(".license_produce h4");
	var produce = $(".license_produce > div");
	var test_name = $(".license_test h4");
	var test = $(".license_test > div");
	var area_name = $(".license_area h4");
	var area = $(".license_area > div");
	var problem_name = $(".license_problem h4");
	var problem = $(".license_problem > div");
	/* tab_license */
	produce_name.click(function(){
		$(".tab_license h4").css('background', 'none');
		produce_name.css('background', '#bce1ff');
		test.hide();
		area.hide();
		problem.hide();
		produce.show();
	});
	test_name.click(function(){
		$(".tab_license h4").css('background', 'none');
		test_name.css('background', '#bce1ff');
		produce.hide();
		area.hide();
		$(".license_problem > div").hide();
		test.show();
	});
	area_name.click(function(){
		$(".tab_license h4").css('background', 'none');
		area_name.css('background', '#bce1ff');
		produce.hide();
		test.hide();
		area.hide();
		$(".license_area > div").show();
	});
	problem_name.click(function(){
		$(".tab_license h4").css('background', 'none');
		problem_name.css('background', '#bce1ff');
		produce.hide();
		test.hide();
		area.hide();
		problem.show();
	});
});