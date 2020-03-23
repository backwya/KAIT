$(function(){
	$(".find_id h3").click(function(){
		$(".find_pwd h3").css('background', 'none');
		$(".find_id h3").css('background', '#bce1ff');
		$(".find_pwd div").hide();
		$(".find_id div").show();
	});
	$(".find_pwd h3").click(function(){
		$(".find_id h3").css('background', 'none');
		$(".find_pwd h3").css('background', '#bce1ff');
		$(".find_id div").hide();
		$(".find_pwd div").show();
	});
});