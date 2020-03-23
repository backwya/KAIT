<?php
header("Content-Type: text/html; charset=UTF-8");
// 로그인 상태 유지 (모든 페이지)
session_start();

include "../inc/dbcon.php";

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "select * from members where uid='$uid';";

$result = mysqli_query($dbcon, $sql);

$array = mysqli_fetch_array($result);

// 아이디가 존재하지 않는다면 = empty set = null
if(!$array["uid"]){
echo "<script>
alert('일치하는 아이디가 없습니다 :(');
history.back();
</script>";
}

// 아이디는 존재하지만 비밀번호가 다른 경우
if($array["uid"]){
if($array["pwd"] != $pwd){
echo "<script>
alert('비밀번호가 일치하지 않습니다 :(');
history.back();
</script>";
};
}

// 세션 변수
$_SESSION["uid"] = $array["uid"];

mysqli_close($dbcon);
?>
<script charset="utf-8">
location.href='../../index.php';
</script>