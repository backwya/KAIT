<?php
header("Content-Type: text/html; charset=UTF-8");
session_start();
// 세션 삭제
unset($_SESSION["uid"]);
?>
<script charset="utf-8">
alert("로그아웃 되었습니다 :D");
location.href="../../index.php";
</script>