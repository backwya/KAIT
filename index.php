<?php 
header("Content-Type: text/html; charset=UTF-8");
session_start();
$sid = isset ($_SESSION["uid"])? $_SESSION["uid"] : "";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
<!-- meta -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="kait, 자격증, it자격증, ict자격증, 디지털정보활용능력, 리눅스마스터, 인터넷정보관리사, 컴퓨터프로그래머, 검색광고마케터, 디지털영상편집, 코딩능력마스터, 파이썬마스터" />
<meta name="description" content="kait자격검정, ict자격증, 정보통신기술자격검정" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
<title>KAIT 자격검정</title>
<!-- favicon -->
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<link rel="icon" href="favicon.ico" type="image/x-icon" />
<!-- css -->
<link rel="stylesheet" href="css/jquery.bxslider.min.css">
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/mobile_index.css">
<!-- js -->
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/index.js"></script>
<script type="text/javascript" src="js/banner.js"></script>
</head>
<body>
<div id="pc">
<!-- skip_menu -->
<div class="skip_menu">
<a href="#skip_login"><span>로그인 바로가기</span></a>
<a href="#skip_register"><span>회원가입 바로가기</span></a>
<a href="#skip_main_menu"><span>주요메뉴 바로가기</span></a>
<a href="#skip_notice"><span>공지사항 바로가기</span></a>
</div>
<!-- //skip_menu -->
<!-- banner -->
<div class="banner">
<p>본 사이트는 상업적 목적이 아닌 개인 포트폴리오 사이트로 제작되었습니다. 일부 이미지 및 폰트 등은 그 출처가 따로 있음을 밝힙니다.</p>
<div class="banner_close_wrap">
<a href="#none" class="banner_close">오늘 하루 열지 않기</a>
</div>
<!-- //banner_wrap -->
</div>
<!-- banner -->
<!-- all_wrap -->
<div id="all_wrap">
<!-- header -->
<header id="header" class="header">
<!-- logo -->
<div class="header_logo_wrap">
<h1><a href="index.php">KAIT자격검정</a></h1>
</div>
<!-- //logo -->

<!-- top_menu_wrap -->
<div class="top_menu_wrap">
<!-- top_menu -->
<div class="top_menu">
<h2>사용자메뉴</h2>
<ul>
<?php if(!$sid){ ?>
<li><a href="login.php" id="skip_login">로그인</a></li>
<li><a href="register.php" id="skip_register">회원가입</a></li>
<?php } else { ?>
<li><a href="#none" class="logout">로그아웃</a></li>
<li><a href="mypage_check_edit.php">회원정보</a></li>
<?php } ?>
<li><a href="service_advice.php">1:1상담</a></li>
<li><a href="index.php" class="top_lang_ko">한글</a></li>
<li><a href="#none" class="top_lang_en">영어</a></li>
</ul>
</div>
<!-- //top_menu -->
</div>
<!-- //top_menu_wrap -->

