<form method = post action=view.php>
<select name="did">
  <option value="none"></option>
  <?php
     $conn = mysqli_connect('localhost', 'root', '','bssm2_4');
     //데이터를 읽어오는 쿼리를 작성한다
     $query = "select * from device;";
     //쿼리를 실행한다
     $result = mysqli_query($conn, $query);
     while($row = mysqli_fetch_assoc($result)){
        echo"<option value='".$row['did']."'>".$row['did']."</option>";
     }
  ?>
</select>
<input type = submit value=확인>
    </form>
<?php
  if(isset($_POST['did'])){

  }else{
    exit;
  }
  //MYSQL연결한다
   $conn = mysqli_connect('localhost', 'root', '','bssm2_4');
   //데이터를 읽어오는 쿼리를 작성한다
   $query = "select * from sensor where did='".$_POST['did']."';";
   //쿼리를 실행한다
   $result = mysqli_query($conn, $query);
   //결과를 출력한다
 
   echo "<table border=1 width=500>"; 
      echo "<tr>";
    echo "<th>번호</th>";
    echo "<th>모델</th>";
    echo "<th>온도</th>";
    echo "<th>습도</th>";
    echo "<th>업로드</th>";
    echo "</tr>";
   while($row = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>".$row['num']."</td>";
    echo "<td>".$row['did']."</td>";
    echo "<td>".$row['temp']."</td>";
    echo "<td>".$row['humi']."</td>";
    echo "<td>".$row['date']."</td>";
    echo "</tr>";
  }

  echo "</table>";
   
?>