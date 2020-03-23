<?php
header("Content-Type: text/html; charset=UTF-8");
// 데이터 연결하기
include "../inc/dbcon.php";

// 데이터 받아오기
$uid = $_POST["uid"];
$pwd = $_POST["pwd"];
$uname = $_POST["uname"];
$birth = $_POST["birth"];
$birth = mb_substr($birth, 0, 4)."-".mb_substr($birth, 4, 2)."-".mb_substr($birth, 6);
$gender = $_POST["gender"];
$mobile = $_POST["mobile"];
$mobile_check = $_POST["sms_check"];
$email = $_POST["email"];
$email_check = $_POST["email_check"];
$address = $_POST["address"];
$post = $_POST["post"];
$add_detail = $_POST["add_detail"];
$accept = $_POST["accept"];
$reg_date = date("Y-m-d H:i:s");

$sql = "insert into members(uid,pwd,uname,birth,gender,mobile,mobile_check,email,email_check,address,post,add_detail,accept,reg_date) values('$uid', '$pwd', '$uname', '$birth', '$gender','$mobile', '$mobile_check', '$email', '$email_check', '$address', '$post', '$add_detail', '$accept', '$reg_date');";

mysqli_query($dbcon, $sql);

mysqli_close($dbcon);
?>
<script charset="utf-8">
// 일단 페이지 만들기 전에 임시로
alert("회원가입이 완료되었습니다 :D");
location.href="../../register_finish.php";
</script>