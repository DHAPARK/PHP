

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>쿠키-2</title>
</head>
<body>
    <h2>쿠기 -2</h2>
    <?php
        if(!isset($_COOKIE["userid"])){//쿠키가 존재하지 않을떄 내려감
            echo("쿠키가 존재하지 않습니다.");
        }else{
            echo("쿠키가 존재합니다.</br>");
            echo("저장된 쿠키의 값은 ".$_COOKIE["userid"]."입니다.");
            
        }
    ?>
</body>
</html>