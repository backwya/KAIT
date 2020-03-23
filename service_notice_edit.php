<?php include "inc/common.php"; ?>
<link rel="stylesheet" href="css/common_sub.css">
<link rel="stylesheet" href="css/service_notice_edit.css">
<script type="text/javascript" src="js/service_notice_edit.js?ver=1"></script>
</head>
<?php 
$notice_no = isset($_SESSION['notice_no'])? $_SESSION['notice_no']:"";
include "php/inc/dbcon.php";
// 번호가 등록된 번호인 행을 찾는다.
$sql = "select * from notice_board where notice_no='$notice_no';";
$result = mysqli_query($dbcon,$sql);
$row = mysqli_fetch_row($result);
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
<h3>공지사항 | 글 수정</h3>
<div class="service_notice_wrap">
<form name="notice_edit_form" id="notice_edit_form" action="php/notice_board/service_notice_edit_ok.php" method="post">
<fieldset>
	<legend>글 수정</legend>
	<label for="hidden"></label>
	<input type="hidden" id="hidden">
	<label for="notice_name">제목</label>
	<input type="text" name="notice_name" id="notice_name" value="<?php echo $row[1] ?>">
	<label for="notice_content">내용</label>
	<textarea name="notice_content" id="notice_content"><?php echo $row[2] ?></textarea>
</fieldset>
<div class="btn_wrap">
<button type="button" id="btn_edit">저장</button>
<button type="button" id="btn_cansle" onclick="edit_cancle()">취소</button>
<button type="button" id="btn_list" onclick="javascript:location.href='service_notice.php'">목록</button>
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