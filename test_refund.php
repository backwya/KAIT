<?php include "inc/common.php"; ?>
<link rel="stylesheet" href="css/common_sub.css">
<link rel="stylesheet" href="css/test_refund.css">
<script type="text/javascript" src="js/test_guide.js"></script>
<script type="text/javascript" src="js/test_refund.js"></script>
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
<a href="test_refund.php" class="navi_txt">연기 / 환불</a>
</div>
<?php include "inc/test_sub.php"; ?>
<article class="test_refund">
<h3>연기 / 환불</h3>
<!-- tab_refund -->
<div class="tab_refund">
<!-- diat_produce -->
<div class="refund_way">
<h4>신청방법</h4>
<div>
<p>
<span class="sub_txt_name">연기 및 환불</span>
<span class="sub_txt">
<span class="sub_txt_name2">연기 및 환불규정에 따라 신청기간내에 마이페이지의 시험접수현황 에서 연기/환불신청</span>
연기 및 환불 신청기간이 지난이후(시험일 10일전~시험일)에는 협회에서 규정한 사유에 대해서만<br> 마이페이지 > <a href="service_advice.php" class="sub_link">1:1 상담내역</a>을 통해 연기 및 환불 신청이 가능하며 반드시 증빙서류를 첨부하셔야 합니다.<br>
- 연기 : 다음 회차로 1회만 응시 연기 가능함(재차 응시불가 할 경우 환불 신청만 가능함)<br>
- 환불 : 응시비용 100% 환불 가능하며, 신청기간 이후 부분환불 없음<br><br>
<span class="sub_txt_name2 txt_blue">온라인 1차 시험의 경우 응시 접속이력이 없을 경우 접수 기간내에만 환불만 신청 가능<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (리눅스마스터 2급, 인터넷정보관리사 2급만 해당)</span>
</span>
</p>
<p class="sub_p">
<span class="sub_txt_name">신청방법</span>
<span class="sub_txt">
<span class="sub_txt_name2">
- 입금~시험일 10일 전 : 연기/환불신청시 연기 또는 환불가능(정보이용료 제외)<br>
<span class="sub_txt2">- 10일 전 ~ 시험 종료(시험일포함) 후 3일 이내 : 증빙서류를 첨부하여 연기 또는 환불가능(정보이용료 제외)</span></span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(마이페이지 > <a href="service_advice.php" class="sub_link">1:1 상담내역</a>을 통해 신청)<br>
<span class="sub_txt2">- 시험일 이후 : 연기 및 환불 불가(입실시간 지각자 및 결시자 포함)</span><br>
<span class="sub_box">
예) 시험일이 1월 30일인 경우<br>
- 시험 10일 전 : 1월 20일 (신청서 마감기한)<br>
- 시험 10일 전 ~ 시험 전일 : 1월 21일 ~ 1월 29일<br>
- 시험일 이후 : 1월 30일 이후
</span>
</span>
</p>
<div class="sub_p">
<table>
<caption>연기 / 환불 안내</caption>
<thead>
<tr>
<th scope="col">구분</th>
<th scope="col">연기 / 환불 방법</th>
</tr>
</thead>
<tbody>
<tr>
<th scope="row">연기</th>
<td>다음 회차로 연기</td>
</tr>
<tr>
<th scope="row">환불</th>
<td>신용카드 : 결제취소 (승인/매입취소)<br>
가상계좌 : 환불계좌로 입금(정보이용료 본인부담, 20일 소요)</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
<!-- //diat_produce -->
<!-- diat_test -->
<div class="refund_papers">
<h4>증빙서류</h4>
<div>
<table>
	<caption>연기 및 환불 신청에 따른 증빙서류 안내</caption>
	<thead>
		<tr>
			<th scope="col">사유</th>
			<th scope="col">증빙서류</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th scope="row">사고 질병으로 인한 수술 및 장기입원</th>
			<td>해당병원에서 발행하는 진료확인서 또는 진단서</td>
		</tr>
		<tr>
			<th scope="row">직계가족 사망 및 입원</th>
			<td>사망 진단서, 입원 증명서(병원발행) 및 가족관계 확인서</td>
		</tr>
		<tr>
			<th scope="row">결혼</th>
			<td>부부로 등재된 주민등록등본 또는 청첩장</td>
		</tr>
		<tr>
			<th scope="row">해외 출장 및 파견</th>
			<td>출근(근무)확인서(해당 회사 혹은 기관 직인 포함), 출장 및 파견 명령서(직인포함)</td>
		</tr>
		<tr>
			<th scope="row">입영</th>
			<td>입영통지서 또는 관련 서류</td>
		</tr>
		<tr>
			<th scope="row">공식 행사 참여</th>
			<td>행사참석 증빙자료, 참가 확인서, 참가명단 리스트(수험자 참여 증명)</td>
		</tr>
		<tr>
			<th scope="row">타 국가공인 및 국가자격 시험응시</th>
			<td>자격검정 수험표</td>
		</tr>
		<tr>
			<th scope="row">현역군인</th>
			<td>군인신분증</td>
		</tr>
	</tbody>
</table>
</div>
</div>
<!-- //diat_test -->
</div>
<!-- //tab_refund -->
</article>
</section>
</main>
<!-- //main -->
<?php include "inc/footer.php"; ?>