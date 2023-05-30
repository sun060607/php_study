<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
  //2406박민성
  $(document).ready(function() {
      //로드가 완벽하게 됨
      setInterval(function() {
        $.ajax({
            url: "gas_data.php",
            method: "GET",
            dataType: "text",
            success: function(data) {
              var mydata = JSON.parse(data);
              console.log(mydata);
              $('#mytable').prepend('<tr><th>'+mydata.num+'</th><th>'+mydata.gas+'</th><th>'+mydata.cds+'</th><th>'+mydata.date+'</th></tr>');
              if($('#mytable > tbody tr').length >10){ $('#mytable > tbody tr:last').remove();}
            }
           })
      }, 1000);
   });
  function test1(){
    $('#mytable').append('<tr><th>2</th><th>2</th><th>2</th><th>2</th></tr>');
  }
  function test2(){
  }
  function test3(){
    $('#mytable > tbody').empty();
  }
  function test4(){
    console.log($('#mytable > tbody tr').length);
  }
  function test5(){
    $('#mytable > tbody tr:last').remove();
  }
</script>
<button onclick=test1()>테스트</button>
<button onclick=test2()>테스트2</button>
<button onclick=test3()>테스트3</button>
<button onclick=test4()>테스트4</button>
<button onclick=test5()>테스트5</button>
<table id = mytable border=1 width=500>
  <thead>
  <tr>
    <th>번호</th>
    <th>가스</th>
    <th>조도</th>
    <th>시간</th>
  </tr>
</thead>
<tbody>
<tr><th>1</th><th>1</th><th>1</th><th>1</th></tr>
</tbody>
</table>