<!-- gnb -->
<nav id="gnb" class="gnb">
<div class="main_menu">
<h3 id="skip_main_menu">메인메뉴</h3>
<ul>
<li>
<a href="license_type_diat.php" class="gnb_qualify">자격안내</a>
<ul>
<li><a href="license_type_diat.php">자격종류</a></li>
<li><a href="license_use.php">자격활용</a></li>
<li><a href="license_revoke.php">폐지자격</a></li>
</ul>
</li>
<li>
<a href="test_set_diat.php" class="gnb_test">시험안내</a>
<ul>
<li><a href="test_set_diat.php">시험일정</a></li>
<li><a href="test_accept_guide.php">접수안내</a></li>
<li><a href="test_apply.php">접수신청</a></li>
<li><a href="test_table_check.php">수험표확인</a></li>
<li><a href="test_refund.php">연기&middot;환불</a></li>
<li><a href="test_memo_diat.php">유의사항</a></li>
</ul>
</li>
<li>
<a href="success_confirm.php" class="gnb_success">합격확인</a>
<ul>
<li><a href="success_confirm.php">성적확인</a></li>
<li><a href="success_dissent.php">이의신청</a></li>
<li><a href="success_problem.php">문제공개</a></li>
<li><a href="success_review.php">시험후기</a></li>
</ul>
</li>
<li>
<a href="issuance_license.php" class="gnb_license">자격증확인</a>
<ul>
<li><a href="issuance_license.php">자격증발급</a></li>
<li><a href="issuance_success.php">합격확인서발급</a></li>
<li><a href="issuance_kait.php">KAIT스킬인증&middot;공인강사</a></li>
</ul>
</li>
<li>
<a href="service_notice.php" class="gnb_customer">고객지원</a>
<ul>
<li><a href="service_notice.php">공지사항</a></li>
<li><a href="service_advice.php">1&#58;1상담</a></li>
<li><a href="service_qna.php">자주묻는질문</a></li>
<li><a href="service_textbook.php">교재안내</a></li>
<li><a href="service_area.php">지역본부안내</a></li>
</ul>
</li>
</ul>
</div>
<!-- //main_menu -->
<!-- bg_wrap -->
<div class="bg_wrap">
<!-- sub_bg -->
<div class="sub_bg">
<span class="sub_bg_ico1"></span>
<span class="sub_bg_ico2"></span>
<span class="sub_bg_ico3"></span>
<span class="sub_bg_ico4"></span>
<span class="sub_bg_ico5"></span>
</div>
<!-- //sub_wrap -->
</div>
<!-- //bg_wrap -->
</nav>
<!-- //gnb -->

