<?php include "inc/common.php"; ?>
<link rel="stylesheet" href="css/common_sub.css">
<link rel="stylesheet" href="css/service_notice_view.css?ver=1">
<script type="text/javascript" src="js/service_notice_view.js?ver=1"></script>
</head>
<?php 
$notice_no = isset($_GET['notice_no'])? $_GET['notice_no']:"";
include "php/inc/dbcon.php";
// 번호가 등록된 번호인 행을 찾는다.
$sql = "select * from notice_board where notice_no='$notice_no';";
$view = "update notice_board set notice_view=notice_view+1 where notice_no='$notice_no'";
$result = mysqli_query($dbcon,$sql);
mysqli_query($dbcon, $view);
$array = mysqli_fetch_array($result);
// 세션 만들기
$_SESSION["notice_no"] = $notice_no;
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
<h4 class="board_name"><?php echo $array["notice_title"]; ?></h4>
<p class="span_wrap">
<span class="board_date">작성일 | <?php echo $array["notice_date"]; ?></span>
<span class="board_view">조회수 | <?php echo $array["notice_view"]; ?></span>
</p>
<p class="board_content"><?php echo nl2br($array["notice_content"]); ?></p>
<?php if($sid == 'admin'){ ?>
<div class="board_menu_wrap">
<a href="javascript:location.href='service_notice_edit.php?notice_no=<?php echo $notice_no ?>'" class="board_edit">수정</a>
<a href="#none" class="board_del" onclick="board_del()">삭제</a>
<a href="service_notice.php" class="board_list">목록</a>
</div>
<?php } else{ ?>
<div class="notice_board_list">
<a href="service_notice.php">목록</a>
</div>
<?php } ?>
</div>
<!-- //service_notice_wrap -->
</article>
<!-- //service_notice -->
</section>
<!-- //service_guide -->
</main>
<!-- //main -->
<?php include "inc/footer.php"; ?>