<?php
  date_default_timezone_set('Asia/Seoul');
   $gas = $_GET['gas'];
   $cds = $_GET['cds'];
   $date = date("Y-m-d H:i:s",time());

   //MYSQL연결한다
   include 'db_info.php';
   $conn = mysqli_connect('localhost',$db_id, $db_pw,$db_name);
    //데이터를 insert하는 SQL쿼리를 작성
    $query = "insert into gas(gas,cds,date) values(".$gas.",".$cds.",'".$date."');";
    //SQL쿼리를 실행
    $result = mysqli_query($conn, $query);
    //실행결과 확인
    if($result){
     echo "성공";
    }else{
     echo "실패";
    }
?>