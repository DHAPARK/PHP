<?php
    $fs = "";
    $fs = @fopen("tel.txt","r") or exit("BREAK");
    //or exit는 프로그램을 종료해라 라는뜻 못읽었을때
    $result ="";
    while(!feof($fs)){ //feof():파일의 끝을 확인하는 함수
        $result .=fgets($fs,10); //10bytes씩 읽어옴,2번째 매개변수를 적지않으면 1줄씩 읽어온다.
    }
    fclose($fs);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>파일 -4</title>
</head>
<body>
    <h2>파일 -4 </h2>
    <p> <?=$result?> </p>
</body>
</html>