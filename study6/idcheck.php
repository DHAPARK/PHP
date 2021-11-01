<?php
    include "./include/dbconn.php";

    $mem_userid = $_GET['userid'];

    if(!$conn){
        echo "Y"; // DB가 연결이 안됬을떄랑 , 중복 아이디가 존재해서 못만듭니다 라는뜻.
    }else{
        $sql = "select mem_idx from tb_member where mem_userid = '$mem_userid'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
        if($row['mem_idx']){
            echo "Y"; //아이디 있음 -> 아이디를 만들 수 없음
        }else{
            echo "N"; //아이디 없음 -> 아이디를 만들 수 있음
        }
    }
?>