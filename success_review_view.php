<?php include "inc/common.php"; ?>
<link rel="stylesheet" href="css/common_sub.css">
<link rel="stylesheet" href="css/success_review_view.css">
<script type="text/javascript" src="js/success_review_view.js?ver=1"></script>
</head>
<?php 
$review_no = isset($_GET['review_no'])? $_GET['review_no']:"";
include "php/inc/dbcon.php";
// 번호가 등록된 번호인 행을 찾는다.
$sql = "select * from review_board where review_no='$review_no';";
$view = "update review_board set review_view=review_view+1 where review_no='$review_no'";
$result = mysqli_query($dbcon,$sql);
mysqli_query($dbcon, $view);
$array = mysqli_fetch_array($result);
// 세션 만들기
$_SESSION["review_no"] = $review_no;
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
<div class="success_review_wrap">
<h4 class="board_name"><?php echo $array["review_title"]; ?></h4>
<p class="span_wrap">
<span class="board_uid">작성자 | <?php echo $array["review_uid"]; ?></span>
<span class="board_date">작성일 | <?php echo $array["review_date"]; ?></span>
<span class="board_view">조회수 | <?php echo $array["review_view"]; ?></span>
</p>
<p class="board_content"><?php echo nl2br($array["review_content"]); ?></p>
<?php if($sid == $array["review_uid"]){ ?>
<div class="board_menu_wrap">
<a href="javascript:location.href='success_review_edit.php?review_no=<?php echo $review_no ?>'" class="board_edit">수정</a>
<a href="#none" class="board_del" onclick="board_del()">삭제</a>
<a href="success_review.php" class="board_list">목록</a>
</div>
<?php } else{ ?>
<div class="review_board_list">
<a href="success_review.php">목록</a>
</div>
<?php }
	$comment = "select * from review_comment where review_no='$review_no';";
	$result = mysqli_query($dbcon, $comment);
	$row = mysqli_num_rows($result);
	?>
<div class="review_comment clearfix">
<h4>댓글 (<?php echo $row ?>)</h4>
<?php while($array = mysqli_fetch_array($result)){ ?>
<div class="comment_sub">
	<p class="comment"><?php echo nl2br($array["comment_content"]) ?></p>
	<p class="comment_uid">작성자: <?php echo $array["comment_uid"] ?></p>
	<?php if($sid == $array["comment_uid"]){ ?>
	<a href="php/review_board/review_comment_del.php?comment_no=<?php echo $array['comment_no'] ?>" class="comment_del">삭제</a>
	<?php } ?>
	</div>
<?php } ?>
<form action="php/review_board/review_comment_insert.php" method="post" name="review_comment_form">
<fieldset>
	<legend>댓글 쓰기</legend>
	<label for="hidden"></label>
	<input type="text" id="hidden">
	<?php if($sid){ ?>
	<label for="comment">댓글</label>
	<textarea name="comment" id="comment"></textarea>
	<button type="button" class="comment_btn" onclick="comment_submit()">작성</button>
	<?php } ?>
</fieldset>
</form>
</div>
</div>
<!-- //success_review_wrap -->
</article>
<!-- //success_review -->
</section>
<!-- //success_guide -->
</main>
<!-- //main -->
<?php include "inc/footer.php"; ?>