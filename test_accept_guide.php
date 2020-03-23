<?php include "inc/common.php"; ?>
<link rel="stylesheet" href="css/common_sub.css">
<link rel="stylesheet" href="css/test_accept_guide.css">
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
<a href="test_accept_guide.php" class="navi_txt">접수안내</a>
</div>
<?php include "inc/test_sub.php"; ?>
<article class="test_accept_guide">
<h3>접수안내</h3>
<div class="accept_guide_wrap">
<span class="accept_guide_index">응시종목선택</span>
<div>
<p class="sub_txt_name sub_p">접수안내 상세</p>
<span class="sub_txt_name2">로그인 (회원가입)<br>
응시접수는 인터넷을 통해서만 가능하며, 시험접수 및 응시를 위해서는 반드시 회원으로 가입되어야 합니다.<br>
단체접수시 단체관리자(회원가입 및 회원정보수정을 통해 설정)를 통해 접수바랍니다.<br>
+ 마이페이지의 사진등록 <a href="mypage_check_edit.php" class="sub_link">사진관리</a> 이후에 시험접수가 가능합니다.</span>
<span class="sub_txt_name2">
응시종목 선택<br>
응시하고자 하는 종목과 시험일자를 확인 후 [접수하기]를 선택합니다.
</span>
<span class="sub_txt_name2">
응시지역 선택<br>
- 응시하고자 하는 응시지역과 시험장을 선택합니다.<br>
- 시험장 정원이 모두 마감된 경우에는 더 이상 해당 시험장을 선택할 수 없습니다.<br>
+ 추후배정 시험장은 응시접수 완료 후 10일전 <a href="test_table_check.php" class="sub_link">수험표확인</a>을 통해 시험장 확인 가능</span>
<span class="sub_txt_name2">
결제하기<br>
응시료 결제가 완료되어야 응시접수가 정상적으로 완료됩니다.
</span>
<div class="sub_box">
[결제수단]<br><br>
- 개인 : 신용카드, 계좌이체 입금 중 택일<br>
- 단체 : 가상계좌 입금만 가능<br>
- 정보이용료 별도 : 신용카드/계좌이체 650원, 가상계좌 300원<br>
<span class="txt_blue">&nbsp; 접수마감일 18:00까지 접수 및 입금 완료</span>
</div>
<span class="sub_txt_name2">
접수완료</span>
결제가 완료되면 <a href="" class="sub_link">접수현황</a>에서 접수한 내역을 확인할 수 있습니다.<br>
<div class="sub_box">
시험장 확인 : 시험장 확인은 시험일 10일전부터 시험 당일까지 확인 가능<br>
수험표 출력 : 수험표 출력은 시험일 5일전부터 시험 당일까지 확인 가능<br>
연기 및 환불 : 연기 및 환불규정에 따라 신청 가능
</div>
</div>
</div>
<!-- //accept_guide_wrap -->
</article>
<!-- //test_accept_guide -->
</section>
<!-- //test_guide -->
</main>
<!-- //main -->
<?php include "inc/footer.php"; ?>