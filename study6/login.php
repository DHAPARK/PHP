<?php
   include "./include/dbconn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>
</head>
<body>
    <h2>로그인</h2>
<?php
    if(!isset($_SESSION['id'])){
?>
    <form method="post" action="login_ok.php">
        <p><label>아이디 : <input type="text" name="userid"></label></p>
        <p><label>비밀번호 : <input type="password" name="userpw"></label></p>
        <p><input type="submit" value="로그인">  <input type="button" value="회원가입" onclick=
        "location.href='./regist.php'"></p>
    </form>
<?php
    }else{
?>
        <p><?=$_SESSION['id']?>(<?=$_SESSION['name']?>)님 환영합니다.</p>
        <p>회원번호 : <?=$_SESSION['idx']?></p>
        <p><input type="button" value="로그아웃" onclick="location.href='./logout.php'"></p>
        <p><input type="button" value="정보수정" onclick="location.href='./info.php'"></p>
        <p><input type="button" value="게시판 리스트" onclick="location.href='./board/list.php'"></p>
<?php
    }
?>
</body>
</html>