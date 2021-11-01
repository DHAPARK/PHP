<?php
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>쿠키를 이용한 로그인</title>
</head>
<body>


    <h2>쿠키를 이용한 로그인</h2>
    
    
    <?php
        if(!isset($_COOKIE['id'])){    
    ?>

    <form method="post" action="4_login_ok.php">
        <p><label>아이디: <input type="text" name="userid"></label></p>
        <p><label>비밀번호: <input type="password" name="userpw"></label></p>
        <p><input type="submit" value="로그인"></p>
    </form>
        <?php
        }else{
            ?>
            <p><?=$_COOKIE['id']?>님 환영합니다.</p>
            <p><a href="4_logout.php">로그아웃</php>

        <?php
        }
        ?>

</body>
</html>