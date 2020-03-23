<?php
$search_val = $_POST["search_val"];
$search_word = $_POST["search_word"];
?>
<?php include "inc/common.php"; ?>
<link rel="stylesheet" href="css/common_sub.css">
<link rel="stylesheet" href="css/service_notice_search.css">
<script type="text/javascript" src="js/service_notice.js?ver=1"></script>
</head>
<?php 
$notice_no = isset($_SESSION['notice_no'])? $_SESSION['notice_no']:"";
include "php/inc/dbcon.php";
if($search_val == 'all'){
$sql = "select * from notice_board where notice_title like '%$search_word%' or notice_content like '%$search_word%' order by notice_no desc;";
} else {
$sql = "select * from notice_board where $search_val like '%$search_word%' order by notice_no desc;";
}
$result = mysqli_query($dbcon, $sql);
?>
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
<a href="service_notice.php" class="navi_txt">공지사항</a>
</div>
<?php include "inc/service_sub.php"; ?>
<article class="service_notice">
<h3>공지사항</h3>
<div class="service_notice_wrap">
<div class="notice_search_wrap">
<form name="notice_search_form" action="service_notice_search.php" method="post">
<select name="search_val" id="search_val">
<option value="all">&nbsp;&nbsp;&nbsp;&nbsp;전체</option>
<option value="notice_title">&nbsp;&nbsp;&nbsp;&nbsp;제목</option>
<option value="notice_content">&nbsp;&nbsp;&nbsp;&nbsp;내용</option>
</select>
<label for="hidden"></label>
<input type="hidden" name="hidden" id="hidden">
<label for="search_word">검색어 입력</label>
<input type="text" name="search_word" id="search_word">
<button type="button" class="search_notice_btn" onclick="search_notice()">검색</button>
</form>
</div>
<!-- //notice_search_wrap -->
<?php if($sid == 'admin'){ ?>
<a href="service_notice_write.php" class="notice_write">글쓰기</a>
<?php } ?>
<a href="service_notice.php" class="notice_list">목록</a>
<table class="notice_table">
<caption>검색 : <?php echo $search_word ?> 목록</caption>
<colgroup>
<col width="10%">
<col width="55%">
<col width="15%">
<col width="10%">
</colgroup>
<thead>
<tr>
<th scope="col">번호</th>
<th scope="col">제목</th>
<th scope="col">작성일</th>
<th scope="col">조회수</th>
</tr>
</thead>
<tbody>
<?php
$count = mysqli_num_rows($result);
$num = $count;
while($array = mysqli_fetch_array($result)){
?>
<tr>
<td><?php echo $num ?></td>
<td><a href="service_notice_view.php?notice_no=<?php echo $array['notice_no'] ?>"><?php echo $array['notice_title'] ?></a></td>
<?php
$datetime = explode(" ",$array["notice_date"]);
$date = $datetime[0];
$time = $datetime[1];
if($date == date('Y-m-d')){
$array["notice_date"]=$time;
} else {
$array["notice_date"]=$date;
};
?>
<td><?php echo $array['notice_date'] ?></td>
<td><?php echo $array['notice_view'] ?></td>
</tr>
<?php $num--; } ?>
</tbody>
</table>
</div>
<!-- //service_notice_wrap -->
</article>
<!-- //service_notice -->
</section>
<!-- //service_guide -->
</main>
<!-- //main -->
<?php include "inc/footer.php"; ?>