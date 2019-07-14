<?php
$connect = mysqli_connect("localhost", "root", "", "loop");
$query = "SELECT * FROM booked_resources";
$result = mysqli_query($connect, $query);
$chart_data = '';
#echo "hello";
while($row = mysqli_fetch_array($result))
{
  $x=substr($row["rid"], 2);
  $x="'".$x."'";
 $chart_data = $chart_data."{  resource:".$x.", school:".$row["sid"]."} ,";
}
#echo "hey";
#echo $chart_data;
// $chart_data=substr($chart_data,0,-1);
?>
 
 
<!DOCTYPE html>
<html>
 <head>
  <title>Data Analytics </title>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  
 </head>
 <body>
  <br /><br />
  <div class="container" style="width:900px; align-content: center; ">
   <h2 align="center">Data Analytics</h2>
   <h3 align="center">School Vs Resources</h3>   
   <br /><br />
   <div id="chart" align="center"></div>
  </div>
  <script>
  $(document).ready(function () {
Morris.Bar({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'resource',
 ykeys:['school'],
 labels:['school'],
 hideHover:'auto',
 stacked:true
});
alert("not possible");
});

</script>
 </body>


</html>
 
