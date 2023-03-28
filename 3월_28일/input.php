<?php
  //MYSQL연결한다
   $conn = mysqli_connect('localhost', 'root', '','example1');
   //데이터를 읽어오는 쿼리를 작성한다
   $query = "select * from table1;";
   //쿼리를 실행한다
   $result = mysqli_query($conn, $query);
   //결과를 출력한다
 
   echo "<table border=1 width=500>"; 
      echo "<tr>";
    echo "<th>번호</th>";
    echo "<th>이름</th>";
    echo "<th>나이</th>";
    echo "<th>성별</th>";
    echo "<th>키</th>";
    echo "<th>삭제</th>";
    echo "<th>수정</th>";
    echo "</tr>";
   while($row = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>".$row['num']."</td>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['age']."</td>";
    echo "<td>".$row['gender']."</td>";
    echo "<td>".$row['height']."</td>";
    echo "<td><a href=delete.php?num=".$row['num'].">[삭제]</a></td>";
    echo "<td><a href=update.php?num=".$row['num'].">[수정]</a></td>";
    echo "</tr>";
  }

  echo "</table>";
   
?>

<form method=post action=process.php>
  이름:<input type=text name=myname><BR>
  나이:<input type=text name=myage><BR>
  성별:<input type=text name=mygender><BR>
  키:<input type=text name=myheight><BR>
  <input type=submit value=확인>
</form>