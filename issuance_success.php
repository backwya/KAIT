<?php include "inc/common.php"; ?>
<link rel="stylesheet" href="css/common_sub.css">
<link rel="stylesheet" href="css/issuance_success.css">
</head>
<body>
<?php include "inc/header.php"; ?>
<div class="navi_bg"></div><!-- //navi_bg -->
<!-- main -->
<main class="main" id="main">
<section class="issuance_guide">
<h2>자격증확인</h2>
<div class="navi">
<a href="index.php" class="navi_home">HOME</a>
<span class="navi_next">></span>
<a href="issuance_license.php" class="navi_txt">자격증확인</a>
<span class="navi_next">></span>
<a href="issuance_success.php" class="navi_txt">합격확인서발급</a>
</div>
<?php include "inc/issuance_sub.php"; ?>
<article class="issuance_success">
<h3>합격확인서 발급</h3>
<div class="issuance_success_wrap">
<div class="issuance_success_index">신청안내</div>
<p class="sub_p">
	<span class="sub_txt_name">합격확인서 발급 신청안내</span>
	<span class="sub_txt_name2 sub_txt">발급 정보 확인</span>
	<span class="sub_txt sub_txt2">사진, 성명, 생년월일, 자격종목, 취득회차, 등급, 취득일을 확인 후 신청해주세요.</span>
	<span class="sub_txt_name2 sub_txt">발송 기간</span>
	<span class="sub_txt sub_txt2">즉시 출력 가능합니다.</span>
	<span class="sub_txt_name2 sub_txt">발급 비용</span>
	<span class="sub_txt sub_txt2">합격 확인서 발급 비용은 무료입니다.</span>
</p>
<div class="issuance_success_btn">
<a href="#none" class="success_apply">신청</a>
</div>
</div>
<!-- //test_apply_wrap -->
</article>
<!-- //test_apply -->
</section>
<!-- //test_guide -->
</main>
<!-- //main -->
<?php include "inc/footer.php"; ?>