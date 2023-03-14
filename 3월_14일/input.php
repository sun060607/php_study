<script>
    window.onload = function(){
    var mybtn1 = document.getElementById('mybtn1');
    mybtn1.addEventListener('click',mysubmit);
    var mybtn1 = document.getElementById('mybtn1');
    mybtn1.addEventListener('click',mysubmit);s
    //myform submit()
    function mysubmit(){
        var myform = document.getElementById('myform');
        var txt1 = document.getElementById('txt1');
        var txt2 = document.getElementById('txt2');
        if(txt1.value !=""&&txt2.value != ""){
            myform submit()
        }else{
            alert('다시 입력 바람')
        }
    }
    }
</script>

<form id = myform method=post action = process.php>
    <input id = txt1 type=text name = myname><br>
    <input id = txt2 type=text name=myage><br>
    <input type=button value=확인 onclick=mysubmit()>
</form>
<?php
    
?>