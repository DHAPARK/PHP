

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>함수</title>
</head>
<body>
    <h2>함수</h2>
    <?php
        function hello(){
            echo "hello php!<br>";
        }

        function sum($x,$y){
            echo ($x."+".$y." = ".($x+$y)."<br>");
        }

        function mul($x,$y){
            return $x*$y;
        }
        ?>

    <?php
        hello();
        sum(10,5);
        $result = mul(10,5);
        echo "10+5 = ".$result."<br>";
    ?>
</body>
</html>