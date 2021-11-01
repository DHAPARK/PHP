<?php
    $reslut = "";
    $lines = @file('./8_data.txt') or $result = "파일을 읽을 수 없습니다.";
    //혹시 못읽을수도있는데 여기에 에러를 발생시키지말라는뜻
    /*
    데이터를 제대로 읽어왔으면 
    $lines[0] = "~~~어쩌구"
    $lines[1]= "저쩌구~"
    $lines[2] = "모라구~~"
    
    이런식으로 저장이 된다.
    */


    if($lines != null){
        for($i=0;$i<count($lines);$i++){
            $result .= ($i+1)." : ".$lines[$i]."<br>";
            //1 : 안녕하세요 . php 텍스트 파일 예제입니다
            //2 : 오늘은 토요일입니다.
            //3 : 내일도 수업이 있는데 다들 볼 수 있겠죠?
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>파일-2</title>
</head>
<body>
    <h2>파일-2</h2>
    <p>파일 데이터</p>
    <p><?=$result?></p>
</body>
</html>