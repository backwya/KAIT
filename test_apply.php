<?php include "inc/common.php"; ?>
<link rel="stylesheet" href="css/common_sub.css">
<link rel="stylesheet" href="css/test_apply.css">
<script type="text/javascript" src="js/test_guide.js"></script>
</head>
<body>
<?php include "inc/header.php"; ?>
<div class="navi_bg"></div><!-- //navi_bg -->
<!-- main -->
<main class="main" id="main">
<section class="test_guide">
<h2>시험안내</h2>
<div class="navi">
<a href="index.php" class="navi_home">HOME</a>
<span class="navi_next">></span>
<a href="test_set_diat.php" class="navi_txt">시험안내</a>
<span class="navi_next">></span>
<a href="test_apply.php" class="navi_txt">접수신청</a>
</div>
<?php include "inc/test_sub.php"; ?>
<article class="test_apply">
<h3>접수신청</h3>
<div class="test_apply_wrap">
<span class="test_apply_index">응시종목선택</span>
<p class="sub_p">
<span class="sub_txt_name">실시간 접수</span>
<span class="sub_txt_name2">마이페이지의 사진등록<a href="mypage_check_edit.php" class="sub_link">사진관리</a>이후에 시험접수가 가능합니다.</span>
<span class="txt_blue">접수마감일 18:00까지 접수 및 입금 완료</span>
</p>
<table>
<caption>접수중인 시험 안내</caption>
<colgroup>
<col style="width: 17.5%;">
<col style="width: 20%;">
<col style="width: 15%;">
<col style="width: 30%;">
<col style="width: 17.5%;">
</colgroup>
<thead>
<tr>
<th scope="col">종목</th>
<th scope="col">회차</th>
<th scope="col">접수일</th>
<th scope="col">시험일</th>
<th scope="col">접수</th>
</tr>
</thead>
<tbody>
<tr>
<td>종목</td>
<td>회차</td>
<td>접수일</td>
<td>시험일</td>
<td class="td_apply"><a href="#none">접수하기</a></td>
</tr>
<tr>
<td colspan="5">현재 접수 가능한 시험이 없습니다 :D</td>
</tr>
</tbody>
</table>
<p class="sub_p">
<span class="sub_txt_name">
접수 예정 시험
</span>
</p>
<table>
<caption>접수 예정 시험 안내</caption>
<colgroup>
<col style="width: 17.5%;">
<col style="width: 20%;">
<col style="width: 15%;">
<col style="width: 30%;">
<col style="width: 17.5%;">
</colgroup>
<thead>
<tr>
<th scope="col">종목</th>
<th scope="col">회차</th>
<th scope="col">접수일</th>
<th scope="col">시험일</th>
<th scope="col">접수</th>
</tr>
</thead>
<tbody>
<tr>
<td>종목</td>
<td>회차</td>
<td>접수일</td>
<td>시험일</td>
<td class="td_apply">준비중</td>
</tr>
<tr>
<td colspan="5">현재 접수 예정인 시험이 없습니다 :D</td>
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