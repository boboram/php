<?php
 session_start();
// setCookie('isLogin','0'); //쿠키 값을 0으로 하면 이전 값이 지워짐
// setCookie('name','');
 $_SESSION['isLogin']=0;
 $_SESSION['name']='';

 $url = "./postForm.php";
 header("Location: ". $url);
?>
