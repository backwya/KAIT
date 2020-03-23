<?php include "inc/common.php"; ?>
<link rel="stylesheet" href="css/common_sub.css?ver=1">
<link rel="stylesheet" href="css/success_problem.css">
</head>
<body>
<?php include "inc/header.php"; ?>
<div class="navi_bg"></div><!-- //navi_bg -->
<!-- main -->
<main class="main" id="main">
<section class="success_guide">
<h2>합격확인</h2>
<div class="navi">
<a href="index.php" class="navi_home">HOME</a>
<span class="navi_next">></span>
<a href="success_confirm.php" class="navi_txt">합격확인</a>
<span class="navi_next">></span>
<a href="success_problem.php" class="navi_txt">문제공개</a>
</div>
<?php include "inc/success_sub.php"; ?>
<article class="success_problem">
<h3>문제공개</h3>
<!-- success_problem_wrap -->
<div class="success_problem_wrap">
<div class="problem_search_wrap">
<form name="problem_search_form" action="" method="post">
<select name="select_license" id="select_license">
<option value="">전체</option>
<option value="">DIAT-멀티미디어제작</option>
<option value="">DIAT-멀티미디어제작(이지포토)</option>
<option value="">DIAT-스프레드시트</option>
<option value="">DIAT-워드(한글)</option>
<option value="">DIAT-인터넷정보검색</option>
<option value="">DIAT-정보통신상식</option>
<option value="">DIAT-프리젠테이션</option>
<option value="">DIAT-한셀</option>
<option value="">DIAT-한쇼</option>
<option value="">검색광고마케터1급</option>
<option value="">디지털영상편집1급</option>
<option value="">디지털영상편집2급</option>
<option value="">리눅스마스터1급</option>
<option value="">리눅스마스터2급</option>
<option value="">인터넷정보관리사1급</option>
<option value="">인터넷정보관리사2급</option>
<option value="">인터넷정보관리사3급</option>
<option value="">인터넷정보관리사 전문가</option>
<option value="">컴퓨터프로그래머2급</option>
<option value="">코딩능력마스터2급(스크래치)</option>
<option value="">코딩능력마스터2급(엔트리)</option>
<option value="">파이썬마스터1급</option>
<option value="">파이썬마스터2급</option>
<option value="">파이썬마스터3급</option>
</select>
<select name="search_val" id="search_val">
<option value="">&nbsp;&nbsp;&nbsp;&nbsp;전체</option>
<option value="">&nbsp;&nbsp;&nbsp;&nbsp;제목</option>
<option value="">&nbsp;&nbsp;&nbsp;&nbsp;내용</option>
</select>
<input type="text" class="search_name" id="search_name">
<button type="button" class="search_problem_btn">검색</button>
</form>
</div>
<!-- //problem_search_wrap -->
<table>
<caption>문제공개 목록</caption>
<colgroup>
    <col width="10%">
    <col width="55%">
    <col width="10%">
    <col width="15%">
    <col width="10%">
</colgroup>
<thead>
<tr>
<th scope="col">번호</th>
<th scope="col">제목</th>
<th scope="col">파일</th>
<th scope="col">작성일</th>
<th scope="col">조회수</th>
</tr>
</thead>
<tbody>
<tr>
<td>번호</td>
<td>제목</td>
<td>파일</td>
<td>작성일</td>
<td>조회수</td>
</tr>
</tbody>
</table>
<!-- problem_pager -->
<div class="problem_pager">
<a href="" class="pager_prev">이전</a>
<ul>
<li><a href="#" class="pager_no1">1</a></li>
<li><a href="#" class="pager_no2">2</a></li>
<li><a href="#" class="pager_no3">3</a></li>
<li><a href="#" class="pager_no4">4</a></li>
<li><a href="#" class="pager_no5">5</a></li>
</ul>
<a href="" class="pager_next">다음</a>
</div>
<!-- //problem_pager -->
</div>
<!-- //success_problem_wrap -->
</article>
</section>
</main>
<!-- //main -->
<?php include "inc/footer.php"; ?>