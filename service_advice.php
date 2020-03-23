<?php include "inc/common.php"; ?>
<link rel="stylesheet" href="css/common_sub.css">
<link rel="stylesheet" href="css/service_advice.css">
</head>
<body>
<?php include "inc/header.php"; ?>
<div class="navi_bg"></div><!-- //navi_bg -->
<!-- main -->
<main class="main" id="main">
<section class="service_guide">
<h2>고객지원</h2>
<div class="navi">
<a href="index.php" class="navi_home">HOME</a>
<span class="navi_next">></span>
<a href="service_notice.php" class="navi_txt">고객지원</a>
<span class="navi_next">></span>
<a href="service_advice.php" class="navi_txt">1 : 1상담</a>
</div>
<?php include "inc/service_sub.php"; ?>
<article class="service_advice">
<h3>1 : 1 상담</h3>
<div class="service_advice_wrap">
<a href="#" class="advice_btn">상담하기</a>
<table>
<caption>1 : 1 상담내역</caption>
<colgroup>
    <col width="10%">
    <col width="10%">
    <col width="40%">
    <col width="10%">
    <col width="10%">
</colgroup>
<thead>
<tr>
<th scope="col">번호</th>
<th scope="col">문의유형</th>
<th scope="col">제목</th>
<th scope="col">처리현황</th>
<th scope="col">작성일</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="5">등록된 항목이 없습니다.</td>
</tr>
</tbody>
</table>
<div class="advice_pager">
<a href="" class="pager_prev">이전</a>
<ul>
<li><a href="#" class="pager_no">1</a></li>
<li><a href="#" class="pager_no">2</a></li>
<li><a href="#" class="pager_no">3</a></li>
<li><a href="#" class="pager_no">4</a></li>
<li><a href="#" class="pager_no">5</a></li>
</ul>
<a href="" class="pager_next">다음</a>
</div>
<!-- //notice_pager -->
</div>
<!-- //service_advice_wrap -->
</article>
<!-- //service_advice -->
</section>
<!-- //service_guide -->
</main>
<!-- //main -->
<?php include "inc/footer.php"; ?>