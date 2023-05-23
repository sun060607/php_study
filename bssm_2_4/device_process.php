<?php
  date_default_timezone_set('Asia/Seoul');
   $did = $_POST['mydid'];
   $loc = $_POST['myloc'];
   $type = $_POST['mytype'];
   $date = date("Y-m-d H:i:s",time());

   //MYSQL연결한다
   include 'db_info.php';
   $conn = mysqli_connect('localhost',$db_id, $db_pw,$db_name);
    //데이터를 insert하는 SQL쿼리를 작성
    $query = "insert into device values('".$did."','".$loc."','".$type."','".$date."');";
    //SQL쿼리를 실행
    $result = mysqli_query($conn, $query);
    //실행결과 확인
    if($result){
     echo "성공";
    }else{
     echo "실패";
    }
?>
<meta http-equiv="refresh" content="0; url=device.php">