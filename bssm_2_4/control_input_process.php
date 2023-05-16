<?php
  date_default_timezone_set('Asia/Seoul');
   $did = $_POST['did'];
   $pin = $_POST['pinnum'];
   $cmd = $_POST['cmd'];
   $date = date("Y-m-d H:i:s",time());

   //MYSQL연결한다
     $conn = mysqli_connect('localhost', 'root','','bssm2_4');
    //데이터를 insert하는 SQL쿼리를 작성
    $query = "insert into control(did,pin,cmd,checked,date) values('".$did."',".$pin.",".$cmd.",0,'".$date."');";
    //SQL쿼리를 실행
    $result = mysqli_query($conn, $query);
    //실행결과 확인
    if($result){
     echo "성공";
    }else{
     echo "실패";
    }
?>
<meta http-equiv="refresh" content="0; url=control_input.php">