<!-- user_menu -->
<div class="user_menu clearfix">
<h2>서브메뉴</h2>
<ul>
<li class="user_mypage">
<a href="#none">마이페이지</a>
<div class="user_mypage_wrap">
<!-- mypage_non_members -->
<?php if(!$sid){ ?>
<div class="user_mypage_non_members">
<ul>
<li><a href="login.php" class="user_mypage_login">로그인</a></li>
<li><a href="register.php" class="user_mypage_reg">회원가입</a></li>
</ul>
</div>
<!-- mypage_non_members -->
<?php } else{ ?>
<!-- mypage_members -->
<div class="user_mypage_members">
<span class="user_mypage_members_pic"></span>
<p class="user_mypage_members_name">이름</p>
<p class="user_mypage_members_birth">생년월일</p>
<a href="mypage_check_edit.php" class="user_mypage_members_edit">회원정보수정</a>
<ul>
<li><a href="mypage_apply_status.php">접수현황</a></li>
<li><a href="mypage_license_status.php">자격현황</a></li>
<li><a href="mypage_issue_status.php">발급현황</a></li>
<li><a href="mypage_kait_status.php">KAIT스킬인증&middot;공인강사현황</a></li>
</ul>
</div>
<?php }; ?>
<!-- //mypage_members -->
</div>
<!-- //mypage_wrap -->
</li>
<li class="user_allmenu">
<a href="#none">전체메뉴</a>
<div class="user_allmenu_wrap">
<ul>
<li class="user_allmenu_qualify"><span>자격안내</span>
<ul>
<li><a href="license_type_diat.php">자격종류</a></li>
<li><a href="license_use.php">자격활용</a></li>
<li><a href="license_revoke.php">폐지자격</a></li>
</ul>
</li>
<li class="user_allmenu_test"><span>시험안내</span>
<ul>
<li><a href="test_set_diat.php">시험일정</a></li>
<li><a href="test_accept_guide.php">접수안내</a></li>
<li><a href="test_apply.php">접수신청</a></li>
<li><a href="test_table_check.php">수험표확인</a></li>
<li><a href="test_refund.php">연기&middot;환불</a></li>
<li><a href="test_memo_diat.php">유의사항</a></li>
</ul>
</li>
<li class="user_allmenu_success"><span>합격확인</span>
<ul>
<li><a href="success_confirm.php">성적확인</a></li>
<li><a href="success_dissent.php">이의신청</a></li>
<li><a href="success_problem.php">문제공개</a></li>
<li><a href="success_review.php">시험후기</a></li>
</ul>
</li>
<li class="user_allmenu_license"><span>자격증확인</span>
<ul>
<li><a href="issuance_license.php">자격증발급</a></li>
<li><a href="issuance_success.php">합격확인서발급</a></li>
<li><a href="issuance_kait.php">KAIT스킬인증&middot;공인강사</a></li>
</ul>
</li>
<li class="user_allmenu_customer"><span>고객지원</span>
<ul>
<li><a href="service_notice.php">공지사항</a></li>
<li><a href="service_advice.php">1&#58;1상담</a></li>
<li><a href="service_qna.php">자주묻는질문</a></li>
<li><a href="service_textbook.php">교재안내</a></li>
<li><a href="service_area.php">지역본부안내</a></li>
</ul>
</li>
<li class="user_allmenu_mypage"><span>마이페이지</span>
<ul>
<li><a href="mypage_apply_status.php">접수현황</a></li>
<li><a href="mypage_license_status.php">자격현황</a></li>
<li><a href="mypage_issue_status.php">발급현황</a></li>
<li><a href="mypage_kait_status.php">KAIT스킬인증<br />&middot;공인강사현황</a></li>
<?php if($sid){ ?>
<li><a href="mypage_check_edit.php">회원정보수정</a></li>
<?php } ?>
</ul>
</li>
</ul>
</div>
<!-- //user_allmenu_wrap -->
</li>
</ul>
</div>
<!-- //user_menu -->
</header>
<!-- //header -->
<!-- main -->
<main class="main" id="main">
<!-- main_ad -->
<section class="main_content">
<!-- main_ad_content -->
<div class="main_ad_content">
<h2>메인광고</h2>
<div class="main_slider_wrap">
<ul id="main_slider">
<li class="main_ad1">
<div class="main_center">
<div class="main_ad1_img"></div>
<a href="#none" class="main_ad1_txt1">공정하고 신뢰하는 정보통신기술자격검정은 ICT자격분야의 가치를 전해 드립니다.</a>
<span class="main_ad_txt">1 / 2</span>
</div>
<div class="main1_bg"></div>
</li>
<li class="main_ad2">
<div class="main_center">
<div class="main_ad2_img"></div>
<a href="http://backwya.dothome.co.kr/service_notice_view.php?notice_no=6" class="main_ad2_txt1">결제시 오류 해결방법은 웹 브라우저의 팝업차단 해제 혹은 결제 프로그램 수동설치입니다.</a>
<span class="main_ad_txt">2 / 2</span>
</div>
<div class="main2_bg"></div>
</li>
</ul>
</div>
<!-- //main_slider_wrap -->
</div>
<!-- //main_ad_content -->
<!-- main_ad_wrap -->
<div class="main_ad_wrap">
<article class="main_box">
<a href="login.php" class="main_login">로그인</a>
<a href="register.php" class="main_reg">회원가입</a>
</article>
<!-- fav_menu -->
<article class="fav_menu">
<h2>즐겨찾는메뉴</h2>
<ul>
<li><a href="success_confirm.php"  class="fav_menu_success">합격자확인</a></li>
<li><a href="success_problem.php" class="fav_menu_problem">기출문제</a></li>
</ul>
</article>
<!-- //fav_menu -->
</div>
<!-- //main_ad_wrap -->
</section>
<!-- //main_ad -->

