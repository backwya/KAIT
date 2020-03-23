<?php 
header("Content-Type: text/html; charset=UTF-8");
session_start();
$sid = isset ($_SESSION["uid"])? $_SESSION["uid"] : "";
?>