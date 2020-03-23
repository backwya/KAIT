$(function(){
	/* tab_refund */
	$(".refund_way h4").click(function(){
		$(".tab_refund").css('height', '730px');
		$(".tab_refund h4").css('background', 'none');
		$(".refund_way h4").css('background', '#bce1ff');
		$(".refund_papers > div").hide();
		$(".refund_way > div").show();
	});
	$(".refund_papers h4").click(function(){
		$(".tab_refund").css('height', '400px');
		$(".tab_refund h4").css('background', 'none');
		$(".refund_papers h4").css('background', '#bce1ff');
		$(".refund_way > div").hide();
		$(".refund_papers > div").show();
	});
})