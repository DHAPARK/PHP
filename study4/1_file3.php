<?php 
    $result = "";
    $lines = @file("tel.txt") or $result = "파일을 읽을 수 없습니다.";
    /*
    $lines[0] = "김사과,서울 서초구,010-1111-1111";



    <tr>
        <td>1</td>
        <td>김사과</td>
        <td>서울 서초구</td>
        <td>010-1111-1111</td>
    </tr>
    이게 반복된걸 result 에 넣어줘야함
    */
    if($lines != null){
        for($i=0;$i<count($lines);$i++){
            $result .="<tr>";
            $arr = explode(",",$lines[$i]); //김사과,서울 서초구,010-1111-1111
            /*
                $arr[0] = "김사과";
                $arr[1] = "서울 서초구";
                $arr[2] = "010-1111-1111";
            */
            $result .= "<td>".($i+1)."</td>";
            for($j=0;$j<count($arr);$j++){
                $result .= "<td>{$arr[$j]}</td>";
                /*
                    <td>김사과</td>
                    ~서울서초구~
                    ~010-1111-1111~
                */
           
                
            }
            $result .= "</tr>"; 

        }

    }
    /*
        <tr>
            <td>김사과</td>
            <td>서울서초구~~
            ~~~
    */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>파일-3</title>
    <style>
        table {width:600px; border-collapse:collapse;}
        th,td {height:30px; border:1px solid red;}
    </style>
</head>
<body>
    <h2>파일-3</h2>
    <table>
    <tr>
        <th>번호</th>
        <th>이름</th>
        <th>주소</th>
        <th>연락처</th>
    </tr>
    <?=$result?>
</table>
</body>
</html>