<?php
    session_start();
    include "../include/dbconn.php";

    $b_title = $_POST['b_title'];
    $b_content = $_POST['b_content'];
    $filepath = ""; //파일이 저장될 경로

    $b_userid = $_SESSION['id'];
    $b_name = $_SESSION['name'];


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
        
    }


    $sql = "insert into tb_insoya_board(b_userid,b_name,b_title,b_content,b_file)values('$b_userid','$b_name','$b_title','$b_content','$filepath')";

    

    $result = mysqli_query($conn,$sql);
    echo "<script>alert('저장되었습니다.');location.href='./board_공용.php';</script>";

?>