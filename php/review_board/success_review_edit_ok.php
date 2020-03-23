<?php
header("Content-Type: text/html; charset=UTF-8");
session_start();
$review_no = ($_SESSION["review_no"])? $_SESSION["review_no"]:"";

$review_name = $_POST["review_name"];
$review_content = $_POST["review_content"];

include "../inc/dbcon.php";

$sql = "update review_board set review_title='$review_name', review_content='$review_content' where review_no='$review_no';";

mysqli_query($dbcon,$sql);
mysqli_close($dbcon);
?>
<script charset="utf-8">
alert("작성하신 글이 수정되었습니다 :D");
	location.href="../../success_review_view.php?review_no=<?php echo $review_no ?>";
</script>