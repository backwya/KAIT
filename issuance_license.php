<?php include "inc/common.php"; ?>
<link rel="stylesheet" href="css/common_sub.css">
<link rel="stylesheet" href="css/issuance_license.css">
</head>
<body>
<?php include "inc/header.php"; ?>
<div class="navi_bg"></div><!-- //navi_bg -->
<!-- main -->
<main class="main" id="main">
<section class="issuance_guide">
<h2>자격증확인</h2>
<div class="navi">
<a href="index.php" class="navi_home">HOME</a>
<span class="navi_next">></span>
<a href="issuance_license.php" class="navi_txt">자격증확인</a>
<span class="navi_next">></span>
<a href="issuance_license.php" class="navi_txt">자격증발급</a>
</div>
<?php include "inc/issuance_sub.php"; ?>
<article class="issuance_license">
<h3>자격증발급</h3>
<div class="issuance_license_wrap">
<div class="issuance_license_index">신청안내</div>
<p class="sub_p">
<span class="sub_txt_name">자격증 발급 신청 안내</span>
<span class="issuance_license_img sub_txt clearfix">
<span class="issuance_license_img1">KAIT자격증 앞면</span>
<span class="issuance_license_img2">KAIT자격증 뒷면</span>
</span>
</p>
<p class="sub_p">
<span class="sub_txt_name2">발급정보 확인</span>
<span class="sub_txt">사진, 성명, 생년월일, 자격종목, 취득회차, 등급, 취득일 확인 후 신청합니다.<br>
+ 수령 주소, 연락처 필수 입력(정보가 부정확할 경우 발송보류)</span>
</p>
<p class="sub_p">
<span class="sub_txt_name2">발송기간</span>
<span class="sub_txt">신청완료 후 제작기간을 포함하여 최대 14일 소요됩니다.</span>
</p>
<p class="sub_p">
<span class="sub_txt_name2">발급신청 현황 및 배송상태 확인</span>
<span class="sub_txt">자격증 신청현황에서 확인 가능합니다.</span>
</p>
<p class="sub_p">
<span class="sub_txt_name2">발급신청 취소</span>
<span class="sub_txt">입금 후 당일취소만 가능하며, 취소시 <a href="service_advice.php" class="sub_link">1:1 상담내역</a>을 이용바랍니다.</span>
</p>
<table>
<caption>발급비용 안내</caption>
<colgroup>
<col style="width: 30%">
<col style="width: 10%">
<col style="width: 25%">
<col style="width: 10%">
<col style="width: 10%">
<col style="width: 15%">
</colgroup>
<thead>
<tr>
<th scope="col" colspan="2">구분</th>
<th scope="col">제작비</th>
<th scope="col">발송비</th>
<th scope="col">정보이용료</th>
<th scope="col">발급비용</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2">개인회원 신청시</td>
<td>3,500원 X 신청건수</td>
<td>2,300원</td>
<td>650원</td>
<td rowspan="3">제작비+<br />발송비+<br />정보이용료</td>
</tr>
<tr>
<td rowspan="2">단체관리자를 통해 일괄신청시</td>
<td>2인 이하</td>
<td>3,500원 X 신청건수</td>
<td>2,300원</td>
<td>300원</td>
</tr>
<tr>
<td>3인 이상</td>
<td>3,500원 X 신청건수</td>
<td>2,300원</td>
<td>-</td>
</tr>
</tbody>
</table>
<div class="issuance_license_btn clearfix">
<a href="#none" class="license_apply">신청</a>
<a href="#none" class="license_apply_list">신청내역</a>
</div>
</div>
<!-- //test_apply_wrap -->
</article>
<!-- //test_apply -->
</section>
<!-- //test_guide -->
</main>
<!-- //main -->
<?php include "inc/footer.php"; ?>