<!-- content_license_wrap -->
<div class="content_license_wrap">
<!-- license_support -->
<section class="license_support">
<h2>실시간접수</h2>
<ul>
<li>
<p class="license_linux_txt">리눅스마스터2급 1904회<br /> 2차 19.10.22(월)~19.11.08(금)</p>
<p>시험일자<br />19.12.14(토)</p>
<a href="test_apply.php" class="license_support_more">자세히보기</a>
</li>
<li>
<p class="license_diat_txt">디지털정보활용능력 2001회<br /> 19.12.16(월)~19.12.20(금)</p>
<p>시험일자<br />20.01.18(토)</p>
<a href="test_apply.php" class="license_support_more">자세히보기</a>
</li>
<li>
<p class="license_searchad_txt">검색광고마케터1급 2001회<br /> 20.01.28(화)~20.02.07(금)</p>
<p>시험일자<br />20.03.14(토)</p>
<a href="test_apply.php" class="license_support_more">자세히보기</a>
</li>
<li>
<p class="license_python_txt">파이썬마스터1급 2001회<br /> 20.01.28(화)~20.02.07(금)</p>
<p>시험일자<br /> 20.03.14(토)</p>
<a href="test_apply.php" class="license_support_more">자세히보기</a>
</li>
<li>
<p class="license_linux_txt">리눅스마스터1급 2001회<br /> 1차 20.01.28(화)~20.02.07(금)</p>
<p>시험일자<br /> 20.03.14(토)</p>
<a href="test_apply.php" class="license_support_more">자세히보기</a>
</li>
<li>
<p class="license_linux_txt">리눅스마스터1급 2001회<br /> 2차 20.04.06(월)~20.04.17(금)</p>
<p>시험일자<br /> 20.05.09(토)</p>
<a href="test_apply.php" class="license_support_more">자세히보기</a>
</li>
</ul>
</section>
<!-- //license_support -->

<!-- test_memo -->
<section class="test_memo">
<h2>응시자 유의사항</h2>
<a href="test_memo_diat.php">자세히보기</a>
</section>
<!-- //test_memo -->

<!-- content_license -->
<section class="content_license">
<h2>자격증</h2>
<ul>
<li><a href="license_type_diat.php" class="license_cert_diat">디지털정보활용능력</a>
<p>정보통신, OA, 멀티미디어, 인터넷 등 분야별 등급화를 통한 실무능력 인증</p>
</li>
<li><a href="license_type_linux.php" class="license_cert_linux">리눅스마스터</a>
<p>리눅스 OS의 기본 지식 및 리눅스 기반의 서버&middot;네트워크 관리</p>
</li>
<li><a href="license_type_internet.php" class="license_cert_internet">인터넷정보관리사</a>
<p>인터넷 정보검색 및 관리에 대한 이해와 활용 능력</p>
</li>
<li><a href="license_type_cps.php" class="license_cert_cps">컴퓨터프로그래머</a>
<p>프로그래밍을 기초교육과정에 맞춰 능력을 평가할수 있는 자격종목</p>
</li>
<li><a href="license_type_searchad.php" class="license_cert_searchad">검색광고마케터</a>
<p>온라인 비즈니스 및 마케팅의 기본지식 평가</p>
</li>
<li><a href="license_type_csmp.php" class="license_cert_csmp">디지털영상편집</a>
<p>디지털 영상 관련 기본이론과 영상제작&middot;편집 관련 지식 평가</p>
</li>
<li><a href="license_type_coa.php" class="license_cert_coa">코딩능력마스터</a>
<p>명령어 블록 조합을 이용한 프로그래밍 알고리즘 이해 평가</p>
</li>
<li><a href="license_type_python.php" class="license_cert_python">파이썬마스터</a>
<p>컴퓨팅 사고력 및 파이썬 문법과 알고리즘에 대한 지식 평가</p>
</li>
</ul>
</section>
<!-- //content_license -->
</div>
<!-- //content_license_wrap -->

