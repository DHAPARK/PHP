<?php
    $userid = "apple";
    $name = "김사과";
    $age = 20;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>변수 - 1</title>
</head>
<body>
    <h2>변수 -1</h2>
    <p>아이디 : 
    <?php echo($userid);?>
    </p>
    <p>이름:<?=$name?></p>
    
        <?php echo"<p>나이 : {$age}</p>";?>
    
    <!-- 메모장에 다 적혀있음  -->
</body>
</html>