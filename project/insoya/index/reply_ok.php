<?php
    session_start();
    include "../include/dbconn.php";

    $re_userid = $_SESSION['id'];
    $re_name = $_SESSION['name'];
    $re_content = $_POST['re_content'];
    $re_boardidx = $_POST['re_boardidx'];
    $sql = "insert into tb_insoya_reply (re_userid,re_name,re_content,re_boardidx)
    value ('$re_userid','$re_name','$re_content',$re_boardidx);
    ";
    $result = mysqli_query($conn,$sql);
    echo "<script>alert('등록되었습니다.');location.href='./view_공용.php?b_idx=".$re_boardidx."';</script>";
?>