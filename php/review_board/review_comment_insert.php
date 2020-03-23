<?php
header("Content-Type: text/html; charset=UTF-8");
session_start();
$review_no = isset($_SESSION['review_no'])? $_SESSION['review_no']:"";

include "../inc/session.php";
include "../inc/dbcon.php";

$comment = $_POST["comment"];
$comment_date = date("Y-m-d H:i:s");

$sql = "insert into review_comment(comment_content, review_no, comment_uid, comment_date) values('$comment', $review_no ,'$sid', '$comment_date');";
echo $sql;
$result = mysqli_query($dbcon, $sql);

if($result){ 
$comment_no = mysqli_insert_id($dbcon); ?>
<script charset="utf-8">
alert("작성하신 댓글이 등록되었습니다 :D");
location.href="../../success_review_view.php?review_no=<?php echo $review_no ?>";
</script>
<?php } else { ?>
<script charset="utf-8">
alert("작성하신 댓글을 등록하지 못했습니다 ㅑ(");
history.back();
</script>
<?php };
mysqli_close($dbcon);
?>