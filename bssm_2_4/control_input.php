<form method = post action = control_input_process.php>
<select name = did>
<?php
     include 'db_info.php';
     $conn = mysqli_connect('localhost',$db_id, $db_pw,$db_name);
     //데이터를 읽어오는 쿼리를 작성한다
     $query = "select * from device;";
     //쿼리를 실행한다
     $result = mysqli_query($conn, $query);
     while($row = mysqli_fetch_assoc($result)){
        echo"<option value='".$row['did']."'>".$row['did']."</option>";
     }
     //갯수를 10개 20개 30개 중에 선택하고 기본값은 10으로한다!
     
  ?>
</select>
<br>
핀 번호:<input type = text name = pinnum><br>
on/off: off<input type = radio name = cmd value = 0>on<input type = radio name = cmd value = 1><br>
<input type=submit value = "전송">
   </form>