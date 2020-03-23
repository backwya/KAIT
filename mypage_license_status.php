<?php include "inc/common.php";
include "inc/login_check.php"; ?>
<link rel="stylesheet" href="css/common_sub.css">
<link rel="stylesheet" href="css/mypage_license_status.css"?ver=1>
</head>
<body>
<?php include "inc/header.php"; ?>
<div class="navi_bg"></div><!-- //navi_bg -->
<!-- main -->
<main class="main" id="main">
<section class="mypage_guide">
<h2>마이페이지</h2>
<div class="navi">
<a href="index.php" class="navi_home">HOME</a>
<span class="navi_next">></span>
<a href="mypage_apply_status.php" class="navi_txt">마이페이지</a>
<span class="navi_next">></span>
<a href="mypage_license_status.php" class="navi_txt">자격현황</a>
</div>
<?php include "inc/mypage_sub.php"; ?>
<article class="mypage_license">
<h3>자격현황</h3>
<div class="mypage_license_wrap">
<table>
<caption>자격증 취득내역</caption>
<thead>
<tr>
<th scope="col">No</th>
<th scope="col">자격번호</th>
<th scope="col">종목/과목</th>
<th scope="col">회차</th>
<th scope="col">취득일</th>
<th scope="col">등급</th>
<th scope="col">주민번호</th>
</tr>
</thead>
<tbody>
<tr>
<td>No</td>
<td>자격번호</td>
<td>종목/과목</td>
<td>회차</td>
<td>취득일</td>
<td>등급</td>
<td>주민번호</td>
</tr>
<tr>
<td colspan="7">접수된 내역이 없습니다 :D</td>
</tr>
</tbody>
</table>
<p class="sub_p">
	<span class="sub_txt_name">공인자격 취득내역 조회 및 통합</span>
	<span class="sub_txt_name2">회원가입 이전에 취득하신 <span class="txt_blue">공인자격</span>은 자격취득내역을 조회 하신 후 통합이 가능합니다.</span>
</p>
<a href="#none" class="license_btn">공인자격 취득내역 조회</a>
</div>
<!-- //test_apply_wrap -->
</article>
<!-- //test_apply -->
</section>
<!-- //test_guide -->
</main>
<!-- //main -->
<?php include "inc/footer.php"; ?>