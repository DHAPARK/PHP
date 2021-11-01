

    
<?php
    //ip , 아이디 ,비밀번호, DB명
    $conn = mysqli_connect("localhost","root","1234","phpstudy")or die("데이터 베이스 연결 실패!");

    if(!$conn){
        echo("연결실패");
    }else{
        echo("연결 성공!");
    }
?>