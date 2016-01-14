<?php
header("Content-Type: text/html; charset=UTF-8");

$goodsid=$_GET['goodsid']; //미리 저장해서 사용하기
if($goodsid == ""){ //goodsid가 없다면
  $goodsid = "비어있음";
}

$getresult = print_r($_GET);
?>

<a href="./get.php?goodsid=12345" target="_self" >
./get.php?goodsid=12345
</a>

<hr>
goodsid는 <?=$goodsid?>입니다. <!--위에서 미리 저저장된 변수 나오게 함-->
<hr>
현재 넘겨진 값<br>

<pre> <!--그대로 출력해줌-->
<?php
print_r($_GET);
?>
</pre>
