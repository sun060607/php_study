
<?php
    $name  = $_POST['myname'];
    $age = $_POST['myage'];
    $gender = $_POST['mygender'];
    $height= $_POST['myheight'];
    $conn = mysqli_connect('localhost', 'root','','example1');
    $query = " insert into table1(name,age,gender,height) values('".$name."', ".$age.", '".$gender."',".$height.");";
    $result = mysqli_query($conn,$query);
    if($result){
        echo "저장 성공";
    }else{
        echo "실패";
    }
?>