<?php include "inc/common.php"; ?>
<link rel="stylesheet" href="css/mypage_edit.css?ver=1">
<script type="text/javascript" src="https://t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
<script type="text/javascript" src="js/mypage_edit.js?ver=1"></script>
</head>
<?php
if(!$sid){ ?>
<script charset="utf-8">
alert("로그인이 필요합니다! 로그인 화면으로 이동합니다 :D");
location.href="login.php";
</script>
<?php }
include "php/inc/dbcon.php";
$sql = "select * from members where uid='$sid';";
$result = mysqli_query($dbcon,$sql);
$array = mysqli_fetch_array($result);
$birth = $array["birth"];
$birth = explode('-',$birth);
$birth = $birth[0].$birth[1].$birth[2];
?>
<body>
<?php include "inc/header.php"; ?>
<div class="navi_bg"></div>
<!-- main -->
<main class="main" id="main">
<section class="register">
<h2>회원수정</h2>
<div class="navi">
<a href="index.php" class="navi_home">HOME</a>
<span class="navi_next">></span>
<a href="mypage_edit.php" class="navi_txt">회원수정</a>
</div>
<form name="register_edit_form" id="register_edit_form" action="php/register/mypage_edit_ok.php" method="post">
<fieldset>
<legend>회원정보수정 양식 작성</legend>
<p>아이디
<span class="sign">*</span>
<span id="uid"><?php echo $array["uid"] ?></span>
</p>
<p>
<label for="pwd">비밀번호<span class="sign"> *</span></label>
<input type="password" name="pwd" id="pwd">
<span id="pwd_txt"></span>
</p>
<p>
<label for="repwd">비밀번호확인<span class="sign"> *</span></label>
<input type="password" name="repwd" id="repwd">
<span id="repwd_txt"></span>
</p>
<p>이름
<span class="sign">*</span>
<span id="uname"><?php echo $array["uname"] ?></span>
</p>
<p>
<label for="birth">생년월일<span class="sign"> *</span></label>
<input type="text" name="birth" id="birth" placeholder="예) 20200209" value="<?php echo $birth ?>">
<span id="birth_txt"></span>
</p>
<p class="overflow_hidden">
<span>성별<span class="sign"> *</span></span><br>
<?php if($array["gender"] === "M"){ ?>
<input type="radio" name="gender" id="m" value="M" checked>
<?php } else { ?>
<input type="radio" name="gender" id="m" value="M">
<?php } ?>
<label for="m">남자</label>
<?php if($array["gender"] === "W"){ ?>
<input type="radio" name="gender" id="w" value="W" checked>
<?php } else { ?>
<input type="radio" name="gender" id="w" value="W">
<?php } ?>
<label for="w">여자</label>
<span id="gender_txt"></span>
</p>
<p>
<label for="mobile">휴대폰번호<span class="sign"> *</span></label>
<input type="text" name="mobile" id="mobile" placeholder="예) 01012345678" value="<?php echo $array["mobile"] ?>">
<button type="button" id="mobile_check">본인인증</button>
<span id="mobile_txt"></span>
</p>
<p>
<span>SMS수신동의<span class="sign"> *</span></span><br>
<?php if($array["mobile_check"] === "Y"){ ?>
<input type="radio" name="sms_check" id="sms_y" value="Y" checked>
<?php } else { ?>
<input type="radio" name="sms_check" id="sms_y" value="Y">
<?php } ?>
<label for="sms_y">동의</label>
<?php if($array["mobile_check"] === "N"){ ?>
<input type="radio" name="sms_check" id="sms_n" value="N" checked>
<?php } else { ?>
<input type="radio" name="sms_check" id="sms_n" value="N">
<?php } ?>
<label for="sms_n">비동의</label>
<span id="sms_check_txt"></span>
</p>
<p class="email">
<label for="email">이메일<span class="sign"> *</span></label>
<input type="text" name="email" id="email" placeholder="예) test@gmail.com" value="<?php echo $array["email"] ?>">
<span id="email_txt"></span>
</p>
<p class="overflow_hidden">
<span>이메일수신동의<span class="sign"> *</span></span><br>
<?php if($array["email_check"] === "Y"){ ?>
<input type="radio" name="email_check" id="email_y" value="Y" checked>
<?php } else { ?>
<input type="radio" name="email_check" id="email_y" value="Y">
<?php } ?>
<label for="email_y">동의</label>
<?php if($array["email_check"] === "N"){ ?>
<input type="radio" name="email_check" id="email_n" value="N" checked>
<?php } else { ?>
<input type="radio" name="email_check" id="email_n" value="N">
<?php } ?>
<label for="email_n">비동의</label>
<span id="email_check_txt"></span>
</p>
<p>
<span>주소<span class="sign"> *</span></span>
<input type="text" name="address" id="address" value="<?php echo $array["address"] ?>">
<button type="button" id="address_search" onclick="daum_zip_address()">주소검색</button>
<span class="post">우편번호</span>
<input type="text" name="post" id="post" value="<?php echo $array["post"] ?>">
</p>
<p class="address_detail">
<label for="address_detail">상세주소</label>
<input type="text" name="add_detail" id="address_detail" value="<?php echo $array["add_detail"] ?>">
<span id="address_txt"></span>
</p>
<p>
<span>접수구분<span class="sign"> *</span></span><br>
<?php if($array["accept"] === "개인접수"){ ?>
<input type="radio" name="accept" id="individual" value="개인접수" checked>
<?php } else { ?>
<input type="radio" name="accept" id="individual" value="개인접수">
<?php } ?>
<label for="individual">개인접수</label>
<?php if($array["accept"] === "단체접수"){ ?>
<input type="radio" name="accept" id="group" value="단체접수" checked>
<?php } else { ?>
<input type="radio" name="accept" id="group" value="단체접수">
<?php } ?>
<label for="group">단체접수</label>
<span id="accept_txt"></span>
</p>
</fieldset>
<p class="register_btn">
<button type="button" id="btn_edit">회원수정</button>
<button type="button" id="btn_cansle" onclick="javascript:history.back()">취소</button>
</p>
<button type="button" id="btn_del" onclick="reg_del()">회원탈퇴 </button>
</form>
</section>
</main>
<!-- //main -->
<?php include "inc/footer.php"; ?>