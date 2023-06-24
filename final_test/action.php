<?php
  $db_id = 'root';
  $db_pw = "";
  $db_name = 'exam_db';
    $conn = mysqli_connect('localhost',$db_id, $db_pw,$db_name);
    //데이터를 읽어오는 쿼리를 작성한다
    $query = "delete from exam_data;";
    //쿼리를 실행한다
    $result = mysqli_query($conn, $query);
?>
<meta http-equiv="refresh" content="0; url=view.php">