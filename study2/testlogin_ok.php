<?php
    
    $userid = $_POST['userid'];
    $userpw = $_POST['userpw'];
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
        if($userid == "admin" && $userpw == "1234"){
            setcookie("userid","apple",time()+(60*60*24),'/');
        
    ?>
        <script>

            alert("로그인에 성공하셨습니다.");
            location.href = "testlogin.php";
        </script>

    <?php
        }else{
    ?>
        <script>
            alert("다시 입력하세요.");
            history.back();
        </script>

    <?php
        }
    ?>
</body>
</html>