<?php
    include "./include/dbconn.php";

    




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
        $mem_idx = $_SESSION['idx'];
        $sql = "select mem_userpw from tb_member where mem_idx = $mem_idx;";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        $mem_userpw = $row['mem_userpw']; //DB에서 가져온 기존 비밀번호 이걸보면 
        //MYSQLI_FETCH_ARRAY메서드로 배열로 담가버릴때 COLUMN이 INDEX가 되는듯 그래서 INDEX번호가
        //COLUMN명이 되서 저렇게 출력하는듯 $ROW['MEM_USERPW']; 처럼
        if($userpw != $mem_userpw){
            echo "<script>alert('비밀번호를 확인하세요'); history.back()</script>";    
        }else{
            $sql = "UPDATE tb_member set mem_name='$username', mem_hp='$hp',mem_email='$email',mem_hobby='$hobby_str',mem_ssn1='$ssn1',mem_ssn2='$ssn2',mem_zipcode='$zipcode',mem_address1='$address1',mem_address2='$address2',mem_address3='$address3' where mem_idx=$mem_idx;";
            //echo($sql);
            $result = mysqli_query($conn, $sql);
            echo "<script>alert('정보수정 성공!'); location.href='./info.php';</script>";
            
        }


        $sql = "";
        //echo($sql);
        $result = mysqli_query($conn, $sql);
        echo "<script>alert('정보수정 성공!'); location.href='./info.php';</script>";
    }
?>