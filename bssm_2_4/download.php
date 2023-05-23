<?php 
 include 'db_info.php';
 $conn = mysqli_connect('localhost',$db_id, $db_pw,$db_name);
  //데이터를 읽어오는 쿼리를 작성한다
  $query = "select * from sensor where did='".$_GET['did']."' order by num desc limit 30;";
  //쿼리를 실행한다
  $result = mysqli_query($conn, $query);
  $i = 0;
  while($row = mysqli_fetch_assoc($result)){
    $dataset['label'][$i] = $row['date'];
    $dataset['temp'][$i] = $row['temp'];
    $dataset['humi'][$i] = $row['humi'];
    $i++;
  }
  echo json_encode($dataset);
?>