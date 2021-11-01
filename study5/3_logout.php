<?php
    setcookie("id","",time()-1,"/");
    //그냥 시간이 지나간걸로 해주면 로그아웃되는거

?>

<script>
    alert('로그아웃 되었습니다.');
    location.href = "4_login.php";
</script>
