<?php include "inc/common.php"; ?>
<link rel="stylesheet" href="css/common_sub.css">
<link rel="stylesheet" href="css/success_review_write.css">
<script type="text/javascript" src="js/success_review_write.js"></script>
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
<a href="success_review.php" class="navi_txt">시험후기</a>
</div>
<?php include "inc/success_sub.php"; ?>
<article class="success_review">
<h3>시험후기 | 글 작성</h3>
<div class="success_review_wrap">
<form name="review_write_form" id="review_write_form" action="php/review_board/success_review_insert.php" method="post">
<fieldset>
	<legend>글 작성</legend>
	<label for="hidden"></label>
	<input type="hidden" id="hidden">
	<label for="review_name">제목</label>
	<input type="text" name="review_name" id="review_name" placeholder="제목">
	<label for="review_content">내용</label>
	<textarea name="review_content" id="review_content" placeholder="내용을 입력해주세요 :D !"></textarea>
</fieldset>
<div class="btn_wrap">
<button type="button" id="btn_write">저장</button>
<button type="button" id="btn_cansle" onclick="write_cancle()">취소</button>
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