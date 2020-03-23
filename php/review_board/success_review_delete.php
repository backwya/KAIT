<?php
header("Content-Type: text/html; charset=UTF-8");
session_start();
$review_no = isset($_SESSION['review_no'])? $_SESSION['review_no']:"";

$comment = "delete from review_comment where review_no='$review_no';"
$sql = "delete from review_board where review_no='$review_no';";
include "../inc/dbcon.php";
mysqli_query($dbcon, $comment);
mysqli_query($dbcon, $sql);
mysqli_close($dbcon);
unset($_SESSION["review_no"]);
?>
<script charset="utf-8">
alert("게시글이 삭제되었습니다 :(");
location.href="../../success_review.php";
</script>