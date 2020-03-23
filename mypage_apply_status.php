<?php include "inc/common.php";
include "inc/login_check.php"; ?>
<link rel="stylesheet" href="css/common_sub.css">
<link rel="stylesheet" href="css/mypage_apply_status.css?ver=1">
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
<a href="mypage_apply_status.php" class="navi_txt">접수현황</a>
</div>
<?php include "inc/mypage_sub.php"; ?>
<article class="mypage_apply">
<h3>접수현황</h3>
<div class="mypage_apply_wrap">
<!-- display_color -->
<div class="display_color clearfix">
<span class="display_img"></span>
<span class="display_gray">접수완료</span>
<span class="display_blue">입금완료</span>
<span class="display_black">시험종료</span>
<span class="display_org">연기/환불처리중</span>
<span class="display_red">연기/환불완료</span>
</div>
<!-- display_color -->
<form name="apply_search_form" id="apply_search_form" class="clearfix" action="" method="post">
<fieldset>
<legend>종목/기간검색</legend>
<p>
<label for="apply_license">종목</label>
<input type="search" name="apply_license" id="apply_license">
</p>
<p>
<span class="apply_date">기간</span>
<label for="apply_date_start">시작</label>
<input type="date" name="apply_date_start" id="apply_date_start">
&nbsp; - &nbsp;
<label for="apply_date_end">끝</label>
<input type="date" name="apply_date_end" id="apply_date_end">
</p>
</fieldset>
<p>
<button type="button" id="apply_btn">검색</button>
</p>
</form>
<table>
<caption>접수내역</caption>
<colgroup>
<col style="width: 25%">
<col style="width: 10%">
<col style="width: 5%">
<col style="width: 10%">
<col style="width: 22%">
<col style="width: 15%">
<col style="width: 5%">
<col style="width: 8%">
</colgroup>
<thead>
<tr>
<th scope="col">종목</th>
<th scope="col">회차</th>
<th scope="col">차수</th>
<th scope="col">시험구분</th>
<th scope="col">수험번호</th>
<th scope="col">시험일</th>
<th scope="col">상태</th>
<th scope="col">합격여부</th>
</tr>
</thead>
<tbody>
<tr>
<td>종목</td>
<td>회차</td>
<td>차수</td>
<td>시험구분</td>
<td>수험번호</td>
<td>시험일</td>
<td>상태</td>
<td>합격여부</td>
</tr>
<tr>
<td colspan="8">접수된 내역이 없습니다 :D</td>
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