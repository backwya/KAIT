<?php include "inc/common.php"; ?>
<link rel="stylesheet" href="css/common_sub.css">
<link rel="stylesheet" href="css/success_dissent.css">
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
<a href="success_dissent.php" class="navi_txt">이의신청</a>
</div>
<?php include "inc/success_sub.php"; ?>
<article class="success_dissent">
<h3>이의신청</h3>
<!-- tab_refund -->
<div class="success_dissent_wrap">
<table>
<caption>이의신청 목록</caption>
<colgroup>
    <col width="50%">
    <col width="10%">
    <col width="20%">
    <col width="20%">
</colgroup>
<thead>
<tr>
<th scope="col">종목</th>
<th scope="col">회차</th>
<th scope="col">시험일</th>
<th scope="col">이의신청기간</th>
</tr>
</thead>
<tbody>
<tr>
<td>종목</td>
<td>회차</td>
<td>시험일</td>
<td>이의신청기간</td>
</tr>
<tr>
	<td colspan="4">접수된 내용이 없습니다 :b</td>
</tr>
</tbody>
</table>
</div>
<!-- //tab_refund -->
</article>
</section>
</main>
<!-- //main -->
<?php include "inc/footer.php"; ?>