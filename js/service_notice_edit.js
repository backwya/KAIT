// 글 수정 취소 버튼
function edit_cancle(){
	var check = confirm("정말 글 수정을 취소하시겠습니까? : ]");
	if(check){
		history.back();
	}
}

// 글 수정 유효성
$(function(){
	$("#btn_edit").click(function(){
		var notice_name = $("#notice_name");
		var notice_content = $("#notice_content");
		
		if(!notice_name.val()){
			alert("제목을 입력해주세요 :D");
			notice_name.focus();
			return false;
		}
		if(!notice_content.val()){
			alert("내용을 입력해주세요! :D");
			notice_content.focus();
			return false;
		}
		
		$("#notice_edit_form").submit();
	});
});