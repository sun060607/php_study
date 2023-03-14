<?php
    
//php 명령어 존재 여부를 알려줌
    //echo $_GET['name'];
    if(isset( $_GET['name'])){
        $_GET['name'];
    }else{
        echo "존재하지 않습니다";
    }
?>