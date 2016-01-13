<style>
/*css는 c스타일의 주석을 사용*/

/*태그지정방법*/
  b {
     color:red;
     font-weight:normal;
     background-color:#111111;
    }

/*아이디지정방법*/
  #hellobox {
     width:500px; height:300px;
     border:1px solid #ff0000;
     padding:10px; /*안여백*/
     margin:10px;  /*바깥여백*/
     position:absolute; top:20px; right:20px;
  }

/*클래스지정방법*/
  .nicename{	
     font-weight:bold; /*두껍게*/
     font-size:20px; /*크기*/
     text-decoration:underline;
     cursor:pointer;
  } 

</style>

<div id="hellobox">
Good morning?
</div>

<?php

for( $i = 0;  $i<1000; $i++){
   echo $i . "<b>Hello</b>, Boram Gwak!! <br>
   <span class='nicename'>Boram Gwak</span>!!<br>";
}

?>
