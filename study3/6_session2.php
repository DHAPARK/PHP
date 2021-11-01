<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>세션 - 2</title>
</head>
<body>
     <h2>세션 -1</h2>
    <p>세션 id : <?=session_id()?></p>
    <p>id변수 값: <?=$_SESSION['id']?>
    <p>name변수 값: <?=$_SESSION['name']?>
</body>
</html>