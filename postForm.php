<form method="post" action="postResult.php">
<?php
header("Content-Type: text/html; charset=UTF-8");
?>

 <h1>봄봄 서비스</h1>
 당신의 이름<br>
 <input type="text" name="name" id="name" value="">
<br>
 당신의 생일<br>
 <input type="text" name="year" id="year" value="">
 <input type="text" name="mon" id="mon" value="">
 <input type="text" name="day" id="day" value="">
<br>
 <input type="submit" value="결과 확인">
</form>
