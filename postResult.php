<?php
header("Content-Type: text/html; charset=UTF-8");
session_start();
$name = $_POST['name'];
$pw = $_POST['pw'];
//$mon = $_POST['mon'];
//$day = $_POST['day'];
//$age = 2016-$year+1;
?>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<?php

if( $name== "boram" && $pw=="boboram"){
  $_SESSION['isLogin']=1;
  $_SESSION['name']=$name;
?>

<h1>로그인 완료!</h1>
당신의 이름은  <?=$name?>군요!!<br>
암호는  <?=$pw?>에요<br>
로그인 페이지로 <a href="./postForm.php" class="btn btn-default">돌아가기</a>
<?php
}else{
  $_SESSION['isLogin']=0;
  $_SESSION['name']='';

?>
아이디 혹은 비밀번호가 틀렸습니다.
<?php
}
?>
