<?php
    
//php 명령어 존재 여부를 알려줌
    echo $_GET['name'];
    if(isset( $_GET['name'])){
        echo "당신의 이름은 ".$_GET['name'] . "입니다";
        echo "당신의 나이는 ".$_GET['age'] . "입니다";
    }else{
        echo "존재하지 않습니다";
    }
?>