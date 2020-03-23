// 우편번호찾기
function daum_zip_address(){
	new daum.Postcode({
				oncomplete:function(data){
				if(data.userSelectedType == "R"){
				$("#address").val(data.address);
				} else {
                    $("#address").val(data.jibunAddress);
				}
				$("#post").val(data.zonecode);
				$("#address_detail").focus();
				}
			}).open();
};
/* mypage_edit */
$(function(){
/* 회원가입 */
$("#btn_edit").click(function(){
var pwd = $("#pwd");
var pwd_txt = $("#pwd_txt");
var repwd = $("#repwd");
var repwd_txt = $("#repwd_txt");
var birth = $("#birth");
var birth_txt = $("#birth_txt");
var man = $("#m");
var woman = $("#w");
var gender_txt = $("#gender_txt");
var mobile = $("#mobile");
var mobile_txt = $("#mobile_txt");
var sms_y = $("#sms_y");
var sms_n = $("#sms_n");
var sms_check_txt = $("#sms_check_txt");
var email = $("#email");
var email_txt = $("#email_txt");
var email_y = $("#email_y");
var email_n = $("#email_n");
var email_check_txt = $("#email_check_txt");
var address = $("#address");
var post = $("#post");
var add_detail = $("#address_detail");
var address_txt = $("#address_txt");
var ind = $("#individual");
var group = $("#group");
var accept_txt = $("#accept_txt");

// 정규식 생성
var regex_pwd = RegExp(/^[A-Za-z0-9]{6,12}$/); // 숫자와 문자 포함 형태의 6~12자리 이내
var regex_nonumber = RegExp(/^[^0-9]*$/); //숫자X
var regex_birth = RegExp(/^(19|20)[0-9]{2}(0[1-9]|1[1-2])(0[1-9]|[1-2][0-9]|3[0-1])$/); //생년월일
var regex_mobile = RegExp(/^(01[016789]{1}|02|0[3-9]{1}[0-9]{1})([0-9]{3,4})([0-9]{4})$/); //핸드폰 번호
var regex_email = RegExp(/^[-A-Za-z0-9_]+[-A-Za-z0-9_.]*[@]{1}[-A-Za-z0-9_]+[-A-Za-z0-9_.]*[.]{1}[A-Za-z]{1,5}$/g); // 이메일
    
// 비밀번호 공백 유효성
if(!pwd.val()){
pwd_txt.text("비밀번호를 입력해주세요 :D");
pwd.focus();
return false;
} else if(!regex_pwd.test(pwd.val())){
// 비밀번호 정규식
pwd_txt.text("비밀번호는 숫자, 문자 포함 6~12 자리입니다 :D");
pwd.val('');
pwd.focus();
return false;    
} else {
pwd_txt.text("");  
}
// 비밀번호확인 공백 유효성
if(pwd.val() != repwd.val()){
repwd_txt.text("비밀번호를 확인해주세요 :D");
repwd.val('');
repwd.focus();
return false;
} else {
repwd_txt.text("");  
}
// 생년월일 공백 유효성
if(!birth.val()){
birth_txt.html("생년월일을 입력해주세요 :D<br>예) 20200209");
birth.focus();
return false;
} else if(!regex_birth.test(birth.val())){
birth_txt.html("생년월일을 입력해주세요 :D<br>예) 20200209");
birth.val('');
birth.focus();
return false;
} else {
birth_txt.text("");  
}
// 성별 체크 유효성
var man_check = $("#m").is(":checked");
var woman_check = $("#w").is(":checked");
if(!man_check && !woman_check){
gender_txt.text("성별을 체크해주세요 :D");
man.focus();
return false;
} else {
gender_txt.text("");
}
// 휴대폰번호 공백 유효성
if(!mobile.val()){
mobile_txt.html("휴대폰번호를 입력해주세요 :D<br>예) 01012345678");
mobile.focus();
return false;
} else if(!regex_mobile.test(mobile.val())){
mobile_txt.html("휴대폰번호를 입력해주세요 :D<br>예) 01012345678");
mobile.val('');
mobile.focus();
return false;
} else {
mobile_txt.text("");  
}
// SMS수신동의 체크 유효성
var sms_y_check = $("#sms_y").is(":checked");
var sms_n_check = $("#sms_n").is(":checked");
if(!sms_y_check && !sms_n_check){
sms_check_txt.text("SMS수신동의를 체크해주세요 :D");
sms_y.focus();
return false;
} else {
sms_check_txt.text("");
}
// 이메일 공백 유효성
if(!email.val()){
email_txt.html("이메일을 입력해주세요 :D<br>예) test@gmail.com");
email.focus();
return false;
} else if(!regex_email.test(email.val())){
email_txt.html("이메일을 입력해주세요 :D<br>예) test@gmail.com");
email.val('');
email.focus();
return false;
} else {
email_txt.text("");  
}
// 이메일수신동의 체크 유효성
var email_y_check = $("#email_y").is(":checked");
var email_n_check = $("#email_n").is(":checked");
if(!email_y_check && !email_n_check){
email_check_txt.text("이메일수신동의를 체크해주세요 :D");
email_y.focus();
return false;
} else {
email_check_txt.text("");  
}
// 주소 공백 유효성
if(!address.val()){
address_txt.text("주소를 입력해주세요 :D");
address.focus();
return false;
} else {
address_txt.text("");  
}
// 접수구분 체크 유효성
var ind_check = $("#individual").is(":checked");
var group_check = $("#group").is(":checked");
if(!ind_check && !group_check){
accept_txt.text("접수구분을 체크해주세요 :D");
ind.focus();
return false;
} else {
accept_txt.text("");  
}

// 회원정보수정 전송
$("#register_edit_form").submit();
});
});
// 회원탈퇴
function reg_del(){
    var del = confirm("정말 회원탈퇴 하시겠습니까? :<");
    if(del){
    location.href="php/register/mypage_delete.php";
    }
}