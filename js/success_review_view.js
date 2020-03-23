function board_del(){
		var del = confirm("작성글을 삭제하시겠습니까?");
		if(del){
location.href="php/review_board/success_review_delete.php?reivew_no=<?php echo $array['review_no'] ?>";
		};
	};

function comment_submit(){
	var comment = document.getElementById("comment");
	if(!comment.value){
		alert("댓글을 입력해주세요 :)");
		comment.focus();
		return false;
	}
	document.review_comment_form.submit();
}