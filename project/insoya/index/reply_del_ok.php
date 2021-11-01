<?php
session_start();
include "../include/dbconn.php";

$re_idx = $_GET['re_idx'];//댓글 글번호
$b_idx = $_GET['b_idx'];//원본 글번호(view.php로 돌아가기 위해)

$sql = "delete from tb_insoya_reply where re_idx=$re_idx";
$result = mysqli_query($conn,$sql);
echo"<script>alert('삭제되었습니다.');location.href='./view_공용.php?b_idx=".$b_idx."';</script>";

?>
