<?php
    
    include "./include/dbconn.php";
    $mem_idx = $_SESSION['idx'];
    $sql = "select * from tb_member where mem_idx = $mem_idx"; // *를 컬럼이름으로 바까야함 속도상으로 그게 더 빠르다.
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    $row['mem_idx'];


    //회원정보 뽑기
    $userid = $row['mem_userid'];
    $name = $row['mem_name'];
    $hp = $row['mem_hp'];
    $email = $row['mem_email'];
    $hobby = $row['mem_hobby']; //드라이브 쇼핑
    $hobbyArr = explode(" ", $hobby);
    $ssn1 = $row['mem_ssn1'];
    $ssn2 = $row['mem_ssn2'];
    $zipcode = $row['mem_zipcode'];
    $address1 = $row['mem_address1'];
    $address2 = $row['mem_address2'];
    $address3 = $row['mem_address3'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원정보수정</title>
    <script src="https://t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
    <script src="./js/member.js"></script>
</head>
<body>
    <h2>회원정보 수정</h2>
    <form name="regform" id="regform" method="post" action="./info_ok.php" onsubmit="return sendit()">
        <input type="hidden" name="isSsn" id="isSsn" value="false">
        <p><label>아이디 : <input type="text" name="userid" id="userid" maxlength="20" value="<?=$userid?>"readonly></label></p>
        <p><label>비밀번호 : <input type="password" name="userpw" id="userpw" maxlength="20"></label></p>
        <p><label>비밀번호 확인 : <input type="password" name="userpw_re" id="userpw_re" maxlength="20"></label></p>
        <p><label>이름 : <input type="text" name="username" id="username"value="<?=$name?>"></label></p>
        <p><label>휴대폰 번호 : <input type="text" name="hp" id="hp"value="<?=$hp?>"></label>('-' 을 포함)</p>
        <p><label>이메일 : <input type="text" name="email" id="email" value="<?=$email?>"></label></p>
        <p>취미 : <label>드라이브<input type="checkbox" name="hobby[]" value="드라이브"
        <?php
            if(in_array("드라이브",$hobbyArr)){echo "checked";}
        ?>></label> <label>등산<input type="checkbox" name="hobby[]" value="등산"
        <?php
            if(in_array("등산",$hobbyArr)){echo "checked";}
        ?>
        ></label> <label>영화감상<input type="checkbox" name="hobby[]" value="영화감상"
        <?php
            if(in_array("영화감상",$hobbyArr)){echo "checked";}
        ?>
        ></label> <label>쇼핑<input type="checkbox" name="hobby[]" value="쇼핑" 
        <?php
            if(in_array("드라이브",$hobbyArr)){echo "checked";}
        ?>>
        </label> <label>게임<input type="checkbox" name="hobby[]" value="게임"
        <?php
            if(in_array("드라이브",$hobbyArr)){echo "checked";}
        ?>>
        </label></p>
        <p>주민등록번호 : <input type="text" name="ssn1" id="ssn1" maxlength="6" onkeyup="moveFocus()"value="<?=$ssn1?>"> - <input type="password" name="ssn2" id="ssn2" maxlength="7"value="<?=$ssn2?>"> <input type="button" value="주민등록번호 검증" onclick="ssnCheck()"></p>
        <p>우편번호 : <input type="text" name="zipcode" id="sample6_postcode"value="<?=$zipcode?>"> <input type="button" value="우편번호 검색" onclick="sample6_execDaumPostcode()"></p>
        <p><label>주소 : <input type="text" name="address1" id="sample6_address" value="<?=$address1?>"></label></p>
        <p><label>상세주소 : <input type="text" name="address2" id="sample6_detailAddress"value="<?=$address2?>"></label></p>
        <p><label>참고항목 : <input type="text" name="address3" id="sample6_extraAddress"value="<?=$address3?>"></label></p>
        <p><input type="submit" value="수정완료"> <input type="reset" value="다시작성"></p>
    </form>
</body>
</html>