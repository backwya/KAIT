<?php
session_start();
$sid = isset ($_SESSION["uid"])? $_SESSION["uid"] : "";
// 입력한 비밀번호 값
$check_pwd = $_POST["check_pwd"];
include "../inc/dbcon.php";
// 로그인 된 사용자의 비밀번호 검색
$sql = "select * from members where uid='$sid';";
$result = mysqli_query($dbcon,$sql);
$array = mysqli_fetch_array($result);
$pwd = $array["pwd"];
if($pwd == $check_pwd){ ?>
    <script>
location.href="../../mypage_edit.php";
</script>
<?php } else { ?>
    <script charset="utf-8">
alert("비밀번호를 다시 확인해주세요 :)");
history.back();
</script>
<?php }; ?>