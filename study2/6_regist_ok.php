<?php
    $userid = $_POST['userid'];
    $userpw = $_POST['userpw'];
    $username = $_POST['username'];
    $hp = $_POST['hp'];
    $email = $_POST['email'];
    $hobby = $_POST['hobby'];
    $hobby_str = "";
    //드라이브 등산 영화감상 쇼핑 게임 
    //체크박스에서 체크한게 넘어오면 물어본다
    //넘어온 배열중에 ~~가있니??하면서 밑이 if문이 그 의미
    //hobby_str을 처음에 초깃값으로 준 이유는 넘어온값을
    //if문으로 판단하고 있다면 이어붙일려고
    if(in_array("드라이브",$hobby)){
        $hobby_str .= "드라이브 ";
    }if(in_array("등산",$hobby)){
        $hobby_str .="등산";
    }if(in_array("영화감상",$hobby)){
        $hobby_str .="영화감상";
    }if(in_array("쇼핑",$hobby)){
        $hobby_str .="쇼핑";
    }if(in_array("게임",$hobby)){
        $hobby_str .="쇼핑";
    }


    $ssn1 = $_POST['ssn1'];
    $ssn2 = $_POST['ssn2'];
    $zipcode = $_POST['zipcode'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $address3 = $_POST['address3'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입 완료</title>
</head>
<body>
    <h2>회원가입 완료</h2>
    <p>아이디 : <?=$userid?></p>
    <p>비밀번호 :<?=$userpw?> </p>
    <p>이름 : <?=$username?></p>
    <p>휴대폰번호 : <?=$hp?></p>
    <p>이메일 : <?=$email?></p>
    <p>취미 : <?=$hobby_str?></p>
    <p>주민등록번호 : <?=$ssn1?>-<?=$ssn2?></p>
    <p>우편번호 : <?=$zipcode?></p>
    <p>주소 : <?=$address1?></p>
    <p>상세주소 : <?=$address2?></p>
    <p>참고항목 : <?=$address3?></p>
</body>
</html>