function board_del(){
		var del = confirm("작성글을 삭제하시겠습니까?");
		if(del){
location.href="php/notice_board/service_notice_delete.php?notice_no=<?php echo $array['notice_no'] ?>";
		};
	};