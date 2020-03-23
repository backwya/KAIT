<?php
header("Content-Type: text/html; charset=UTF-8");
session_start();
$notice_no = isset($_SESSION['notice_no'])? $_SESSION['notice_no']:"";

$sql = "delete from notice_board where notice_no='$notice_no';";

include "../inc/dbcon.php";

mysqli_query($dbcon,$sql);

mysqli_close($dbcon);

unset($_SESSION['notice_no']);
?>
<script charset="utf-8">
alert("게시글이 삭제되었습니다 :(");
	location.href="../../service_notice.php";
</script>