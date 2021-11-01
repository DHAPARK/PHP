<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>상수</title>
</head>
<body>
    <h2>상수</h2>
    <?php
        define("userid","apple"); // 구분 false -> 대소문자를 구분
        echo userid."<br>";
        echo USERID."<br>";
        define("name","김사과",true);//구분 true ->대소문자를 구분하지 않음
        echo name."<br>";
        echo NAME."<br>";
        

    ?>
</body>
</html>