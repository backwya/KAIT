<?php
include "../inc/session.php";
include "../inc/dbcon.php";

$review_name = $_POST["review_name"];
$review_name = addslashes($review_name);
$review_content = $_POST["review_content"];
$review_content = addslashes($review_content);
$review_date = date("Y-m-d H:i:s");

$sql = "insert into review_board(review_title, review_content, review_uid, review_date, review_view) values('$review_name','$review_content','$sid','$review_date','0');";
$result = mysqli_query($dbcon, $sql);

if($result){
$review_no = mysqli_insert_id($dbcon); ?>
<script charset="utf-8">
alert("작성하신 글이 등록되었습니다 :D");
location.href="../../success_review_view.php?review_no=<?php echo $review_no ?>";
</script>
<?php } else { ?>
<script charset="utf-8">
alert("작성하신 글을 등록하지 못했습니다 ㅑ(");
history.back();
</script>
<?php };
mysqli_close($dbcon);
?>