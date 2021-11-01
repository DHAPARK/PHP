<?php
    $hakbun = $_POST['hakbun'];
    $name = $_POST['name'];
    $kor = $_POST['kor'];
    $math = $_POST['math'];
    $eng = $_POST['eng'];

    $total = $kor + $math + $eng;
    //php는 연결연산자가 .이기떄문에 + 를쓰면 그냥 더하는거로 알아듣는다<div class=""></div>

    $avg = $total /3;


    $hak = "";
    if($avg >= 90){
        $hak = "A학점";

    }else if($avg >= 80){
        $hak = "B학점";
    }else if($avg >= 70){
        $hak = "C학점";
    }else if($avg >= 60){
        $hak = "D학점";
    }else{
        $hak = "F학점";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>학생관리  프로그램</title>
</head>
<body>
    <h2>학생관리 프로그램</h2>
    <p>학번: <?=$hakbun?></p>
    <p>이름: <?=$name?></p>
    <p>국어점수: <?=$kor?></p>
    <p>수학점수: <?=$math?></p>
    <p>영어점수: <?=$eng?></p>
    <p>총점: <?=$total?></p>
    <p>평균: <?=$avg?></p>
    <p>학점: <?=$hak?></p>
</body>
</html>