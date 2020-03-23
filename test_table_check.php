<?php include "inc/common.php"; ?>
<link rel="stylesheet" href="css/common_sub.css">
<link rel="stylesheet" href="css/test_table_check.css">
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
<a href="test_table_check.php" class="navi_txt">수험표확인</a>
</div>
<?php include "inc/test_sub.php"; ?>
<article class="test_table_check">
<h3>수험표확인</h3>
<!-- tab_refund -->
<div class="test_table_check_wrap">
<table>
<caption>수험표확인 목록</caption>
<thead>
<tr>
<th scope="col" class="th_no1">NO</th>
<th scope="col" class="th_no2">종목</th>
<th scope="col" class="th_no3">회차</th>
<th scope="col" class="th_no4">차수</th>
<th scope="col" class="th_no5">시험일</th>
<th scope="col" class="th_no6">수험표출력</th>
</tr>
</thead>
<tbody>
<tr>
<td>NO</td>
<td>종목</td>
<td>회차</td>
<td>차수</td>
<td>시험일</td>
<td>수험표출력</td>
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