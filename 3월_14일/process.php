
<?php
    if($_POST['myname'] != "" &&$_POST['myage'] != ""){
        echo $_POST['myname']."<br>";
        echo $_POST['myage']."<br>";
    }else {
        echo "<script>";
        echo "alert('다시 입력 바람');";
        echo "history.back();";
        echo "</script>";
    }
?>