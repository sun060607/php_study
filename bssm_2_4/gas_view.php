<?php
//2406박민성

  //MYSQL연결한다
  include 'db_info.php';
  $conn = mysqli_connect('localhost',$db_id, $db_pw,$db_name);
   //데이터를 읽어오는 쿼리를 작성한다
   $query = "select * from gas order by num desc limit 1;";
   //select * from '테이블명' order by id desc limit 5
   //쿼리를 실행한다
   $result = mysqli_query($conn, $query);
   //결과를 출력한다
  $count = mysqli_num_rows($result);
  if($count == 1){
    echo "<table border=1 width=500>"; 
    echo "<tr>";
    echo "<th>    </th>";
    echo "<th>가스</th>";
    echo "<th>조도</th>";
    echo "</tr>";
    while($row = mysqli_fetch_assoc($result)){
        $num ="";
        $num2="";
        if($row['gas']>=10) $num = "위험";
        else $num = "정상";
        if($row['cds']>=1000) $num2 = "밤";
        else $num2 = "낮";
        echo "<tr>";
        echo "<td>값</td>";
        echo "<td>".$row['gas']."</td>";
        echo "<td>".$row['cds']."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>결과</td>";
        echo "<td>".$num."</td>";
        echo "<td>".$num2."</td>";
        echo "</tr>";
      }
      echo "</table>";
    }else{
      echo "없어";
    }

?>
<?php
  
  //MYSQL연결한다
  $conn2 = mysqli_connect('localhost',$db_id, $db_pw,$db_name);
   //데이터를 읽어오는 쿼리를 작성한다
   $query2 = "select * from gas;";
   //쿼리를 실행한다
   $result2 = mysqli_query($conn2, $query2);
    $i = 0;
   while($row = mysqli_fetch_assoc($result2)){
    $mylabel[$i] = $row['date'];
    $mygas[$i] = $row['gas'];
    $mycds[$i] = $row['cds'];
    if($i ==0){
      $mygas2 = $row['gas'];
      $mycds2 = $row['cds'];
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