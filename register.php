<?php include "inc/common.php"; ?>
<link rel="stylesheet" href="css/register.css">
<script type="text/javascript" src="https://t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
<script type="text/javascript" src="js/register.js?ver=1">
</script>
</head>
<body>
<?php include "inc/header.php"; ?>
<div class="navi_bg"></div>
<!-- main -->
<main class="main" id="main">
<section class="register">
<h2>회원가입</h2>
<div class="navi">
<a href="index.php" class="navi_home">HOME</a>
<span class="navi_next">></span>
<a href="register.php" class="navi_txt">회원가입</a>
</div>
<form name="register_info_form" id="register_info_form" action="php/register/register_submit.php" method="post">
<fieldset>
<legend>회원가입 양식 작성</legend>
<p>
<label for="uid">아이디<span class="sign"> *</span></label>
<input type="text" name="uid" id="uid">
<button type="button" id="uid_check">중복확인</button>
<span id="uid_txt"></span>
</p>
<p>
<label for="pwd">비밀번호<span class="sign"> *</span></label>
<input type="password" name="pwd" id="pwd">
<span id="pwd_txt"></span>
</p>
<p>
<label for="repwd">비밀번호확인<span class="sign"> *</span></label>
<input type="password" name="repwd" id="repwd">
<span id="repwd_txt"></span>
</p>
<p>
<label for="uname">이름<span class="sign"> *</span></label>
<input type="text" name="uname" id="uname">
<span id="uname_txt"></span>
</p>
<p>
<label for="birth">생년월일<span class="sign"> *</span></label>
<input type="text" name="birth" id="birth" placeholder="예) 20200209">
<span id="birth_txt"></span>
</p>
<p class="overflow_hidden">
<span>성별<span class="sign"> *</span></span><br>
<input type="radio" name="gender" id="m" value="M">
<label for="m">남자</label>
<input type="radio" name="gender" id="w" value="W">
<label for="w">여자</label>
<span id="gender_txt"></span>
</p>
<p>
<label for="mobile">휴대폰번호<span class="sign"> *</span></label>
<input type="text" name="mobile" id="mobile" placeholder="예) 01012345678">
<button type="button" id="mobile_check">본인인증</button>
<span id="mobile_txt"></span>
</p>
<p>
<span>SMS수신동의<span class="sign"> *</span></span><br>
<input type="radio" name="sms_check" id="sms_y" value="Y">
<label for="sms_y">동의</label>
<input type="radio" name="sms_check" id="sms_n" value="N">
<label for="sms_n">비동의</label>
<span id="sms_check_txt"></span>
</p>
<p class="email">
<label for="email">이메일<span class="sign"> *</span></label>
<input type="text" name="email" id="email" placeholder="예) test@gmail.com">
<!-- @ 
<input type="text" name="email_dns" id="email_dns">
<select name="email_sel" id="email_sel">
<option value="naver.com">네이버</option>
<option value="daum.net">다음</option>
<option value="gmail.com">구글</option>
</select>-->
<span id="email_txt"></span>
</p>
<p class="overflow_hidden">
<span>이메일수신동의<span class="sign"> *</span></span><br>
<input type="radio" name="email_check" id="email_y" value="Y">
<label for="email_y">동의</label>
<input type="radio" name="email_check" id="email_n" value="N">
<label for="email_n">비동의</label>
<span id="email_check_txt"></span>
</p>
<p>
<span>주소<span class="sign"> *</span></span>
<input type="text" name="address" id="address">
<button type="button" id="address_search" onclick="daum_zip_address()">주소검색</button>
<span class="post">우편번호</span>
<input type="text" name="post" id="post">
</p>
<p class="address_detail">
<label for="address_detail">상세주소</label>
<input type="text" name="add_detail" id="address_detail">
<span id="address_txt"></span>
</p>
<p>
<span>접수구분<span class="sign"> *</span></span><br>
<input type="radio" name="accept" id="individual" value="개인접수">
<label for="individual">개인접수</label>
<input type="radio" name="accept" id="group" value="단체접수">
<label for="group">단체접수</label>
<span id="accept_txt"></span>
</p>
<!--<p class="group">
<label for="">지역</label><br>
<select name="area" id="area">
<option value="서울">서울</option>
<option value="경기도">경기도</option>
</select>
<label for="">학교/기관명</label><br>
<select name="institute" id="institute">
<option value="서울고등학교">서울고등학교</option>
<option value="서울고등학교">경기도고등학교</option>
</select>
<label for="">담당선생님</label><br>
<input type="text" name="take_charge" id="take_charge">
</p>-->
</fieldset>
<p class="agree">
<input type="checkbox" name="all_agree" id="all_agree">
<label for="all_agree">모든 이용약관에 동의합니다.<span class="sign"> *</span></label>
<span class="agree_line"></span>
<input type="checkbox" name="agree1" id="agree1">
<label for="agree1">KAIT자격검정 이용약관 동의 (필수)</label>
<a href="#none" class="agree1_more" onclick="agree1_open()">자세히보기</a>
<input type="checkbox" name="agree2" id="agree2">
<label for="agree2">개인정보 수집 및 이용 안내 동의 (필수)</label>
<a href="#none" class="agree2_more" onclick="agree2_open()">자세히보기</a>
<span id="agree_txt"></span>
</p>
<p class="register_btn">
<button type="button" id="btn_reg">회원가입</button>
<button type="button" id="btn_cansle" onclick="javascript:history.back()">취소</button>
</p>
</form>
<input type="hidden" name="uid_check_hidden" id="uid_check_hidden" value="false">
</section>
</main>
<!-- //main -->
<?php include "inc/footer.php"; ?>