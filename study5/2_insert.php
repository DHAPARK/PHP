<?php
    //ip , 아이디 ,비밀번호, DB명
    $conn = mysqli_connect("localhost","root","1234","phpstudy")or die("데이터 베이스 연결 실패!");

    if(!$conn){
        echo("연결실패");
    }else{
        $sql = "INSERT INTO tb_member (mem_userid,mem_userpw,mem_name,
        mem_email,mem_hobby,mem_ssn1,mem_ssn2,mem_zipcode,mem_address1,
        mem_address2,mem_address3) VALUES ('ryuzy','1111','류정원','aaaa@bbbb.com','드라이브 쇼핑','001011','3068518',
        '12345','서울 서초구','양재동','1-1')";
        $result = mysql_query($conn, $sql);
        //mysql_query sql을 실행해주는 메서드 앞뒤 머쓴건지 알겠지?
        //insert문은 실행하면 몇개의 레코드가 실행되었는지 리턴됩니다
        echo "{$result}개의 데이터가 정상적으로 insert 되었습니다.";
    }
?>