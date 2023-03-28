<?php
  $conn = mysqli_connect('localhost', 'root', '','example1');
  $query = "delete from table1 where num=" . $_GET['num'];
  $result = mysqli_query($conn, $query);
  //실행결과 확인
  if($result){
   echo "성공";
  }else{
   echo "실패";
  }
?>
<meta http-equiv="refresh" content="0; url=input.php">