<?php
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if(!isset($_COOKIE['userid'])){
    ?>
    <form method="post"action="testlogin_ok.php">
    <p><label>아이디<input type="text" name="userid"></label></p>
    <p><label>비밀번호<input type="password" name="userpw"></label></p>
    <p><button type="submit"value="로그인"></p>
    </form>
    <?php
        }else{
    ?>

    <p><a href="testlogout.php">로그아웃</a></p>
    
    <?php
        }
    ?>
</body>
</html>