<?php
header("Content-Type: text/html; charset=UTF-8");
session_start();
$notice_no = ($_SESSION["notice_no"])? $_SESSION["notice_no"]:"";

$notice_name = $_POST["notice_name"];
$notice_content = $_POST["notice_content"];

include "../inc/dbcon.php";

$sql = "update notice_board set notice_title='$notice_name' ,notice_content='$notice_content' where notice_no='$notice_no';";

mysqli_query($dbcon,$sql);
mysqli_close($dbcon);
?>
<script charset="utf-8">
alert("작성하신 글이 수정되었습니다 :D");
	location.href="../../service_notice_view.php?notice_no=<?php echo $notice_no ?>";
</script>