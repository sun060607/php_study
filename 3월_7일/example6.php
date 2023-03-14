<?php
    //echo "<input type = \"text\">";
    if($_GET['num'] == 0){
        echo "안녕하세요"
    }else if($_GET['num'] ==1){
        echo "반갑습니다"
    }else if($_GET['num'] ==2){
        echo "어서오세요"
    }else{
        echo "0,1,2중에 하나를 입력하세요"
    }
?>