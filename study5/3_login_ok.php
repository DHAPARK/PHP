<?php
    $userid = $_POST['userid'];
    $userpw = $_POST['userpw'];

    // 아이디:admin,비밀번호 :1234
    if($userid == "admin" && $userpw == "1234"){
        setcookie("id",$userid,time()+(60*60*24),"/"); //24시간 현재폴더에 유지
        //아이디와 비밀번호가 모두 맞다면
        echo "<script>alert('로그인되었습니다.');location.href='4_login.php';</script>";
    }else{//아이디 또는 비밀번호가 틀리다면
        echo "<script>alert('아이디 또는 비밀번호를 확인하세요.'); history.back();</script>";
    }
?>