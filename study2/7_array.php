

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>배열</h2>
    <?php
    $student = array("김사과","오렌지","반하나","이메론");
    foreach($student as $name){
        echo "배열의 현재 값은 {$name}입니다.<br>";
    }

    ?>
</body>
</html>