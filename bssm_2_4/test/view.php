<?php
   $db_id = 'root';
   $db_pw = "";
   $db_name = 'test2_4_1';
     $conn = mysqli_connect('localhost',$db_id, $db_pw,$db_name);
     //데이터를 읽어오는 쿼리를 작성한다
     $query = "select * from test2 limit 20;";
     //쿼리를 실행한다
     $result = mysqli_query($conn, $query);
     echo "<table border =1 width=500>";
     echo "<tr>";
     echo "<th>번호</th>";
     echo "<th>온도</th>";
     echo "<th>습도</th>";
     echo "</tr>";
     while($row = mysqli_fetch_assoc($result)){
      echo "<tr>";
      echo "<td>".$row['mynum']."</td>";
      echo "<td>".$row['mytemp']."</td>";
      echo "<td>".$row['myhumi']."</td>";
      echo "</tr>";
     }
  ?>
