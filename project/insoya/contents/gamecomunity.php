<?php
    session_start();
    include "../include/dbconn.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>메이플인소야</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link href="../insoya.css/공용csstest.css" rel="stylesheet" type="text/css">

    


</head>
<body>
    <!--body바디시작-->
    <div id=container>
    <!-- 메뉴바들이 있는 헤더시작 -->
    <header>
        <!-- 인소야닷컴,게임정보,메이플커뮤니티,등등은 headerMenu로 작성 그 안은 li로 정렬 -->
        <div id="headerMenu">
            <!-- ul과 li로 윗처럼 목록작성 -->
            <ul>
                <li> <a href="../index/index.php">메이플스토리인소야닷컴어쩌구</a></li>
                <li> <a href="./gameinfo.php">게임정보</a></li>
                <li> <a href="./gamecomunity.php">메이플 커뮤니티</a></li>
                <li> <a herf="#">메이플스토리2</a></li>
                <!-- 얘혼자 광고 -->
            </ul>
        </div>
    </header>
<!-- 메뉴바들이 위치해있는 헤더 끝 -->
<!-- 메뉴바 밑에있는 메이플토크 부터 메이플동영상 메뉴바시작-->
    <div id="headerunderMenu">
        <ul>
            <li> <a href="#">메이플토크</a></li>
            <li> <a href="#">직업별토크</a></li>
            <li> <a href="#">정보나눔터</a></li>
            <li> <a href="#">직업별스킬</a></li>
            <li> <a href="../secondMenu/QNA.php">집문답변/시세질문</a></li>
            <li> <a href="#">메이플동영상</a></li>
            <li> <a href="#">버그악용/불법프로그램신고</a></li>
        </ul>  
        
    </div>
<!--메뉴바 밑에있는 메이플토크부터 메이플동영상 메뉴바---->
   

<!--로그인메뉴바 시작-->
    <div id="loginMenuBar">

        <!--로그인메뉴바의 잡메뉴 홍보등등 들 다른메뉴들 시작-->
        <div id="SomeMenu">
        <ul>
            <li><a href="#">예비메뉴</a></li>
        </ul>
        </div>
        <!--로그인메뉴바의 잡메뉴 홍보등등 들 다른메뉴들 끝-->
        
        <!--진짜 로그인메뉴들 시작-->
        <div id="logInOut">
        <?php
    if(!isset($_SESSION['id']))
    {
?>
        <ul>
            <li><a href="../php_FILE/login.php">로그인</a></li>
            <li> &nbsp; | &nbsp; </li>
            <li><a href="../php_FILE/regist.php">회원가입</a></li>
            
        </ul>
    <?php
    }else{
    ?>
    <ul>
    <li><a href="../php_FILE/logout.php">로그아웃</a></li>
    </ul>
    <?php
    }
    ?>
        </div>
        <!--진짜 로그인메뉴들 끝-->
        

        <!-- 여기부터 커뮤니티 내용채울 게시판 제작 -->
        <!-- css미제작 -->
        <div id="Comunity_List">

        

        </div>



        <!-- 여기부터 커뮤니티 내용채울 게시판 끝 -->




    </div>
<!--로그인메뉴바 끝-->