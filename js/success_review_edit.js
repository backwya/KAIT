// 글 수정 취소 버튼
function edit_cancle(){
	var check = confirm("정말 글 수정을 취소하시겠습니까? : ]");
	if(check){
		history.back();
	}
}

// 페이지 벗어나면 경고
function list_out(){
	var check = confirm("정말 글 수정을 취소하시겠습니까? 페이지를 벗어나면 작성하신 내용은 저장되지 않습니다 :D");
	if(check){
		location.href='success_review.php';
	}
}

// 글 수정 유효성
$(function(){
	$("#btn_edit").click(function(){
		var review_name = $("#review_name");
		var review_content = $("#review_content");
		
		if(!review_name.val()){
			alert("제목을 입력해주세요 :D");
			review_name.focus();
			return false;
		}
		if(!review_content.val()){
			alert("내용을 입력해주세요! :D");
			review_content.focus();
			return false;
		}
		
		$("#review_edit_form").submit();
	});
});