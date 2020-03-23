<?php
header("Content-Type: text/html; charset=UTF-8");
include "../inc/dbcon.php";

$notice_name = $_POST["notice_name"];
$notice_name = addslashes($notice_name);
$notice_content = $_POST["notice_content"];
$notice_content = addslashes($notice_content);
$notice_date = date("Y-m-d H:i:s");

$sql = "insert into notice_board(notice_title,notice_content,notice_date,notice_view) values('$notice_name','$notice_content','$notice_date','0');";

$result = mysqli_query($dbcon,$sql);

// get으로 번호 보내기
if($result){
$notice_no = mysqli_insert_id($dbcon); ?>
<script charset="utf-8">
alert("작성하신 글이 등록되었습니다 ;D");
	location.href="../../service_notice_view.php?notice_no=<?php echo $notice_no ?>";
</script>
<?php } else { ?>
<script charset="utf-8">
alert("작성하신 글을 등록하지 못했습니다 ㅑ(");
	history.back();
</script>
<?php };
mysqli_close($dbcon);
?>