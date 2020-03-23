<?php
header("Content-Type: text/html; charset=UTF-8");
session_start();
$sid = isset ($_SESSION["uid"])? $_SESSION["uid"] : "";
if(!$sid){ ?>
<script charset="utf-8">
alert("로그인이 필요합니다! 로그인 화면으로 이동합니다 :D");
location.href="../../login.php";
</script>
<?php }
$pwd = $_POST["pwd"];
$birth = $_POST["birth"];
$birth = mb_substr($birth, 0, 4)."-".mb_substr($birth, 4, 2)."-".mb_substr($birth, 6);
$gender = $_POST["gender"];
$mobile = $_POST["mobile"];
$sms_check = $_POST["sms_check"];
$email = $_POST["email"];
$email_check = $_POST["email_check"];
$address = $_POST["address"];
$post = $_POST["post"];
$add_detail = $_POST["add_detail"];
$accept = $_POST["accept"];
include "../inc/dbcon.php";
$sql = "update members set pwd='$pwd', birth='$birth', gender='$gender', mobile='$mobile', mobile_check='$sms_check', email='$email', email_check='$email_check', address='$address', post='$post', add_detail='$add_detail', accept='$accept' where uid='$sid';";
$result = mysqli_query($dbcon,$sql);
mysqli_close($dbcon);
?>
<script charset="utf-8">
// 일단 페이지 만들기 전에 임시로
alert("회원정보수정이 완료되었습니다 :D");
location.href="../../mypage_edit.php";
</script>