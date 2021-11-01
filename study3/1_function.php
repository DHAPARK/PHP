<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>문자열 함수</title>
</head>
<body>
    <?php
        $str1 = "abcdefg123456";//영문,숫자,특수문자 = 1byte
        $str2 = "한글로 표현한 문자열입니다."; //한글 3byte
        $str3 = "bcdejfdjkalsdfjwklfjsldfjwl.";
        echo strlen($str1)."<br>"; 
        echo strlen($str2)."<br>";
        echo "<br>";
        echo strcmp("abc","ABC")."<br>";
        echo strcmp("2","10")."<br>";
        echo strcmp("2","2")."<br>";
        echo "<br>";
        echo strstr($str3,"c");
        echo strstr($str1,"cd");
        echo "<br>";
        echo "strpos부분<br>";
        echo strpos($str1,"c")."<br>";
        echo strpos($str3,"cd")."<br>";
        echo "<br>";
        echo substr($str1,3)."<br>";
        echo substr($str1,-3)."<br>";
        echo substr($str1,1,5)."<br>";
        echo substr($str1,1,-3)."<br>";
        echo "<br>";
        echo strtolower("Hello,php!")."<br>";
        echo strtoupper("Hello,php!")."<br>";
        echo "<br>";
        $str3 = "Hello,PHP,Hi,World!";
        $arr = explode(",",$str3);
        /*
            $arr[0] = "Hello";
            $arr[1] = "PHP";
            $arr[2] = "HI";
            $arr[3] = "World!";
        */
        foreach($arr as $word){
            echo $word."";
        }
        echo "<br>";
        echo $arr[2];

        echo str_replace("o","*",$str3)."<br>";

        echo substr_replace($str3,"*",-2)."<br>";
        echo substr_replace($str3,"*",2)."<br>";
        echo substr_replace($str3,2,4)."<br>";
    ?>
</body>
</html>