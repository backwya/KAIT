$(function(){
    /* tab_qna */
   $(".qna_support h4").click(function(){
		$(".tab_qna").css('height', '350px');
		$(".tab_qna h4").css('background', 'none');
		$(".qna_support h4").css('background', '#bce1ff');
		$(".qna_refund > div").hide();
		$(".qna_dissent > div").hide();
		$(".qna_change > div").hide();
		$(".qna_license > div").hide();
		$(".qna_etc > div").hide();
		$(".qna_support > div").show();
	});
    $(".qna_refund h4").click(function(){
		$(".tab_qna").css('height', '300px');
		$(".tab_qna h4").css('background', 'none');
		$(".qna_refund h4").css('background', '#bce1ff');
		$(".qna_support > div").hide();
		$(".qna_dissent > div").hide();
		$(".qna_change > div").hide();
		$(".qna_license > div").hide();
		$(".qna_etc > div").hide();
		$(".qna_refund > div").show();
	});
    $(".qna_refund_no1").click(function(){
        $(".tab_qna").css('height', '550px');
    });
    $(".qna_refund_no2").click(function(){
        $(".tab_qna").css('height', '700px');
    });
    $(".qna_dissent h4").click(function(){
		$(".tab_qna").css('height', '250px');
		$(".tab_qna h4").css('background', 'none');
		$(".qna_dissent h4").css('background', '#bce1ff');
		$(".qna_support > div").hide();
		$(".qna_refund > div").hide();
		$(".qna_change > div").hide();
		$(".qna_license > div").hide();
		$(".qna_etc > div").hide();
		$(".qna_dissent > div").show();
	});
    $(".qna_change_no1").click(function(){
        $(".tab_qna").css('height', '330px');
    });
    $(".qna_change_no2").click(function(){
        $(".tab_qna").css('height', '330px');
    });
    $(".qna_change_no3").click(function(){
        $(".tab_qna").css('height', '330px');
    });
    $(".qna_change h4").click(function(){
		$(".tab_qna").css('height', '300px');
		$(".tab_qna h4").css('background', 'none');
		$(".qna_change h4").css('background', '#bce1ff');
		$(".qna_support > div").hide();
		$(".qna_refund > div").hide();
		$(".qna_dissent > div").hide();
		$(".qna_license > div").hide();
		$(".qna_etc > div").hide();
		$(".qna_change > div").show();
	});
    $(".qna_license h4").click(function(){
		$(".tab_qna").css('height', '280px');
		$(".tab_qna h4").css('background', 'none');
		$(".qna_license h4").css('background', '#bce1ff');
		$(".qna_support > div").hide();
		$(".qna_refund > div").hide();
		$(".qna_dissent > div").hide();
		$(".qna_change > div").hide();
		$(".qna_etc > div").hide();
		$(".qna_license > div").show();
	});
    $(".qna_etc h4").click(function(){
		$(".tab_qna").css('height', '300px');
		$(".tab_qna h4").css('background', 'none');
		$(".qna_etc h4").css('background', '#bce1ff');
		$(".qna_support > div").hide();
		$(".qna_refund > div").hide();
		$(".qna_dissent > div").hide();
		$(".qna_change > div").hide();
		$(".qna_license > div").hide();
		$(".qna_etc > div").show();
	});
    $(".qna_etc_no1").click(function(){
        $(".tab_qna").css('height', '300px');
    });
    $(".etc_txt").click(function(){
        $(".tab_qna").css('height', '500px');
    });
    $(".qna_etc_no3").click(function(){
        $(".tab_qna").css('height', '300px');
    });
    /* qna_support */
    $(".tab_qna > div > div > h5").click(function(){
    $(".tab_qna > div > div > p").not($(this).next()).stop().slideUp();
    $(".tab_qna > div > div > div").not($(this).next()).stop().slideUp();
    $(this).next().stop().slideToggle();
    });
  /*  $(".etc_txt").click(function(){
       $(this).next().stop().slideToggle();
        $(".etc_content").show();
    });*/
});