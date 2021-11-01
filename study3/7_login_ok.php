<?php
    session_start();

    $userid = $_POST['userid'];
    $userpw = $_POST['userpw'];

    // 아이디:admin,비밀번호 :1234
    if($userid == "admin" && $userpw == "1234"){
       $_SESSION['id'] = $userid;
       
        echo "<script>alert('로그인되었습니다.');location.href='7_login.php';<scrript>";
    }else{//아이디 또는 비밀번호가 틀리다면
        echo "<script>alert('아이디 또는 비밀번호를 확인하세요.'); history.back();</script>";
    }
?>