<?php include "inc/common.php";
include "inc/login_check.php"; ?>
<link rel="stylesheet" href="css/common_sub.css">
<link rel="stylesheet" href="css/mypage_kait_status.css">
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
<a href="mypage_kait_status.php" class="navi_txt">KAIT스킬인증&middot;공인강사현황</a>
</div>
<?php include "inc/mypage_sub.php"; ?>
<article class="mypage_kait">
<h3>접수현황</h3>
<div class="mypage_kait_wrap">
<!-- display_color -->
<div class="display_color clearfix">
<span class="display_img"></span>
<span class="display_gray">신청완료</span>
<span class="display_blue">제작중</span>
<span class="display_black">제작보류</span>
<span class="display_org">발송</span>
<span class="display_red">반송</span>
</div>
<!-- display_color -->
<p class="sub_p">
	<span class="sub_txt_name">신청내역</span>
	<span class="sub_txt_name2">
		종목별 공인자격 취득하는 경우 주민등록 뒷번호 7자리를 입력하셔야 점수/등급확인 및 합격확인서/자격증발급/스킬인증/공인강사 신청이 가능합니다.</span><br>
		<span class="txt_blue sub_txt">입금 후 당일취소만 가능하며, 취소시 <a href="service_advice.php" class="sub_link">1:1 상담내역</a>을 이용바랍니다.</span>
</p>
<table>
<caption>신청내역</caption>
<colgroup>
<col style="width: 5%">
<col style="width: 20%">
<col style="width: 20%">
<col style="width: 15%">
<col style="width: 15%">
<col style="width: 7%">
<col style="width: 8%">
<col style="width: 10%">
</colgroup>
<thead>
<tr>
<th scope="col">No</th>
<th scope="col">자격번호</th>
<th scope="col">신청구분</th>
<th scope="col">신청일</th>
<th scope="col">입금일</th>
<th scope="col">입금여부</th>
<th scope="col">발급현황</th>
<th scope="col">배송정보</th>
</tr>
</thead>
<tbody>
<tr>
<td>No</td>
<td>자격번호</td>
<td>신청구분</td>
<td>신청일</td>
<td>입금일</td>
<td>입금여부</td>
<td>발급현황</td>
<td>배송정보</td>
</tr>
<tr>
<td colspan="8">신청한 내역이 없습니다 :D</td>
</tr>
</tbody>
</table>
</div>
<!-- //test_apply_wrap -->
</article>
<!-- //test_apply -->
</section>
<!-- //test_guide -->
</main>
<!-- //main -->
<?php include "inc/footer.php"; ?>