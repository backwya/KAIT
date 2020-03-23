<?php include "inc/common.php"; ?>
<link rel="stylesheet" href="css/common_sub.css">
<link rel="stylesheet" href="css/success_confirm.css">
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
<a href="success_confirm.php" class="navi_txt">성적확인</a>
</div>
<?php include "inc/success_sub.php"; ?>
<article class="success_confirm">
<h3>성적확인</h3>
<!-- tab_refund -->
<div class="success_confirm_wrap">
<a href="#none" class="print_guide">인쇄 시 유의사항</a>
<table>
<caption>성적확인 목록</caption>
<colgroup>
    <col width="15%">
    <col width="10%">
    <col width="5%">
    <col width="10%">
    <col width="10%">
    <col width="10%">
    <col width="10%">
    <col width="10%">
    <col width="10%">
    <col width="10%">
</colgroup>
<thead>
<tr>
<th scope="col">종목</th>
<th scope="col">회차</th>
<th scope="col">차수</th>
<th scope="col">시험구분</th>
<th scope="col">수험번호</th>
<th scope="col">시험일</th>
<th scope="col">합격여부</th>
<th scope="col">점수</th>
<th scope="col">주민번호</th>
<th scope="col">성적분석</th>
</tr>
</thead>
<tbody>
<tr>
<td>종목</td>
<td>회차</td>
<td>차수</td>
<td>시험구분</td>
<td>수험번호</td>
<td>시험일</td>
<td>합격여부</td>
<td>점수</td>
<td>주민번호</td>
<td>성적분석</td>
</tr>
<tr>
<td colspan="10">합격자 데이터가 없습니다 :b</td>
</tr>
</tbody>
</table>
<p class="sub_p">
자격기본법 시행령 제32조 1항에 의거 자격취득자의 인적사항(성명, 주민등록번호)을 관리합니다.<br>
주민번호 및 주소 입력 후, 자격증 발급이 가능합니다. 주소입력은 <a href="mypage_check_edit.php" class="sub_link">회원정보수정</a>를 통해 작성 및 수정바랍니다.<br>
<span class="txt_blue">+ 성적분석자료는 합격발표 후 2주간 제공됩니다! :B</span>
</p>
<p class="sub_p">
<span class="sub_txt_name">이의신청 안내</span>
<span class="txt_box">
<span class="sub_txt_name2">신청기간 : 성적공개일로부터 15일 이내까지만 가능합니다.</span>
<span class="sub_txt_name2">신청방법 : <a href="success_dissent.php" class="sub_link">이의신청</a>을 통해 “문제이의” 및 “채점이의”를 선택하여 작성바랍니다.</span>
<span class="sub_txt_name2">유의사항</span>
<span class="sub_txt">- 이의신청은 기간내에 접수된 건만 유효하며, 해당 회차에 대해서만 이의 제기가 가능합니다.<br>
- 허위로 정보를 기재하거나 부정행위자는 이의신청 불가능합니다.<br>
- 비속어, 인신공격, 허위사실, 해당 회차의 시험과 무관한 내용 등을 포함한 이의 제기는 사전 경고없이 기각될 수 있으며,<br>&nbsp;&nbsp;타인 또는 협회에 유·무형의 손해가 발생할 요지가 있을 경우 민·형사상 처벌을 받을 수 있습니다.</span>
</span>
</p>
</div>
<!-- //tab_refund -->
</article>
</section>
</main>
<!-- //main -->
<?php include "inc/footer.php"; ?>