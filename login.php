<?php header("Content-Type: text/html; charset=UTF-8"); ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<!-- meta -->
<meta charset="utf-8">
<meta name="google-signin-client_id" content="1097319689603-7naodh14a9bblc63e4bpl7bf7r7nurjm.apps.googleusercontent.com">
<title>KAIT 자격검정 | 로그인</title>
<?php include "inc/common.php"; ?>
<link rel="stylesheet" href="css/login.css?ver=1">
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<!-- 구글, 네이버 로그인 -->
<script src="https://apis.google.com/js/platform.js" async defer></script>
<script type="text/javascript" src="https://static.nid.naver.com/js/naveridlogin_js_sdk_2.0.0.js" charset="utf-8"></script>
<script type="text/javascript" src="js/login.js?ver=1"></script>
</head>
<body>
<!-- skip_menu -->
<div class="skip_menu">
<a href="#skip_login"><span>로그인 바로가기</span></a>
<a href="#skip_register"><span>회원가입 바로가기</span></a>
<a href="#skip_main_menu"><span>주요메뉴 바로가기</span></a>
</div>
<!-- //skip_menu -->
<!-- all_wrap -->
<div id="all_wrap">
<?php include "inc/header.php"; ?>
<div class="navi_bg"></div>
<!-- main -->
<main class="main" id="main">
<section class="login">
<h2>로그인</h2>
<div class="navi">
<a href="index.php" class="navi_home">HOME</a>
<span class="navi_next">></span>
<a href="login.php" class="navi_txt">로그인</a>
</div>
<div class="form_border clearfix">
<form action="php/login/login_check.php" method="post" name="login_form">
<fieldset>
<legend>로그인 입력</legend>
<input type="text" class="login_uid" id="uid" name="uid" placeholder="아이디를 입력해주세요.">
<span id="uid_txt"></span>
<input type="password" class="login_pwd" id="pwd" name="pwd" placeholder="비밀번호를 입력해주세요.">
<span id="pwd_txt"></span>
<input type="checkbox" value="Y" name="uid_save" id="uid_save">
<label for="uid_save">아이디 저장</label>
<button type="button" class="btn_login" id="btn_log" name="btn_log" onclick="form_check()">로그인</button>
</fieldset>
</form>
<div class="social_login">
<a href="#" class="g-signin2" data-onsuccess="onSignIn" data-theme="dark">구글 로그인</a>
<div id="naverIdLogin">네이버 로그인</div>
</div>
<script type="text/javascript">
	var naverLogin = new naver.LoginWithNaverId(
		{
			clientId: "bHzRD4gEMxb5KWY4zcRL",
			callbackUrl: "http://backwya.dothome.co.kr/callback.php",
			isPopup: false, /* 팝업을 통한 연동처리 여부 */
			loginButton: {color: "green", type: 2, height: 38} /* 로그인 버튼의 타입을 지정 */
		}
	);
	/* 설정정보를 초기화하고 연동을 준비 */
	naverLogin.init();
</script>
</div>
<div class="atc">
<a href="find_idpwd.php">아이디찾기</a>
<a href="find_idpwd.php">비밀번호찾기</a>
<a href="register.php">회원가입</a>
</div>
</section>
</main>
<!-- //main -->

<?php include "inc/footer.php"; ?>
</div>
<!-- //all_wrap -->
</body>
</html>