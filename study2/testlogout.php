<?php
    setcookie("userid","apple",time()-1,'/');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        alert("로그아웃 되셨습니다.");
        location.href="testlogin.php";
    </script>
</body>
</html>