/* 로그인 유효성 검사 */
function form_check(){
var uid = document.getElementById("uid");
var uid_txt = document.getElementById("uid_txt");
var pwd = document.getElementById("pwd");
var pwd_txt = document.getElementById("pwd_txt");

if(!uid.value){
uid_txt.textContent="아이디를 입력하세요:D";
uid.focus();
return false;
} else {
uid_txt.textContent="";
}

if(!pwd.value){
pwd_txt.textContent="비밀번호를 입력하세요 :D";
pwd.focus();
return false;
} else {
pwd_txt.textContent="";
}

document.login_form.submit();
};

/* 아이디 저장 */
$(function(){
//최초 쿠키에 login_id라는 쿠키값이 존재하면
var login_id = $.cookie('login_id');
if(login_id != undefined) {
//아이디에 쿠키값을 담는다
$("#uid").val(login_id);
//아이디저장 체크박스 체크를 해놓는다
$("#uid_save").prop("checked",true);
}

//로그인 버튼 클릭시
$("#btn_log").click(function(){
var uid = $("uid");
//아이디 입력시
if(uid){
//아이디저장 체크되어있으면 쿠키저장
if($("#uid_save").prop("checked")) {
$.cookie('login_id', $("#uid").val());
//아이디저장 미체크면 쿠키에 정보가 있던간에 삭제
} else {
$.removeCookie("login_id");
}
}
});
	
// 로그인 ENTER
$("#uid, #pwd").keyup(function(e){if(e.keyCode == 13) btn_log.click(); });
});

/* 구글 로그인 */
function onSignIn(googleUser) {
var profile = googleUser.getBasicProfile();
console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
console.log('Name: ' + profile.getName());
console.log('Image URL: ' + profile.getImageUrl());
console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
}