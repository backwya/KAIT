<?php include "inc/common.php"; ?>
<link rel="stylesheet" href="css/common_sub.css">
<link rel="stylesheet" href="css/success_review_edit.css">
<script type="text/javascript" src="js/success_review_edit.js"></script>
</head>
<?php 
$review_no = isset($_SESSION['review_no'])? $_SESSION['review_no']:"";
include "php/inc/dbcon.php";
// 번호가 등록된 번호인 행을 찾는다.
$sql = "select * from review_board where review_no='$review_no';";
$result = mysqli_query($dbcon,$sql);
$row = mysqli_fetch_row($result);
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
<h3>시험후기 | 글 수정</h3>
<div class="success_review_wrap">
<form name="review_edit_form" id="review_edit_form" action="php/review_board/success_review_edit_ok.php" method="post">
<fieldset>
	<legend>글 수정</legend>
	<label for="hidden"></label>
	<input type="hidden" id="hidden">
	<label for="review_name">제목</label>
	<input type="text" name="review_name" id="review_name" value="<?php echo $row[1] ?>">
	<label for="review_content">내용</label>
	<textarea name="review_content" id="review_content"><?php echo $row[2] ?></textarea>
</fieldset>
<div class="btn_wrap">
<button type="button" id="btn_edit">저장</button>
<button type="button" id="btn_cansle" onclick="edit_cancle()">취소</button>
<button type="button" id="btn_list" onclick="list_out()">목록</button>
</div>
</form>
</div>
<!-- //service_notice_wrap -->
</article>
<!-- //service_notice -->
</section>
<!-- //service_guide -->
</main>
<!-- //main -->
<?php include "inc/footer.php"; ?>