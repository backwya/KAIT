<?php include "inc/common.php"; ?>
<link rel="stylesheet" href="css/common_sub.css">
<link rel="stylesheet" href="css/service_qna.css">
<script type="text/javascript" src="js/service_qna.js"></script>
</head>
<body>
<?php include "inc/header.php"; ?>
<div class="navi_bg"></div><!-- //navi_bg -->
<!-- main -->
<main class="main" id="main">
<section class="service_guide">
<h2>고객지원</h2>
<!-- navi -->
<div class="navi">
<a href="index.php" class="navi_home">HOME</a>
<span class="navi_next">></span>
<a href="service_notice.php" class="navi_txt">고객지원</a>
<span class="navi_next">></span>
<a href="service_qna.php" class="navi_txt">자주하는질문</a>
</div>
<!-- //navi -->
<!-- sub -->
<?php include "inc/service_sub.php"; ?>
<!-- //sub -->
<!-- service_qna -->
<article class="service_qna">
<h3>자주하는 질문</h3>
<!-- service_qna_wrap -->
<div class="service_qna_wrap">
<!-- qna_search_wrap -->
<div class="qna_search_wrap">
<form name="qna_search_form" action="" method="post">
<select name="search_val" id="search_val">
<option value="">&nbsp;&nbsp;&nbsp;&nbsp;전체</option>
<option value="">&nbsp;&nbsp;&nbsp;&nbsp;제목</option>
<option value="">&nbsp;&nbsp;&nbsp;&nbsp;내용</option>
</select>
<input type="text" class="search_name" id="search_name">
<button type="button" class="search_qna_btn">검색</button>
</form>
</div>
<!-- //qna_search_wrap -->
<!-- tab_qna -->
<div class="tab_qna">
<div class="qna_support">
<h4>시험접수</h4>
<div>
<h5>[시험장확인] 시험장 확인은 어떻게 하나요?</h5>
<p>시험접수를 완료한 경우, 시험장 확인은 시험 10일전부터 시험당일까지 확인이 가능합니다.<br>
<span class="bg_dark">시험장 확인경로 : [로그인] ⇒ [시험안내] ⇒ [수험표확인](*별도 출력은 불가)</span>
</p>
<h5>[회원가입] 휴대폰이 없을 경우 회원가입 방법을 알려주세요?</h5>
<p>회원가입 시 본인명의의 휴대폰이 없을 경우, 인터넷상 개인 식별번호인 아이핀(I-PIN)을 통해 본인인증을 할 수 있습니다.<br>
참고로 아이핀은 해당 발급 기관을 통해 발급 방법 등을 문의하시기 바랍니다.</p>
<h5>[본인인증 수단] 회원가입 시 본인인증 방법은 무엇인가요?</h5>
<p>시험접수 및 성적확인 등을 위해서는 자격검정 홈페이지<a href="http://www.ihd.or.kr" class="sub_link"> http://www.ihd.or.kr</a>에서 반드시 회원가입을 해야 합니다.<br>
회원가입을 위한 본인인증 방법은 ‘휴대폰’과 ‘아이핀(I-PIN)’ 인증 두 가지입니다.<br>
① 휴대폰 인증 : 자격검정 홈페이지에 가입하는 본인명의의 휴대폰으로 인증을 하시기 바랍니다.<br>
② 아이핀(I-PIN) 인증 : 휴대폰 인증을 원치 않거나, 본인명의의 휴대폰이 없을 경우 활용하시기 바랍니다.</p>
</div>
</div>
<div class="qna_refund">
<h4>연기 / 환불</h4>
<div>
<h5 class="qna_refund_no1">[연기환불 문의] 시험 접수 후 연기 또는 환불은 가능하나요?</h5>
<p>우리 협회 자격검정은 응시자의 편익을 위해 해당 <span class="bg_dark">시험일 10일전(시험전주 수요일)까지는</span>개인사유 등에 의해 연기 또는 환불 신청이 가능합니다.<br><br>
그러나, 시험일로부터 9일전부터 아래 특별사유 등에 해당하여 당일 시험에 응시하지 못한 경우에도 검정수수료 연기 및 환불이 가능하며,<br>
해당 내용은 시험 종료 후 3일 이내에 증빙서류와 함께 제출해 주셔야 합니다.<br><br>
[ 연기 또는 환불 가능 특별사유 ]<br>
1. 수수료를 과오납한 경우 : 과오납 금액 반환<br>
2. 검정시행기관의 귀책사유로 인하여 응시하지 못한 경우<br>
3. 시험 당일 아래와 같이 특별한 사유로 응시를 못한 자로 별도의 증빙서류를 시험 종료 후 3일 이내 제출한 경우<br>
&nbsp; 가. 직계가족 사망 및 입원<br>
&nbsp; 나. 본인 사고 및 질병으로 입원하는 경우<br>
&nbsp; 다. 수험자 본인의 결혼<br>
&nbsp; 라. 수험자 본인의 근무 및 출장<br>
&nbsp; 마. 수험자 본인의 입영<br>
&nbsp; 바. 수험자 본인의 공식 행사 참여<br>
&nbsp; 사. 타국가공인 및 국가자격 시험응시<br>
&nbsp; 아. 군부대 비상근무로 인해 불가피하게 외출이 금지 된 경우<br>
</p>
<h5 class="qna_refund_no2">[연기환불 방법] 연기나 환불 신청은 어떻게 하나요?</h5>
<p><span class="bg_dark">시험시행 10일전</span> (시험일전주 수요일까지) 개인사유에 의한 연기 또는 환불은 <span class="bg_dark">[마이페이지] > [접수현황]</span> 메뉴에서 신청 가능합니다.<br><br>
환불신청 후 홈페이지-[1:1상담]-[연기환불]에 [환불은행, 예금주, 계좌번호] 입력해 주시기 바랍니다.<br><br>
시험일로부터 10일전부터 연기 또는 환불 신청은 협회에서 규정한 특별사유에 의해서만 가능하며,<br>
[마이페이지] > [1:1 상담내역]에 관련 증빙서류를 포함하여 문의 후 홈페이지 상에서 결과를 확인해 주시기 바랍니다.<br><br>
연기신청한 경우 증빙서류 확인 후 다음 회차로 자동 접수 되며, 환불 신청한 경우 증빙서류 확인 후<br>수검자가 기재한 은행 계좌로 정보이용료를 제외한 금액이 20일 이내에 입금됩니다.<br><br>
연기나 환불 신청을 위한 증빙서류는 다음과 같습니다.<br>
가. 직계가족 사망 또는 입원<br>
&nbsp; - 수검자와 가족관계 입증(호적등본, 주민등록등본 등) 및 사망진단서 등 입증 서류<br>
나. 수검자 본인의 사고나 질병으로 입원시<br>
&nbsp; - 입원 입증 서류(진단서 등) : 응시일이 포함 된 진료 또는 입원기간<br>
다. 수검자 본인의 결혼<br>
&nbsp; - 청첩장 또는 부부로 등재된 주민등록등본<br>
라. 수검자의 근무나 출장<br>
&nbsp; - 출근(근무) 확인서(회사 혹은 기관 직인 포함)<br>
마. 수검자 본인의 입영<br>
&nbsp; - 입영통지서 또는 관련 서류<br>
바. 수검자 본인의 공식 행사 참여<br>
&nbsp; - 행사 참석 증비서류 및 참가확인서(행사 주최 기관 직인 포함)<br>
사. 타국가공인 또는 국가자격 시험 응시<br>
&nbsp; - 응시 확인서 및 수험표<br>
아. 현역 군인이 군부대 비상근무 등으로 외출이 금지 된 경우<br>
&nbsp; - (공문 형식의) 부대장 확인서</p><br>
</div>
</div>
<div class="qna_dissent">
<h4>이의신청</h4>
<div>
<h5>[문제공개] 종목별 기출문제는 어디서 확인하나요?</h5>
<p>종목별 기출문제는 <strong>[합격확인] ⇒ [문제공개]</strong>에서 확인하시기 바랍니다.</p>
<h5>[성적확인] 성적 이의신청은 어떻게 하나요?</h5>
<p>성적 이의신청은 ‘성적공개 후 14일 동안 가능하며 신청하신 내용의 답변은 <strong>[마이페이지] ⇒ [1:1 상담내역]</strong> 에서 확인 가능하십니다.<br>
<span class="bg_dark">이의신청 경로 : [로그인] ⇒ [합격확인] ⇒ [이의신청]</span>
</p>
</div>
</div>
<div class="qna_change">
<h4>정보변경</h4>
<div>
<h5 class="qna_change_no1">[시험정보] 시험 접수 후 시험장소 및 과목변경이 가능한가요?</h5>
<p>시험 10일전까지는 시험장 및 과목변경이 가능합니다. 그 이후로는 시험장 별 시험문제지 인쇄 및 배포가 완료되어 수검현황을 변경할 경우,<br> 시험 진행에 차질이 있어 장소 및 과목변경이 불가합니다.<br>
[ 신청방법 ]<br>
1) 자격검정고객지원센터(1899-0628)에 변경 신청<br>
2) <strong>[마이페이지] ⇒ [1:1 상담내역] ⇒ [1:1 상담]</strong><br>
</p>
<h5 class="qna_change_no2">[단제정보] 소속이 변경되면 어떻게 해야하나요?</h5>
<p>소속(방과후 교실 해당학교)이 변경되면 필히 단체변경신청을 하셔야 합니다.<br>
[ 신청방법 ]<br>
1) 자격검정고객지원센터(1899-0628)에 변경 신청<br>
<strong>2) [마이페이지] ⇒ [1:1 상담내역] ⇒ [1:1 상담]</strong><br>
</p>
<h5 class="qna_change_no3">[개인정보] 개명 시 정보변경은 어떻게 하나요?</h5>
<p>개명으로 인한 개인정보가 변경된 경우 [마이페이지] ⇒ [1:1상담내역]에서 정보변경 내역을 신청해 주시고 증빙서류를 첨부 해 주시기 바랍니다.<br>
[증빙서류 안내]<br>
개명 전/후 이름이 기재된 주민등록초본 또는 기본증명서<br>
<span class="bg_dark">개명신청 경로 : [마이페이지] ⇒ [1:1상담내역] ⇒ [1:1상담]</span>
</p>
</div>
</div>
<div class="qna_license">
<h4>자격증</h4>
<div>
<h5>[자격증수령] 자격증 신청 후 수령기간은 어떻게 되나요?</h5>
<p>자격증 신청 후 최대 14일 이후에 수령 하실 수 있습니다.<br>
자격증은 우체국택배를 통하여 발송되며 발송 후 발송안내 문자를 보내드리며 자격검정 홈페이지 <a href="http://www.ihd.or.kr" class="a_bg_blue">http://www.ihd.or.kr</a>에서 자격증 배송조회도 가능합니다.<br>
<span class="bg_dark">자격증 배송조회 경로 : [로그인] ⇒ [자격증확인] ⇒ [자격증발급]</span>
</p>
<h5>[자격증취소] 자격증 신청 후 취소가 가능하나요?</h5>
<p>자격증 신청 후 <strong>당일에 한해 취소</strong>가 가능하며 이후에는 취소가 불가하오니 신청 시 유의하시기 바랍니다.<br>
<span class="bg_dark">취소신청 경로 : [마이페이지] ⇒ [1:1상담내역] ⇒ [1:1상담]</span>
</p>
</div>
</div>
<div class="qna_etc">
<h4>기타</h4>
<div>
<h5 class="qna_etc_no1">[입실시간] 입실시간 이후에는 입실이 안 되나요?</h5>
<p>입실시간 이후에는 입실이 불가능합니다.<br>
정상적인 시험 진행을 위해 입실시간 이후의 입실은 타 응시자의 불편을 초래하고 시험 진행에 지장을 줄 수 있어 입실허용이 불가 합니다.<br>
원활한 시험 진행을 위해 입실 완료시간을 준수해 주시기 바랍니다.</p>
<h5 class="etc_txt">[지참물] 신분증으로 인정되는 것은 어떤 것들이 있나요?</h5>
<div class="etc_content">
<p>시험 당일 규정 신분증을 지참하지 않은 수험자는 절대 응시할 수 없으며,<br> 신분증 미 지참자가 시험 도중 적발될 경우에는 규정위반행위로 해당시험 무효 처리됩니다.<br>
<span class="bg_dark">신분증 규정 안내 경로: [응시자유의사항] ⇒ [신분증 규정]</span>
</p>
<table>
<thead>
<tr>
<th scope="col">구분</th>
<th scope="col">신분증 인정범위</th>
</tr>
</thead>
<tbody>
<tr>
<td>일반신분증</td>
<td>한국정보통신진흥협회 국가공인자격증(디지털정보활용능력, 리눅스마스터, 인터넷정보관리사(3급 제외)), 국가기술자격증</td>
</tr>
<tr>
<td>자격증</td>
<td>주민등록증, 운전면허증, 여권(유효기간 내), 공무원증, 장애인등록증(복지카드), 국가유공자증</td>
</tr>
<tr>
<td>학생</td>
<td>주민등록증 발급신청확인서, 청소년증, 학생증(사진부착 학교장 직인 필), 학교생활기록부(사본), 재학확인서(사진부착 학교장 직인 필)</td>
</tr>
<tr>
<td>군인</td>
<td>군장병 신분확인서(사진부착 부대장 직인 필)</td>
</tr>
</tbody>
</table>
</div>
<h5 class="qna_etc_no3">[지참물] 시험장에 수험표를 지참해야 하나요?</h5>
<p>수험표는 시험에 필요한 수험번호, 시험실, 안내사항 등이 기재되어 있으니 최대한 지참해주시고<br> 수험표를 지참하지 않은 응시자는 본인의 시험실과 수험번호를 확인 후 입실하시길 바랍니다.<br>
<span class="bg_dark">수험표 출력경로: [로그인] ⇒ [시험안내] ⇒ [수험표확인]</span> (*PC환경에서만 출력 가능)</p>
</div>
</div>
</div>
<!-- //tab_qna -->
<!-- qna_pager -->
<div class="qna_pager">
<!--<a href="">이전</a>-->
<ul>
<li><a href="#" class="pager_no1">1</a></li>
<!--<li><a href="#">2</a></li>
<li><a href="#">3</a></li>
<li><a href="#">4</a></li>
<li><a href="#">5</a></li>-->
</ul>
<!--<a href="">다음</a>-->
</div>
<!-- //qna_pager -->
</div>
<!-- //service_qna_wrap -->
</article>
<!-- //service_qna -->
</section>
<!-- //service_guide -->
</main>
<!-- //main -->
<?php include "inc/footer.php"; ?>