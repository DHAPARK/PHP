<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>변수 - 2</title>
</head>
<body>
    <h2>변수 - 2</h2>
    <?php 
        $num1 = 10;//전역변수
        function func1(){
        
            $num2 = 5;//지역변수
            $num3 = 0;
            static $num3 = 0;

            
            
            global $num1; //전역변수 선언
            echo "함수 밖에서 호출한 지역변수 num2의 값은 {$num1}입니다.";
            $num2++;
            $num3++;
            echo "함수 안에서 호출한 지역변수 num2의 값은 {$num2}입니다.";
            echo "함수 밖에서 선언된 static변수 num3의 값은 {$num3}입니다.<br>";
        }
        func1();
        echo "함수 밖에서 호출한 전역변수 num1의 값은 {$num1}입니다.<br>";
        func1();
        func1();
        
    ?>
</body>
</html>