
<form id = myform method=post action = process.php>
    이름:<input type=text name = myname><br>
    나이:<input type=text name=myage><br>
    성별:<input type=text name = mygender><br>
    키:<input type=text name=myheight><br>
    <input type=submit value=확인>
</form>
<?php
    //mysql과 접속
    $conn = mysqli_connect('localhost', 'root','','example1');
    //쿼리 작성
    $query = "select * from table1;";
    //쿼리 실행
    $result = mysqli_query($conn,$query);
    //데이터를 출력한다
    echo "<table border=1 width500>";
        echo "<tr>";
        echo "<th>번호</th>";
        echo "<th>이름</th>";
        echo "<th>나이</th>";
        echo "<th>성별</th>";
        echo "<th>키</th>";
        echo "<th>삭제</th>";
        echo "</tr>";
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row['num']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['age']."</td>";
        echo "<td>".$row['gender']."</td>";
        echo "<td>".$row['height']."</td>";
        echo "<td><a href = delete.php?num=".$row['num'].">삭제</a></td>";
        echo "<tr>";
    }
    echo "</table>";
?>