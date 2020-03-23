<?php
header("Content-Type: text/html; charset=UTF-8");
session_start();
$comment_no = isset($_GET['comment_no'])? $_GET['comment_no']:"";
echo $comment_no;
$review_no = isset($_SESSION['review_no'])? $_SESSION['review_no']:"";

include "../inc/dbcon.php";
$sql = "delete from review_comment where comment_no='$comment_no';";
mysqli_query($dbcon, $sql);
?>
<script charset="utf-8">
alert("댓글이 삭제되었습니다 :(");
location.href="../../success_review_view.php?review_no=<?php echo $review_no ?>";
</script>