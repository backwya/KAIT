<?php include "inc/common.php"; ?>
<link rel="stylesheet" href="css/common_sub.css">
<link rel="stylesheet" href="css/service_notice.css?ver=1">
<script type="text/javascript" src="js/service_notice.js?ver=1"></script>
</head>
<?php 
$notice_no = isset($_SESSION['notice_no'])? $_SESSION['notice_no']:"";
include "php/inc/dbcon.php";
/* 페이징 */
if(isset($_GET["page"])){
$page = $_GET["page"];
} else {
$page = 1;
}
$sql = "select count(*) as cnt from notice_board order by notice_no desc;";
$result = mysqli_query($dbcon, $sql);
$row = mysqli_fetch_assoc($result);
$all_post = $row["cnt"]; // 전체게시글 개수
$one_page = 10; // 한 페이지에 보여줄 게시글 개수
$all_page = ceil($all_post/$one_page); // 전체 페이지 개수
/*if($page < 1 || $page > $all_page){*/ ?>
<!--	<script type="text/javascript">
alert("잘못된 접근입니다.");
history.back();
</script>-->
<?php /*exit; }*/
$one_block = 5; // 한번에 보여줄 블럭 개수 1~5, 6~10등
$current_block = ceil($page / $one_block); // 현재 블럭
$all_block = ceil($all_page / $one_block); // 전체 블럭 개수 예) 1~5 1개, 6~10 2개인데 지금 최대 3까지밖에 없으므로 전체 블럭 개수는 1
$first_page = ($current_block * $one_block) - ($one_block - 1); // 현재 블럭의 처음 페이지
if($current_block == $all_block){
$last_page = $all_page; // 현재 블럭이 마지막 블럭이면 $all_page가 마지막 페이지가 된다.
} else {
$last_page = $current_block * $one_block; // 현재 블럭의 마지막 페이지
}
$prev_page = (($current_block - 1) * $one_block); // 이전 페이지, 11~20일 때 이전을 누르면 10으로 이동
$next_page = (($current_block + 1) * $one_block) - ($one_block - 1); // 다음 페이지, 11~20일 때 다음을 누르면 21로 이동

$paging = "<ul>";
if($page != 1){
$paging .= '<li class="pager_prev"><a href="service_notice.php?page='.$prev_page.'">이전</a></li>';
}
for($l=$first_page;$l<=$last_page;$l++){
if($l == $page){
$paging .= '<li class="pager_no">'.$l.'</li>';
} else {
$paging .= '<li class="pager_no"><a href="service_notice.php?page='.$l.'">'.$l.'</a></li>';
}
}
if($page != $all_page){
$paging .= '<li class="pager_next"><a href="service_notice.php?page='.$next_page.'">다음</a></li>';
}
/* 페이징 쿼리 */
$current_limit = ($one_page * $page) - $one_page; // 몊 번째의 글부터 가져오는가
$sql_limit = 'limit '.$current_limit.', '.$one_page; //limit sql 구문
$sql = "select * from notice_board order by notice_no desc $sql_limit;";
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
<table class="notice_table">
<caption>공지사항 목록</caption>
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
$num = $all_post - (($count - 1) * $page) + 4;
while($array = mysqli_fetch_array($result)){
?>
<tr>
<?php if($num <= 0){} else{ ?>
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
<?php } ?>
</tr>
<?php $num--; } ?>
</tbody>
</table>
<div class="notice_pager">
<?php echo $paging ?>
<!--<a href="" class="pager_prev">이전</a>
<ul>
<li><a href="#" class="pager_no">1</a></li>
<li><a href="#" class="pager_no">2</a></li>
<li><a href="#" class="pager_no">3</a></li>
<li><a href="#" class="pager_no">4</a></li>
<li><a href="#" class="pager_no">5</a></li>
</ul>
<a href="" class="pager_next">다음</a>-->
</div>
<!-- //notice_pager -->
</div>
<!-- //service_notice_wrap -->
</article>
<!-- //service_notice -->
</section>
<!-- //service_guide -->
</main>
<!-- //main -->
<?php include "inc/footer.php"; ?>]