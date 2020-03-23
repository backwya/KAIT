<?php
// DB 연결
include "../inc/dbcon.php";
// ajax 값 받아오기!
$uid = $_POST['uid'];
// 쿼리 작성
$sql = "select * from members where uid='{$uid}';";

$result = mysqli_query($dbcon, $sql);
$res = mysqli_num_rows($result);
// 행이 있으면 bad 없으면 good :>
if($res == 1){
    echo json_encode(array('res'=>'bad'));
} else {
    echo json_encode(array('res'=>'good'));
}
?>