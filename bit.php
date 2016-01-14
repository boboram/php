<?php
header("Content-Type: text/html; charset=UTF-8");

$url = $_GET['url'];

$urls['fb'] = "http://www.facebook.com/";
$urls['naver'] = "http://www.naver.com/";
$urls['mirim'] = "http://www.e-mirim.hs.kr/";

if(array_key_exists($url, $urls)){ //url이 urls에서 같은 내용이 있으면
 header("Location: ". $urls[$url]);
 exit();
 break;
}else{
 echo $url. "는 등록되지 않았습니다.";
}


//위문장을 통해서 짧게 할 수 있다.
/*switch($url){ //php에서는 스위치에 문자를 사용할 수 있다.
case "naver":
header("Location: http://naver.com"); //해당되는 주소로 감
exit();
break;

case "mirim":
header("Location: http://www.e-mirim.hs.kr/");
exit();
break;

case "facebook":
header("Location: http://www.facebook.com");
default:
echo "기타!!".$url;
break;
}*/

?>
