<?php
    $id = $_GET["userid"]; //apple이라면 이게 $id에 드간다<div class=""></div>
    $pw = $_GET["userpw"];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get</title>
</head>
<body>
    <h2>get</h2>
    <p>입력한 아이디의 값<?=$id?></p>
    <p>입력한 비밀번호의 값<?=$pw?></p>
</body>
</html>