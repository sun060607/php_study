<?php
   $temp = $_GET['temp'];
   $humi = $_GET['humi'];
  //device table에 접속해서 있는지 없는지 확인한다

   //MYSQL연결한다
   $db_id = 'root';
  $db_pw = "";
  $db_name = 'test2_4_1';
   $conn = mysqli_connect('localhost',$db_id, $db_pw,$db_name);
    
    //데이터를 insert하는 SQL쿼리를 작성
    $query = "insert into test2(myhumi,mytemp) values(".$humi.",".$temp.");";
    //SQL쿼리를 실행
    $result = mysqli_query($conn, $query);
    //실행결과 확인
    if($result){
     echo "성공";
    }else{
     echo "실패";
    }
?>
