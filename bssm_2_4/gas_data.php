<?php
//2406박민성
  //MYSQL연결한다
  include 'db_info.php';
  $conn = mysqli_connect('localhost',$db_id, $db_pw,$db_name);
   //데이터를 읽어오는 쿼리를 작성한다
   $query = "select * from gas order by num desc limit 1;";
   //select * from '테이블명' order by id desc limit 5
   //쿼리를 실행한다
   $result = mysqli_query($conn, $query);
   //결과를 출력한다
  $count = mysqli_num_rows($result);
  if($count == 1){
    $row = mysqli_fetch_assoc($result);
    echo json_encode($row);
    }
?>