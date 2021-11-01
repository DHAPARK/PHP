<?php

    $userid = $_POST['userid'];
    $userpw = $_POST['userpw'];


    // 아이디 :admin ,비밀번호 :1234
    if($userid=="admin" && $userpw =="1234"){
?>
    <script>
        alert('로그인 되었습니다.');
    </script>
<?php
    }else{
?>
    <script>
        alert('아이디 또는 비밀번호를 확인해주세요');
        history.back();
    </script>

<?php
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>
</head>
<body>
    <h2>로그인</h2>
    <p><?=$userid?></b>님 환영합니다.</p>

</body>
</html>