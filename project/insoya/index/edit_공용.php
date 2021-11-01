<?php
    session_start();
    include "../include/dbconn.php";
 
    $b_idx = $_GET['b_idx'];
    $sql = "select b_idx,b_userid,b_name,b_title,b_content,b_hit,b_regdate from tb_insoya_board order by b_idx";

    $result = mysqli_query($conn,$sql);

    $sql = "select b_idx,b_userid,b_name,b_title,b_hit,b_regdate,b_content,b_file from tb_insoya_board where b_idx=$b_idx";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);

    $b_userid = $row['b_userid'];
    $b_name = $row['b_name'];
    $b_title = $row['b_title'];
    $b_hit = $row['b_hit'];
    $b_regdate = $row['b_regdate'];
    $b_content = $row['b_content'];
    $b_file = $row['b_file'];

    $imgpath = "";
    if($b_file != ""){
        $imgpath = "<img src='".$b_file."' alt='이미지'>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>메이플인소야</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link href="../insoya.css/insoyatest.css?after" rel="stylesheet" type="text/css">
    <!-- 로그인 x 는 로그인 권장메세지 후 index로 이동 -->
    <?php
        if(!isset($_SESSION['id'])){
    ?>


    <script>
        alert("로그인을 해주세요.");
        location.href="../php_FILE/login.php";
    </script>
    <?php
        }
    ?>
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
                <li> <a href="index.php">메이플스토리인소야닷컴어쩌구</a></li>
                <li> <a href="./contents/gameinfo.php">게임정보</a></li>
                <li> <a href="./contents/gamecomunity.php">메이플 커뮤니티</a></li>
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
        


    </div>
<!--로그인메뉴바 끝-->



<!--컨테이너 내부 모든 내용들 시작-->
<div id="contentsInContainer">
    <!-- 글수정 form 시작 -->
<form method="post" action="edit_ok_공용.php"enctype="multipart/form-data">
    <input type="hidden" name="b_idx" value="<?=$b_idx?>">
    <p><label>아이디 : <?=$_SESSION['id']?>(<?=$_SESSION['name']?>)</label></p>
    <p><label>제목 : <input type="text" name="b_title" value="<?=$b_title?>"></label></p>
    <p>내용</p>
    <p><textarea cols="170" rows="20" name="b_content"><?=$b_content?></textarea></p>
    <p><input type="file"name="b_file"></p>
    <p><?=$imgpath?></p>
    <p><input type="submit" value="확인"><input type="reset" value="다시작성">
    <input type="button" value="리스트" onclick="location.href='./board_공용.php'">
</p>
</form>
<!-- 글수정 form끝 -->
</div>
<!--컨테이너 내부 모든 내용들 끝-->


</div>  
<!--컨테이너 끝-->  























</body>
<!--body바디끝-->



</html>

<!--메뉴바 밑에있는 메이플토크 부터 메이플동영상 메뉴바 끝--body끝>

