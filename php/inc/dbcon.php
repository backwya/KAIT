<?php
    // 데이터베이스 연결
    // $dbcon = mysqli_connect("host", "아이디", "비밀번호") or die("접속실패 메세지");
    $dbcon = mysqli_connect("localhost", "root", "") or die("DB 접속에 실패하였습니다 :<");
    
    // DB 선택
    // mysqli_select_db(연결객체, "DB명");
    mysqli_select_db($dbcon, "testdb");

    // 문자셋 설정
    // mysqli_set_charset(연결객체, 문자셋);
    mysqli_set_charset($dbcon, "utf8");
?>