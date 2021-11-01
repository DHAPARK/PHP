<?php
    include "./include/dbconn.php";

    $userid = $_POST['userid'];
    $userpw = $_POST['userpw'];
    $username = $_POST['username'];
    $hp = $_POST['hp'];
    $email = $_POST['email'];
    $hobby = $_POST['hobby'];
    $hobby_str = "";
    // 드라이브 등산 영화감상 쇼핑 게임
    // 등산 영화감상
    if(in_array("드라이브", $hobby)){
        $hobby_str .= "드라이브 ";
    }
    if(in_array("등산", $hobby)){
        $hobby_str .= "등산 ";
    }
    if(in_array("영화감상", $hobby)){
        $hobby_str .= "영화감상 ";
    }
    if(in_array("쇼핑", $hobby)){
        $hobby_str .= "쇼핑 ";
    }
    if(in_array("게임", $hobby)){
        $hobby_str .= "게임 ";
    }


    $ssn1 = $_POST['ssn1'];
    $ssn2 = $_POST['ssn2'];
    $zipcode = $_POST['zipcode'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $address3 = $_POST['address3'];

    if(!$conn){
        echo "DB연결 실패!";
    }else{
        $sql = "INSERT INTO tb_member (mem_userid, mem_userpw, mem_name, mem_hp, mem_email, mem_hobby, mem_ssn1, mem_ssn2, mem_zipcode, mem_address1, mem_address2, mem_address3) VALUES ('$userid', '$userpw', '$username', '$hp', '$email', '$hobby_str', '$ssn1', '$ssn2', '$zipcode', '$address1', '$address2', '$address3')";
        //echo($sql);
        $result = mysqli_query($conn, $sql);
        echo "<script>alert('회원가입 성공!'); location.href='login.php';</script>";
    }
?>