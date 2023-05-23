<?php
  //MYSQL연결한다
  include 'db_info.php';
  $conn = mysqli_connect('localhost',$db_id, $db_pw,$db_name);
   //데이터를 읽어오는 쿼리를 작성한다
   $query = "select * from gas;";
   //쿼리를 실행한다
   $result = mysqli_query($conn, $query);
   //결과를 출력한다
 
   echo "<table border=1 width=500>"; 
      echo "<tr>";
    echo "<th>번호</th>";
    echo "<th>가스</th>";
    echo "<th>조도</th>";
    echo "<th>업로드</th>";
    echo "</tr>";
   while($row = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>".$row['num']."</td>";
    echo "<td>".$row['gas']."</td>";
    echo "<td>".$row['cds']."</td>";
    echo "<td>".$row['date']."</td>";
    echo "</tr>";
  }

  echo "</table>";
   
?>