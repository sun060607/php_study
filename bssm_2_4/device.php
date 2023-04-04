<?php
  //MYSQL연결한다
   $conn = mysqli_connect('localhost', 'root', '','bssm2_4');
   //데이터를 읽어오는 쿼리를 작성한다
   $query = "select * from device;";
   //쿼리를 실행한다
   $result = mysqli_query($conn, $query);
   //결과를 출력한다
 
   echo "<table border=1 width=500>"; 
      echo "<tr>";
    echo "<th>모델</th>";
    echo "<th>온도</th>";
    echo "<th>습도</th>";
    echo "<th>업로드</th>";
    echo "</tr>";
   while($row = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>".$row['did']."</td>";
    echo "<td>".$row['loc']."</td>";
    echo "<td>".$row['type']."</td>";
    echo "<td>".$row['date']."</td>";
    echo "</tr>";
  }

  echo "</table>";
   
?>
<form method=post action=device_process.php>
  <input type=text name=mydid><BR>
  <input type=text name=myloc><BR>
  <input type=text name=mytype><BR>
  <input type=submit value=확인>
</form>