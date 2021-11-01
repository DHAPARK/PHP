<?php
    // session_start();
    // include "../include/dbconn.php";
 
 
    // $sql = "select b_idx,b_userid,b_name,b_title,b_content,b_hit,b_regdate from tb_insoya_board order by b_idx";

    // $result = mysqli_query($conn,$sql);
    //원본
    
    session_start();
    include "../include/dbconn.php";
 
 
    
    //페이징 처리를위한 전체 게시물 수를세기위한 sql
    $sql = "select count(b_idx) as totcnt from tb_insoya_board";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    
    $totcnt = $row['totcnt']; //전체 글갯수 토탈cnt?
    $pagePerCount = 20;
    $start =0;
    $pagenum = 1;


    if(isset($_GET['pagenum'])){
        $pagenum = $_GET['pagenum'];
        $start = ($pagenum-1) * $pagePerCount;
    }else{
        $pagenum = 1;
        $start =0;

    }

    
    $sql = "select b_idx,b_userid,b_name,b_title,b_content,b_hit,b_regdate,b_file from tb_insoya_board order by b_idx desc limit $start,$pagePerCount";

    $result = mysqli_query($conn,$sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>메이플인소야</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link href="../insoya.css/insoyatest.css?after" rel="stylesheet" type="text/css">
    
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
<div id="board_공용_contentsInContainer">
                      
                <h2>자유게시판</h2>
              <!-- board시작 -->
              <b>전체 게시물 : <?=$totcnt?></b>
                <table>
                    <tr>
                        <td width="50">번호</td>
                        <td width="50">이름</td>
                        <td width="150">제목</td>
                        <td width="50">조회수</td>
                        <td width="100">날짜</td>
                    </tr>
        <?php
            while($row = mysqli_fetch_array($result)){
                $b_idx = $row['b_idx'];

                $sql = "select count(re_boardidx)as cnt from tb_insoya_reply where re_boardidx = $b_idx";
                $re_cnt_result = mysqli_query($conn,$sql);
                $re_cnt_row = mysqli_fetch_array($re_cnt_result);
                $reply_cnt = $re_cnt_row['cnt'];
                $reply_cnt_str ="";
                if($reply_cnt>0){
                    $reply_cnt_str = "[".$reply_cnt."]";
                }

                $b_userid = $row['b_userid'];
                $b_name = $row['b_name'];
                $b_title = $row['b_title'];
                $b_hit = $row['b_hit'];
                $b_regdate = $row['b_regdate'];
                $b_file = $row['b_file'];
                $b_file_str = "";
                if($b_file != ""){
                    $b_file_str = "<img src='../index/file.png' alt='파일'>";
                }
        ?>
                    <tr>
                        <td><?=$b_idx?></td>
                        <td><?=$b_userid?>(<?=$b_name?>)</td>
                        <td><a href="../index/view_공용.php?b_idx=<?=$b_idx?>"><?=$b_title?></a><?=$reply_cnt_str?><?=$b_file_str?></td>
                        <td><?=$b_hit?></td>
                        <td><?=$b_regdate?></td>
                    </tr>
                    <?php
            }
        ?>
                </table>


                <p><?php
                    $pagenums = floor($totcnt / $pagePerCount) + 1;
                    for($i=1;$i<=$pagenums;$i++){
                        echo "<a href='./FreeWrite_List.php?pagenum=".$i."'>".$i."</a> ";
                    }
                ?></p>
                <input type="submit" value="글쓰기" onclick="location.href='../index/write_공용.php'">


          
            <!-- board끝 -->
        </div>
<!--컨테이너 내부 모든 내용들 끝-->


</div>  
<!--컨테이너 끝-->  























</body>
<!--body바디끝-->



</html>

<!--메뉴바 밑에있는 메이플토크 부터 메이플동영상 메뉴바 끝--body끝>