<!-- content_community_wrap -->
<div class="content_community_wrap">
<!-- content_community -->
<section class="content_community">
<h2>커뮤니티</h2>
<!-- notice -->
<?php
$notice_no = isset($_SESSION['notice_no'])? $_SESSION['notice_no']:"";
include "php/inc/dbcon.php";
//쿼리
$sql = "select * from notice_board order by notice_no desc limit 0, 5;";
//전송
$result = mysqli_query($dbcon, $sql);
?>
<article class="community_notice">
<h3 id="skip_notice">공지사항</h3>
<ul>
<?php
$count = mysqli_num_rows($result);
$num = $count;
while($array = mysqli_fetch_array($result)){
?>
<li class="community_ico"><a href="service_notice_view.php?notice_no=<?php echo $array['notice_no'] ?>"><?php echo $array['notice_title'] ?></a></li>
<?php $num--; } ?>
<!--<li class="community_no1"><a href="#none">이벤트 당첨자 안내</a></li>
<li class="community_no2"><a href="#none">[2020년도 검색광고마케터 1급] 자격 운영횟수 및 출제기준 변경 안내</a></li>
<li class="community_no3"><a href="#none">2020년도 KAIT 자격검정 운영계획 및 일정 안내</a></li>
<li class="community_no4"><a href="#none">제 1903회 인터넷정보관리사 2급, 리눅스마스터 2급 자격증 발급 안내</a></li>
<li class="community_no5"><a href="#none">내년 1월 '윈도우7' 기술지원 종료, 오픈소스 활용가능 '리눅스' 뜬다.</a></li>-->
</ul>
<a href="service_notice.php" class="community_more">더보기</a>
</article>
<!-- //notice -->
<!-- review -->
<?php
$review_no = isset($_SESSION['review_no'])? $_SESSION['review_no']:"";
include "php/inc/dbcon.php";
//쿼리
$sql = "select * from review_board order by review_no desc limit 0, 5;";
//전송
$result = mysqli_query($dbcon, $sql);
?>
<article class="community_review">
<h3>시험후기</h3>
<ul>
<?php
$count = mysqli_num_rows($result);
$num = $count;
while($array = mysqli_fetch_array($result)){
?>
<li class="community_ico"><a href="success_review_view.php?review_no=<?php echo $array['review_no'] ?>"><?php echo $array['review_title'] ?></a></li>
<?php $num--; } ?>
<!--<li class="community_no1"><a href="#none">수많은 단기합격 수기에 혹했다 절망했던 자의 합격후기 (드.디.어.씁.니.다)</a></li>
<li class="community_no2"><a href="#none">리눅스마스터 드디어 합격했습니다 팁공유!</a></li>
<li class="community_no3"><a href="#none">10개월 10회 눈물의 합격후기 쓰는 10수생 ㅜㅜ 진짜 존버가 답이에요 여러분..</a></li>
<li class="community_no4"><a href="#none">디지털정보활용능력 고급 합격했는데 허무하네요ㅋㅋ</a></li>
<li class="community_no5"><a href="#none">18년부터 공부...리눅스마스터 늦은 후기 올립니당.</a></li>-->
</ul>
<a href="success_review.php" class="community_more">더보기</a>
</article>
<!-- review -->
</section>
<!-- //content_community -->
</div>
<!-- //content_community_wrap -->
</main>
<!-- //container -->
<!-- footer_wrap -->
<div class="footer_wrap">
<!-- footer -->
<footer id="footer" class="footer">
<h2>사이트 이용안내</h2>

<!-- footer_terms -->
<div class="footer_terms">
<h3>약관 및 정책</h3>
<ul>
<li><a href="#none">이메일 추출방지</a></li>
<li><a href="#none">개인정보처리방침</a></li>
<li><a href="#none">서비스이용약관</a></li>
<li><a href="http://kait.or.kr/about/about.jsp?h_id=4&h_seq=1">찾아오는길</a></li>
</ul>
</div>
<!-- //footer_terms -->

