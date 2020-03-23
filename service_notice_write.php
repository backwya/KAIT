<?php include "inc/common.php"; ?>
<link rel="stylesheet" href="css/common_sub.css">
<link rel="stylesheet" href="css/service_notice_write.css">
<script type="text/javascript" src="js/service_notice_write.js?ver=1"></script>
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
<a href="service_notice.php" class="navi_txt">공지사항</a>
</div>
<?php include "inc/service_sub.php"; ?>
<article class="service_notice">
<h3>공지사항 | 글 작성</h3>
<div class="service_notice_wrap">
<form name="notice_write_form" id="notice_write_form" action="php/notice_board/service_notice_insert.php" method="post">
<fieldset>
	<legend>글 작성</legend>
	<label for="hidden"></label>
	<input type="hidden" id="hidden">
	<label for="notice_name">제목</label>
	<input type="text" name="notice_name" id="notice_name" placeholder="제목">
	<label for="notice_content">내용</label>
	<textarea name="notice_content" id="notice_content" placeholder="내용을 입력해주세요 :D !"></textarea>
</fieldset>
<div class="btn_wrap">
<button type="button" id="btn_write">저장</button>
<button type="button" id="btn_cansle" onclick="write_cancle()">취소</button>
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