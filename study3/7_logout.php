<?php
    session_start();
    session_unset(); //세션에있는값들을 다 날려버리는 메서드

?>

<script>
    alert('로그아웃 되었습니다.');
    location.href="7_login.php";

</script>