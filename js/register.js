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
}
/* register */
$(function(){
/* 아이디 중복검사 */
$("#uid_check").click(function(e){
e.preventDefault();
var uid = $("#uid");
var uid_txt = $("#uid_txt");
var uid_check_hidden = $("#uid_check_hidden");
var regex_uid = RegExp(/^[A-Za-z0-9_\-]{5,20}$/);
$.ajax({
type: "POST",
dataType : "json",
url: "php/register/id_check.php",
data: {uid: uid.val()},
cache: false,
success: function(json){
if(json.res == 'good'){
if(!uid.val()){
uid_txt.text("아이디를 입력해주세요 :D");
uid.focus();
return false;
} else if(!regex_uid.test(uid.val())){
uid_txt.text("아이디는 영문 대/소문자, 숫자, _만 가능합니다! ( 5~20자리 이내 ) :D");
uid.val('');
uid.focus();
return false;
} else {
uid_txt.text("사용 가능한 아이디입니다 :>");
uid_check_hidden.val('true');
}
} else {
uid_txt.text("사용 불가능한 아이디입니다 :<");
uid.val('');
uid.focus();
uid_check_hidden.val('false');
}
}, error: function(){
alert("오류가 발생했습니다. :<");
}
})
});

/* 아이디 재 중복검사 */
var uid = $("#uid");
var uid_check_hidden = $("#uid_check_hidden");
$(uid).click(function(){
uid.val('');
uid_check_hidden.val('false');
});

/* 회원가입 */
$("#btn_reg").click(function(){
var uid = $("#uid");
var uid_txt = $("#uid_txt");
var uid_check_hidden = $("#uid_check_hidden").val();
var pwd = $("#pwd");
var pwd_txt = $("#pwd_txt");
var repwd = $("#repwd");
var repwd_txt = $("#repwd_txt");
var uname = $("#uname");
var uname_txt = $("#uname_txt");
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
var regex_uid = RegExp(/^[A-Za-z0-9_\-]{5,20}$/); // 영문 대/소문자, 숫자, _만 가능하고 5~20자리 이내
var regex_pwd = RegExp(/^[A-Za-z0-9]{6,12}$/); // 숫자와 문자 포함 형태의 6~12자리 이내
/*var regex_korean = RegExp(/^[가-힣]+$/); //한글만
var regex_number = RegExp(/^[0-9]*$/); //숫자만*/
var regex_nonumber = RegExp(/^[^0-9]*$/); //숫자X
var regex_birth = RegExp(/^(19|20)[0-9]{2}(0[1-9]|1[1-2])(0[1-9]|[1-2][0-9]|3[0-1])$/); //생년월일
var regex_mobile = RegExp(/^(01[016789]{1}|02|0[3-9]{1}[0-9]{1})([0-9]{3,4})([0-9]{4})$/); //핸드폰 번호
var regex_email = RegExp(/^[-A-Za-z0-9_]+[-A-Za-z0-9_.]*[@]{1}[-A-Za-z0-9_]+[-A-Za-z0-9_.]*[.]{1}[A-Za-z]{1,5}$/g); // 이메일

// 아이디 공백 유효성
if(!uid.val()){
uid_txt.text("아이디를 입력해주세요 :D");
uid.focus();
return false;
} else if(!regex_uid.test(uid.val())){
// 아이디 정규식
uid_txt.text("아이디는 영문 대/소문자, 숫자, _만 가능합니다! ( 5~20자리 이내 ) :D");
uid.val('');
uid.focus();
return false;
} else if(uid_check_hidden != 'true'){
// 아이디 중복검사 유효성
alert("아이디 중복검사를 해주세요 :D");
uid.focus();
return false;
} else {
uid_txt.text("");
}

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

// 이름 공백 유효성
if(!uname.val()){
uname_txt.text("이름을 입력해주세요 :D");
uname.focus();
return false;
} else if(!regex_nonumber.test(uname.val())){
uname_txt.text("이름에 숫자가 들어갈 수 없습니다 :D");
uname.val('');
uname.focus();
return false;
} else {
uname_txt.text("");  
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

// 약관동의 체크 유효성
var all_agree = $("#all_agree");
var agree1_check = $("#agree1").is(":checked");
var agree2_check = $("#agree2").is(":checked");
var agree_txt = $("#agree_txt");
if(!agree1_check || !agree2_check){
agree_txt.text("약관동의를 체크해주세요 :D");
all_agree.focus();
return false;
} else {
agree_txt.text("");
}

// 회원가입 전송
$("#register_info_form").submit();
});

/* 이용약관 동의 */
$("#all_agree").click(function(){
var all_agree = $(this).is(":checked");
if(all_agree){
$(".agree input").prop('checked', true);
} else {
$(".agree input").prop('checked', false);
}
});
});
// 약관동의 자세히보기
function agree1_open(){
window.open("terms_and_conditions.html","reg","width=600, height=500");
};
function agree2_open(){
window.open("information_agree.html","reg","width=600, height=500");
}