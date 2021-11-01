<?php
    session_start();
    include "../include/dbconn.php";
 
 
    $sql = "select b_idx,b_userid,b_name,b_title,b_content,b_hit,b_regdate from tb_insoya_board order by b_idx";

    $result = mysqli_query($conn,$sql);

    $b_idx = $_POST['b_idx'];
    $b_userid = $_SESSION['id'];
    $b_name = $_SESSION['name'];
    $b_title = $_POST['b_title'];
    $b_content = $_POST['b_content'];
    $filepath = "";

    if($_FILES['b_file']['tmp_name']){
        $uploads_dir = '../upload';
        $allowed_ext = array('jpg','jpeg','png','gif','bmp');
        $error = $_FILES['b_file']['error'];
        $name = $_FILES['b_file']['name'];//맛있는 사과.jpg
        $ext = explode(".",$name); // $ext[0] = "맛있는 사과",$ext[1]='jpg';
        $rename = $ext[0].time();
        $rename = $rename.".".$ext[1];
        $ext = strtolower(array_pop($ext));
        // array_pop() : 스택구조,마지막 값을 뽑아내고 그 값을 반환합니다.해당 데잉터는 array에서 사라집니다
        //pop는 스택구조

        

        if($error != UPLOAD_ERR_OK){ //UPLOAD_ERR_OK(0) -> 오류없이 파일 업로드 성공
            switch($error){
                case UPLOAD_ERR_INI_SIZE: //php.ini에 설정된 최대 파일크기를 초과했다는 오류
                    echo "파일크기가 너무 큽니다";
                break;
                
                case UPLOAD_ERR_NO_FILE: //파일이 제대로 업로드 되지 않았을 경우
                    echo "파일이 제대로 첨부되지 않았습니다.";
                break;

                default:
                    echo "파일 업로드 실행";
            }
            exit;
        }
        if(!in_array($ext,$allowed_ext)){
            //업로드를 시키긴 시켰는데 확장명이 내가 정해둔것중에 없는애라면
            echo"허용되지 않은 확장명입니다.";
            exit;
        }
        $filepath = $uploads_dir."/".$rename;
        move_uploaded_file($_FILES['b_file']['tmp_name'],$filepath);
        //tmp_name은 정해져있는 상수값임 미리 있는 이름 tmp_name은 원래 넘어올때 이름을 가져오는 특별한 상수값
        // chmod($filepath,0755);
        // chmod($uploads_dir,0755);
        //777이 모든권한
        //만약 안되면 이걸 붙여라
        //// chmod($filepath,0755);
        //저 $filepath쪽에 절대경로를 넣어주는것도 방법
        $sql ="update tb_insoya_board set b_title='$b_title',b_content='$b_content',b_file='$filepath' where b_idx=$b_idx";
    }else{
        $sql = "update tb_insoya_board set b_title='$b_title',b_content='$b_content' where b_idx=$b_idx";
    }
    $result =mysqli_query($conn,$sql);
    echo "<script>alert('수정되었습니다.');location.href='view_공용.php?b_idx=".$b_idx."';</script>";




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
            <li> <a href="#">집문답변/시세질문</a></li>
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
            <li><a href="./php_FILE/login.php">로그인</a></li>
            <li> &nbsp; | &nbsp; </li>
            <li><a href="./php_FILE/regist.php">회원가입</a></li>
            
        </ul>
    <?php
    }else{
    ?>
    <ul>
    <li><a href="./php_FILE/logout.php">로그아웃</a></li>
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
   
</div>
<!--컨테이너 내부 모든 내용들 끝-->


</div>  
<!--컨테이너 끝-->  























</body>
<!--body바디끝-->



</html>

<!--메뉴바 밑에있는 메이플토크 부터 메이플동영상 메뉴바 끝--body끝>