<!-- family_site -->
<div class="footer_family_site">
<h3>패밀리사이트</h3>
<a href="#none" class="footer_family_site_more">더보기</a>
<ul>
<li><a href="https://www.kait.or.kr/">한국정보통신진흥협회</a></li>
</ul>
</div>
<!-- //family_site -->

<!-- info -->
<div class="footer_info">
<p class="footer_post">(우)06242</p>
<address>서울특별시 강남구 역삼로 111 (역삼동)</address>
<p class="footer_ceo">운영책임자&#58;왕안나</p>
<p class="footer_business">사업자번호&#58;211-82-11990</p>
<p class="footer_tel">TEL&#58;1899-0628</p>
<p class="footer_copyright">Copyright &copy;Korea Association for ICT promotion. All Right reserved.</p>
</div>
<!-- //info -->
</footer>
<!-- //footer -->
</div>
<!-- //footer_wrap -->
</div>
<!-- //all_wrap -->
</div>
<!-- //pc -->
<div id="mobile">
<div class="mobile_banner">
<img src="img/mobile/m_banner_img.gif" alt="본 사이트는 상업적 목적이 아닌 개인 포트폴리오 사이트로 제작되었습니다. 일부 이미지 및 폰트 등은 그 출처가 따로 있음을 밝힙니다.">
<a href="#none" class="banner_del">오늘 하루 열지 않기</a>
</div>
<!-- banner -->
<div class="mobile_wrap">
<!-- //banner -->
<header id="header">
<h1><a href="index.php">KAIT자격검정</a></h1>
<!-- gnb -->
<nav id="gnb" class="gnb">
<h2 id="skip_main_menu">메인메뉴</h2>
<ul>
<li>
<a href="#none" class="gnb_qualify">자격안내</a>
<ul>
<li><a href="license_type_diat.php">자격종류</a></li>
<li><a href="license_use.php">자격활용</a></li>
<li><a href="license_revoke.php">폐지자격</a></li>
</ul>
</li>
<li>
<a href="#none" class="gnb_test">시험안내</a>
<ul>
<li><a href="test_set_diat.php">시험일정</a></li>
<li><a href="test_accept_guide.php">접수안내</a></li>
<li><a href="test_apply.php">접수신청</a></li>
<li><a href="test_table_check.php">수험표확인</a></li>
<li><a href="test_refund.php">연기&middot;환불</a></li>
<li><a href="test_memo_diat.php">유의사항</a></li>
</ul>
</li>
<li>
<a href="#none" class="gnb_success">합격확인</a>
<ul>
<li><a href="success_confirm.php">성적확인</a></li>
<li><a href="success_dissent.php">이의신청</a></li>
<li><a href="success_problem.php">문제공개</a></li>
<li><a href="success_review.php">시험후기</a></li>
</ul>
</li>
<li>
<a href="#none" class="gnb_license">자격증확인</a>
<ul>
<li><a href="issuance_license.php">자격증발급</a></li>
<li><a href="issuance_success.php">합격확인서발급</a></li>
<li><a href="issuance_kait.php">KAIT스킬인증&middot;공인강사</a></li>
</ul>
</li>
<li>
<a href="#none" class="gnb_customer">고객지원</a>
<ul>
<li><a href="service_notice.php">공지사항</a></li>
<li><a href="service_advice.php">1&#58;1상담</a></li>
<li><a href="service_qna.php">자주묻는질문</a></li>
<li><a href="service_textbook.php">교재안내</a></li>
<li><a href="service_area.php">지역본부안내</a></li>
</ul>
</li>
</ul>
</nav>
<!-- //gnb -->
<div class="user_my_page">
<h2>마이페이지</h2>
<div class="user_mypage_wrap">
<ul>
<li><a href="login.php" class="user_mypage_login">로그인</a></li>
<li><a href="register.php" class="user_mypage_reg">회원가입</a></li>
</ul>
</div>
<!-- //user_mypage_wrap -->
</div>
<!-- //user_mypage -->
</header>

