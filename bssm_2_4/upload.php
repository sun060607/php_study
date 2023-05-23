<?php
   $did = $_GET['did'];
   $temp = $_GET['temp'];
   $humi = $_GET['humi'];
   $date = date("Y-m-d H:i:s",time());
  //device table에 접속해서 있는지 없는지 확인한다

   //MYSQL연결한다
   include 'db_info.php';
   $conn = mysqli_connect('localhost',$db_id, $db_pw,$db_name);
     $query2 = "select * from device where did = '".$did."'";
     $result2 = mysqli_query($conn, $query2);
     $count = mysqli_num_rows($result2);
     if($count == 1){
      //존재함
     }else{
      //존재하지 않음
      echo "등록되지 않은 디바이스임";
      exit;
     }
    //데이터를 insert하는 SQL쿼리를 작성
    $query = "insert into sensor(did,temp,humi,date) values('".$did."',".$temp.",".$humi.",'".$date."');";
    //SQL쿼리를 실행
    $result = mysqli_query($conn, $query);
    //실행결과 확인
    if($result){
     echo "성공";
    }else{
     echo "실패";
    }
?>
