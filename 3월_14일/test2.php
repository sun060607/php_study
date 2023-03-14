<script>
    var num1 = 10;
    var num2 = '20';

    var num5 = [1,2,3,4,5,6];
    //let
    //console.log(num3[2]);
    //num3.push(7);
    var num4 = {
        num1:10,
        num2:20,
        num3:num5
    }
    //console.log(num4);
    //console.log(num3[6]);
    //console.log(JSON.stringify(num4));
    console.log(my_function(10,20));
    function my_function(intput1, input2){
        console.log(input1+input2);
        return input1+input2;
    }
</script>

<?php
    $num1 = 10;
    $num2 = '10';
    $num3 = [1,2,3,4,];
    echo $num1+$num2;
?>