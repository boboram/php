<?php
 header("Content-Type: text/html; charset=UTF-8");
 setCookie('isLogin','0'); //쿠키 값을 0으로 하면 이전 값이 지워짐
 setCookie('name','');
 $url = "./postForm.php";
 header("Location: ". $url);
?>
