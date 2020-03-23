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
include "../inc/dbcon.php";
$sql ="delete from members where uid='$sid';";
mysqli_query($dbcon,$sql);
mysqli_close($dbcon);
unset($_SESSION["uid"]);
?>
<script charset="utf-8">
alert("회원탈퇴가 완료되었습니다 :>");
	location.href="../../index.php";
</script>