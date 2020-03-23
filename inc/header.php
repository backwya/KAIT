<!-- skip_menu -->
<div class="skip_menu">
<a href="#skip_login"><span>로그인 바로가기</span></a>
<a href="#skip_register"><span>회원가입 바로가기</span></a>
<a href="#skip_main_menu"><span>주요메뉴 바로가기</span></a>
</div>
<!-- //skip_menu -->

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
<ul class="sub_qualify">
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
<li><a href="service_notice.php" id="skip_notice">공지사항</a></li>
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
<div class="user_menu">
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