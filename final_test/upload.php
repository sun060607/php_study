<?php
   $temp = $_GET['t'];
   $humi = $_GET['h'];
  //device table에 접속해서 있는지 없는지 확인한다

   //MYSQL연결한다
   $db_id = 'root';
   $db_pw = "";
   $db_name = 'exam_db';
   $conn = mysqli_connect('localhost',$db_id, $db_pw,$db_name);
    
    //데이터를 insert하는 SQL쿼리를 작성
    $query = "insert into exam_data(temp_data,humi_data) values(".$temp.",".$humi.");";
    //SQL쿼리를 실행
    $result = mysqli_query($conn, $query);
    //실행결과 확인
    if($result){
     echo "성공";
    }else{
     echo "실패";
    }
?>
