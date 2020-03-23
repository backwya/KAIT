<?php
$search_val = $_POST["search_val"];
$search_word = $_POST["search_word"];
?>
<?php include "inc/common.php"; ?>
<link rel="stylesheet" href="css/common_sub.css">
<link rel="stylesheet" href="css/success_review_search.css">
<script type="text/javascript" src="js/success_review.js"></script>
</head>
<?php
$review_no = isset($_SESSION['review_no'])? $_SESSION['review_no']:"";
include "php/inc/dbcon.php";
if($search_val == 'all'){
$sql = "select * from review_board where review_title like '%$search_word%' or review_content like '%$search_word%' order by review_no desc;";
} else {
$sql = "select * from review_board where $search_val like '%$search_word%' order by review_no desc;";
}
$result = mysqli_query($dbcon, $sql);
?>
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
<a href="success_review.php" class="navi_txt">시험후기</a>
</div>
<?php include "inc/success_sub.php"; ?>
<article class="success_review">
<h3>시험후기</h3>
<!-- success_review_wrap -->
<div class="success_review_wrap">
<div class="review_search_wrap">
<form name="review_search_form" action="success_review_search.php" method="post">
<select name="search_val" id="search_val">
<option value="all">&nbsp;&nbsp;&nbsp;&nbsp;전체</option>
<option value="review_title">&nbsp;&nbsp;&nbsp;&nbsp;제목</option>
<option value="review_content">&nbsp;&nbsp;&nbsp;&nbsp;내용</option>
</select>
<label for="hidden"></label>
<input type="hidden" name="hidden" id="hidden">
<label for="search_word">검색어 입력</label>
<input type="text" name="search_word" id="search_word">
<button type="button" class="search_review_btn" onclick="search_review()">검색</button>
</form>
</div>
<!-- //review_search_wrap -->
<?php if($sid){ ?>
<a href="success_review_write.php" class="review_write">글쓰기</a>
<?php } ?>
<a href="success_review.php" class="review_list">목록</a>
<table>
<caption>시험후기 목록</caption>
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
<th scope="col">작성자</th>
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
<td><a href="success_review_view.php?review_no=<?php echo $array["review_no"] ?>"><?php echo $array["review_title"] ?></a></td>
<?php
$datetime = explode(" ",$array["review_date"]);
$date = $datetime[0];
$time = $datetime[1];
if($date == date('Y-m-d')){
$array["review_date"]=$time;
} else {
$array["review_date"]=$date;
};
?>
<td><?php echo $array["review_uid"] ?></td>
<td><?php echo $array['review_date'] ?></td>
<td><?php echo $array['review_view'] ?></td>
</tr>
<?php $num--; } ?>
</tbody>
</table>
</div>
<!-- //success_review_wrap -->
</article>
</section>
</main>
<!-- //main -->
<?php include "inc/footer.php"; ?>