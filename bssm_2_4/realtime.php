<?php
//2406박민성
?>
<!DOCTYPE html>
<html>
<head>
<title>NOCKANDA EXAMPLE</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.bundle.min.js"></script>
<script type="text/javascript" charset="utf-8" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
   $(document).ready(function() {
      //로드가 완벽하게 됨
      setInterval(function() {
        $.ajax({
            url: "download.php?did="+mydid,
            method: "GET",
            dataType: "text",
            success: function(data) {
              var mydata = JSON.parse(data);

              chart.data.datasets[0].data = mydata.temp;
              chart.data.datasets[1].data = mydata.humi;
              chart.data.labels = mydata.label;
              chart.update();
             // $("#result").html(data);
            }
           })
      }, 1000);
   });
  function test1(){
      chart.data.datasets[0].data = [10, 0, 10, 0, 10, 0, 10];
      chart.data.datasets[1].data = [0, 10, 0, 10, 0, 10, 0];
      chart.update();
  }
  function test2(){
      chart.data.datasets[0].data = [0, 10, 0, 10, 0, 10, 0];
      chart.data.datasets[1].data = [10, 0, 10, 0, 10, 0, 10];
      chart.update();
  }
  function set_did(did){
    console.log(did);
    mydid = did;
  }
</script>
</head>
<body>
  <?php 
   include 'db_info.php';
   $conn = mysqli_connect('localhost',$db_id, $db_pw,$db_name);
    $query = "select * from device;";
    $result = mysqli_query($conn, $query);
    $i = 0;
    while($row = mysqli_fetch_assoc($result)){
      if($i == 0){
        echo "<script> var mydid = ".$row['did']."</script>";
      }
      echo "<button onclick ='set_did(\"".$row['did']."\")'>".$row['did']."<button>";
      $i++;
    }
  ?>
  <button onClick = "test1()">테스트버튼1</button>
  <button onClick = "test2()">테스트버튼2</button>
  
<div style="width:800px;">
<canvas id="line1"></canvas>
</div>


<script>
var ctx = document.getElementById('line1').getContext('2d');
var chart = new Chart(ctx, {
	type: 'line',
	data: {
		labels: ['N-6', 'N-5', 'N-4', 'N-3', 'N-2', 'N-1', 'N'],
		datasets: [
				{
					label: 'Temperature',
					backgroundColor: 'transparent',
					borderColor: "red",
					data: [10, 0, 10, 0, 10, 0, 10]
				},{
					label: 'humidity',
					backgroundColor: 'transparent',
					borderColor: "blue",
					data: [0, 10, 0, 10, 0, 10, 0]
				}
		]
	},
	options: {}
});

function nockanda_forever(){
	var recv  = window.AppInventor.getWebViewString();
	chart.data.datasets[0].data.shift();
	chart.data.datasets[0].data.push(recv);
	//chart.data.labels.shift();
	chart.update();
}
</script>
</body>
</html>