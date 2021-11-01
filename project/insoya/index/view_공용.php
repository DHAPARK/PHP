<!-- 자유게시판 view 양식은 공용으로 가능 -->

<?php
    session_start();
    include "../include/dbconn.php";
    $b_idx = $_GET['b_idx'];

    $sql = "update tb_insoya_board set b_hit = b_hit + 1 where b_idx=$b_idx";
    $result =mysqli_query($conn,$sql);


    $sql = "select b_idx,b_userid,b_name,b_title,b_content,b_hit,b_regdate from tb_insoya_board order by b_idx";

    $result = mysqli_query($conn,$sql);
    // 위는 로그인관련 

    // 여긴 게시판 글보기관련
    $b_idx = $_GET['b_idx'];
    $sql = "select b_idx, b_userid,b_name,b_title,b_hit,b_regdate,b_file,b_content from tb_insoya_board where b_idx=$b_idx";
    

    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);

    $b_userid = $row['b_userid'];
    $b_name = $row['b_name'];
    $b_title = $row['b_title'];
    $b_hit = $row['b_hit'];
    $b_regdate = $row['b_regdate'];
    $b_content = $row['b_content'];
    // 게시판 글보기관련 끝
    $b_file = $row['b_file'];

    $imgpath = "";
    if($b_file !=""){
        $imgpath = "<img src='".$b_file."'alt='이미지'>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>메이플인소야</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link href="../insoya.css/insoyatest.css" rel="stylesheet" type="text/css">
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
    
<!-- 이밑으로 게시글 내용 글보기 란 시작-->
<!-- 이거 css가 insoyatest.css에서 안먹어서 여따씀 그리고 여기 contentsInContainer에만 textalign center로 줌 왜냐하면 진짜 css써놓은데다가 바꿔버리면 나머지 홈페이지들까지 문제생길까봐 일단여기 필요하니 여기에는 개별적으로 줬음-->
<!-- 아 이거 contentsInContainer에 css안먹어서 View_Container로 직접줌 그리고 나중에 밑에 광고띄울라고 height너비 비워둠 광고패널 맞춰서 적용하면될듯 -->
<div id="View_Container" style="width:80%;height:100%;margin:0 auto;">
<h2><?=$b_title?></h2>
<hr>
    <p><b>글쓴이</b> : <?=$b_userid?>(<?=$b_name?>)</p>
    <p><b>날짜</b> : <?=$b_regdate?></p>
    <p><b>조회수</b> : <?=$b_hit?></p>
    <p><b>제목</b> : <?=$b_title?></p>
    <p><b>내용</b> 
    <?=$b_content?></p>
    <p><b>파일</b></p>
    <p><?=$imgpath?></p>
    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus dolorem ipsam mollitia accusamus eius recusandae obcaecati nesciunt, quisquam exercitationem omnis sunt fugiat quidem eum atque eos totam cum? Voluptatum, recusandae?</p> -->
    <p><input type="button"value="리스트"onclick="location.href='./board_공용.php'">
    
    <?php
    
    if($_SESSION['id']==$b_userid){
    ?>
    <p><input type="button"value="수정"onclick="location.href='./edit_공용.php?b_idx=<?=$b_idx?>'">
    <input type="button"value="삭제"onclick="location.href='./delete_ok_공용.php?b_idx=<?=$b_idx?>'">
    <!-- 수정과 삭제는 어차피 주인아니면 안보일거라서 붙여두고 리스트는 그냥 따로 위에  보이게둠 -->
    <?php
    }
    ?>
</p>
<form method="post"action="reply_ok.php">
<input type="hidden" name="re_boardidx" value="<?=$b_idx?>">
<p><?=$_SESSION['id']?>(<?=$_SESSION['name']?>) : <input type="text" name="re_content"><input type="submit" value="확인"></p>
</form>
<hr>
<?php
    $sql = "select re_idx,re_userid,re_name,re_content,re_regdate from tb_insoya_reply where re_boardidx=$b_idx";
    $result = mysqli_query($conn,$sql);
    while($row= mysqli_fetch_array($result)){
        $re_idx = $row['re_idx'];
        $re_userid = $row['re_userid'];
        $re_name = $row['re_name'];
        $re_content = $row['re_content'];
        $re_regdate = $row['re_regdate'];
    ?> 
        <p><?=$re_userid?>(<?=$re_name?>): <?=$re_content?> !!! <?=$re_regdate?>
        
        <?php
        if($_SESSION['id']==$re_userid){
        ?>


            <input type="button"value="삭제"onclick="replyDel(<?=$re_idx?>,<?=$b_idx?>)"></p>
        
        <?php
        }
        ?>
    <script>
        function del(idx){
            const yn = window.confirm("정말 삭제하시겠습니까?");
            if(yn){
                location.href='./delete_ok.php?b_idx='+idx;
            }
        }
        function replyDel(reidx,bidx){
            const yn = window.confirm("댓글을  삭제하시겠습니까?");
            if(yn){
                location.href='./reply_del_ok.php?re_idx='+reidx+"&b_idx="+bidx;
            }
        }
    </script>

<?php
    }
?>



</div>
<!-- View_Container 끝 -->

</div>
<!--컨테이너 내부 모든 내용들 끝-->


</div>  
<!--컨테이너 끝-->  























</body>
<!--body바디끝-->



</html>

<!--메뉴바 밑에있는 메이플토크 부터 메이플동영상 메뉴바 끝--body끝>

