<form method="post" action="sutdent2.php">
            <p><label>수학점수<input type="text"name="math"></label></p>
            <p><label>국어점수<input type="text"name="lan"></label></p>
            <p><label>영어점수<input type="text"name="eng"></label></p>
            <p><label>과학점수<input type="text"name="sin"></label></p>
            <p><label>한문점수<input type="text"name="lan2"></label></p>
            <p><label>제2외국어점수<input                                       type="text"name="lan3"><label></p>

        </form>
</body>

<?php
    $math = $_POST['math'];
    $lan = $_POST['lan'];
    $eng = $_POST['eng'];
    $sin = $_POST['sin'];
    $lan2 = $_POST['lan2'];
    $lan3 = $_POST['lan3'];
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
        $avg = ($math + $lan + $eng + $sin + $lan2 + $lan3)/6;
        if($avg>90){
    ?>
        <script>alert("a입니다.")</script>
        <?php
        }else{
        ?>
        <script>alert("낙제입니다.")</script>
            <?php
        }
            ?>
</body>
</html>