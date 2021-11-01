<?php
    $userid = $_POST["userid"];
    $userpw = $_POST["userpw"];
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
        if($userid=="admin" && $userpw=="1234"){
            setcookie("id",$userid,time()+(60*60*24),'/');
            echo "<script>alert('로그인되었습니다.');location.href='test.php';</script>";
        }else{
            echo "<script>alert('다시입력하세요.');history.back();</script>";
        }

    ?>
</body>
</html>