<main id="main" class="main">
<section class="main_ad_content">
<h2>메인광고</h2>
<div class="main_slider_wrap">
<ul id="main_slider">
<li class="main_ad1">
<img src="img/mobile/m_main_ad_img.jpg" alt="KAIT자격검정" class="main_ad1_img">
<a href="#none" class="main_ad1_txt1">공정하고 신뢰하는 정보통신기술자격검정은 ICT자격분야의 가치를 전해 드립니다.</a>
</li>
</ul>
</div>
<!-- //main_slider_wrap -->
</section>
<!-- //main_ad_content -->
<section class="license_support clearfix">
<h2>실시간접수</h2>
<img src="img/mobile/m_support_img.jpg" alt="">
<ul>
<li>
<p class="license_linux_txt">리눅스마스터2급 1904회 2차 19.10.22(월)~19.11.08(금) 시험일자 : 19.12.14(토)</p>
<a href="test_apply.php" class="license_support_more">자세히보기</a>
</li>
<li>
<p class="license_diat_txt">디지털정보활용능력 2001회 19.12.16(월)~19.12.20(금) 시험일자 : 20.01.18(토)</p>
<a href="test_apply.php" class="license_support_more">자세히보기</a>
</li>
<li>
<p class="license_searchad_txt">검색광고마케터1급 2001회 20.01.28(화)~20.02.07(금) 시험일자 : 20.03.14(토)</p>
<a href="test_apply.php" class="license_support_more">자세히보기</a>
</li>
<li>
<p class="license_python_txt">파이썬마스터1급 2001회 20.01.28(화)~20.02.07(금) 시험일자 : 20.03.14(토)</p>
<a href="test_apply.php" class="license_support_more">자세히보기</a>
</li>
<li>
<p class="license_linux_txt">리눅스마스터1급 2001회 1차 20.01.28(화)~20.02.07(금) 시험일자 : 20.03.14(토)</p>
<a href="test_apply.php" class="license_support_more">자세히보기</a>
</li>
<li>
<p class="license_linux_txt">리눅스마스터1급 2001회 2차 20.04.06(월)~20.04.17(금) 시험일자 : 20.05.09(토)</p>
<a href="test_apply.php" class="license_support_more">자세히보기</a>
</li>
</ul>
</section>
<!-- //license_support -->
<section class="test_memo">
<h2>응시자 유의사항</h2>
<img src="img/mobile/m_note_img.png" alt="">
<a href="test_memo_diat.php">자세히보기</a>
</section>
<!-- //test_memo -->
<section class="content_license clearfix">
<h2>자격증</h2>
<ul>
<li><a href="license_type_diat.php" class="license_cert_diat"><img src="img/mobile/m_license_diat_img.jpg" alt="디지털정보활용능력"></a>
<p>정보통신, OA, 멀티미디어, 인터넷 등 분야별 등급화를 통한 실무능력 인증</p>
</li>
<li><a href="license_type_linux.php" class="license_cert_linux"><img src="img/mobile/m_license_linux_img.jpg" alt="리눅스마스터"></a>
<p>리눅스 OS의 기본 지식 및 리눅스 기반의 서버&middot;네트워크 관리</p>
</li>
<li><a href="license_type_internet.php" class="license_cert_internet"><img src="img/mobile/m_license_internet_img.jpg" alt="인터넷정보관리사"></a>
<p>인터넷 정보검색 및 관리에 대한 이해와 활용 능력</p>
</li>
<li><a href="license_type_cps.php" class="license_cert_cps"><img src="img/mobile/m_license_cps_img.jpg" alt="컴퓨터프로그래머"></a>
<p>프로그래밍을 기초교육과정에 맞춰 능력을 평가할수 있는 자격종목</p>
</li>
<li><a href="license_type_searchad.php" class="license_cert_searchad"><img src="img/mobile/m_license_searchad_img.jpg" alt="검색광고마케터"></a>
<p>온라인 비즈니스 및 마케팅의 기본지식 평가</p>
</li>
<li><a href="license_type_csmp.php" class="license_cert_csmp"><img src="img/mobile/m_license_csmp_img.jpg" alt="디지털영상편집"></a>
<p>디지털 영상 관련 기본이론과 영상제작&middot;편집 관련 지식 평가</p>
</li>
<li><a href="license_type_coa.php" class="license_cert_coa"><img src="img/mobile/m_license_coa_img.jpg" alt="코딩능력마스터"></a>
<p>명령어 블록 조합을 이용한 프로그래밍 알고리즘 이해 평가</p>
</li>
<li><a href="license_type_python.php" class="license_cert_python"><img src="img/mobile/m_license_python_img.jpg" alt="파이썬마스터"></a>
<p>컴퓨팅 사고력 및 파이썬 문법과 알고리즘에 대한 지식 평가</p>
</li>
</ul>
</section>
<!-- //content_license -->
<section class="content_community">
<h2>커뮤니티</h2>
<article class="community_notice">
<h3 id="skip_notice">공지사항</h3>
<?php
$notice_no = isset($_SESSION['notice_no'])? $_SESSION['notice_no']:"";
include "php/inc/dbcon.php";
//쿼리
$sql = "select * from notice_board order by notice_no desc limit 0, 5;";
//전송
$result = mysqli_query($dbcon, $sql);
?>
<ul>
<?php
$count = mysqli_num_rows($result);
$num = $count;
while($array = mysqli_fetch_array($result)){
?>
<li><a href="service_notice_view.php?notice_no=<?php echo $array['notice_no'] ?>"><?php echo $array['notice_title'] ?></a></li>
<?php $num--; } ?>
</ul>
<a href="service_notice.php" class="community_more">더보기</a>
</article>
<!-- //community_notice -->
<article class="community_review">
<h3>시험후기</h3>
<?php
$review_no = isset($_SESSION['review_no'])? $_SESSION['review_no']:"";
include "php/inc/dbcon.php";
//쿼리
$sql = "select * from review_board order by review_no desc limit 0, 5;";
//전송
$result = mysqli_query($dbcon, $sql);
?>
<ul>
<?php
$count = mysqli_num_rows($result);
$num = $count;
while($array = mysqli_fetch_array($result)){
?>
<li class="community_ico"><a href="success_review_view.php?review_no=<?php echo $array['review_no'] ?>"><?php echo $array['review_title'] ?></a></li>
<?php $num--; } ?>
</ul>
<a href="success_review.php" class="community_more">더보기</a>
</article>
<!-- //community_review -->
</section>
<!-- //content_community -->
</main>

<a href="#" class="scroll_top">위로가기</a>
<footer id="footer" class="footer">
<h2>사이트 이용안내</h2>
<div class="footer_user">
<h3>사용자메뉴</h3>
<ul class="clearfix">
<li><a href="login.php">로그인</a></li>
<li><a href="index.php">KAIT</a></li>
<li><a href="#none">PC화면</a></li>
</ul>
</div>
<!-- //footer_user -->
<div class="footer_terms">
<h3>약관 및 정책</h3>
<ul class="clearfix">
<li><a href="#none">이메일 추출방지</a></li>
<li><a href="#none">개인정보처리방침</a></li>
<li><a href="#none">서비스이용약관</a></li>
<li><a href="http://kait.or.kr/about/about.jsp?h_id=4&h_seq=1">찾아오는길</a></li>
</ul>
</div>
<!-- //footer_terms -->
<div class="footer_info">
<p class="footer_copyright">Copyright &copy;Korea Association for ICT promotion. All Right reserved.</p>
</div>
</footer>
</div>
<!-- mobile_wrap -->
</div>
<!-- //mobile -->
</body>
</html>