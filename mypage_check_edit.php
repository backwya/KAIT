<?php include "inc/common.php"; ?>
<link rel="stylesheet" href="css/mypage_check_edit.css">
<script type="text/javascript" src="js/mypage_check_edit.js?ver=1"></script>
</head>
<?php
if(!$sid){ ?>
<script charset="utf-8">
alert("로그인한 회원이 아닙니다. 로그인을 해주세요 :D");
location.href="login.php";
</script>
<?php }; ?>
<body>
<?php include "inc/header.php"; ?>
<div class="navi_bg"></div>
<!-- main -->
<main class="main" id="main">
<section class="mypage_guide">
<h2>회원정보수정</h2>
<div class="navi">
<a href="index.php" class="navi_home">HOME</a>
<span class="navi_next">></span>
<a href="mypage_apply_status.php" class="navi_txt">마이페이지</a>
<span class="navi_next">></span>
<a href="mypage_check_edit.php" class="navi_txt">회원정보수정</a>
</div>
<!-- check_edit_wrap -->
<article class="check_edit_wrap">
<!-- check_edit_box -->
<div class="check_edit_box">
<span class="check_edit_txt">본인 확인을 위해 비밀번호를 다시 입력해 주세요 :D</span>
<form name="check_edit_form" id="check_edit_form" action="php/register/mypage_check_edit_ok.php" method="post">
<input type="password" name="check_pwd" id="check_pwd">
<button type="button" class="check_edit_btn">확인</button>
</form>
</div>
<!-- //check_edit_box -->
</article>
<!-- //check_edit_wrap -->
</section>
<!-- //service_guide -->
</main>
<!-- //main -->
<?php include "inc/footer.php"; ?>