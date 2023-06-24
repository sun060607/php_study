<form method = post action = action.php>
<?php
   $db_id = 'root';
   $db_pw = "";
   $db_name = 'exam_db';
     $conn = mysqli_connect('localhost',$db_id, $db_pw,$db_name);
     //데이터를 읽어오는 쿼리를 작성한다
     $query = "select * from exam_data order by record_num desc limit 25;";
     //쿼리를 실행한다
     $result = mysqli_query($conn, $query);
     echo "<table border =1 width=500>";
     echo "<tr>";
     echo "<th>key 값</th>";
     echo "<th>온도(temp)</th>";
     echo "<th>습도(humi)</th>";
     echo "</tr>";
     while($row = mysqli_fetch_assoc($result)){
      echo "<tr>";
      echo "<td>".$row['record_num']."</td>";
      echo "<td>".$row['temp_data']."</td>";
      echo "<td>".$row['humi_data']."</td>";
      echo "</tr>";
     }
  ?>
  </table>
  <input type="submit" value="삭제">
   </form>
<?php
  
  //MYSQL연결한다
  $conn2 = mysqli_connect('localhost',$db_id, $db_pw,$db_name);
   //데이터를 읽어오는 쿼리를 작성한다
   $query2 = "select * from exam_data;";
   //쿼리를 실행한다
   $result2 = mysqli_query($conn2, $query2);
    $i = 0;
   while($row = mysqli_fetch_assoc($result2)){
    $mylabel[$i] = $row['record_num'];
    $mygas[$i] = $row['temp_data'];
    $mycds[$i] = $row['humi_data'];
    if($i ==0){
      $mygas2 = $row['temp_data'];
      $mycds2 = $row['humi_data'];
    }
    $i++;
  }
  echo "</table>";
  echo "<table border=1 width=500>"; 
  echo "<tr><td colspan>";
  include "gas_graph.php";
  echo "</td></tr>";
  echo "</table>";
?>