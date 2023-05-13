<html>
<head>
<style>
body{background-image: url('https://img.freepik.com/free-vector/e-wallet-concept-illustration_114360-7711.jpg?size=626&ext=jpg&ga=GA1.1.1023083493.1682422864&semt=ais');}
h1 {font-family: 'Lobster';}
</style>
<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'>
</head>
<body>
<?php

 include 'conn.php';
 include 'header.php';
echo"<br><br><br><br><br>";

echo"<div class='container'>
<div class='card' style='background-color:white'>";
echo"<h1 align='center' class='bg-danger text-white' style='padding:13px;'>All Transaction Details</h1><br>";
 echo"<div class='container'><div class='card'>";
 $q = "select * from transaction_table";

 $query = mysqli_query($con,$q);
echo"<table class=' table table-striped table-hover table-bordered text-align'>";
echo "<tr class='bg-primary text-center text-white'>
<th>Sno</th>
<th>Sender's Name</th>
<th>Receiver's Name</th>
<th>Amount Send</th>
<th>Date</th>
<th>Time</th>
</tr>";
 while($res = mysqli_fetch_array($query)){

 echo "<tr class='text-center'>";


 echo "<td name='sno'>".$res['sno']."</td>";
 echo "<td>". $res['senname']."</td>";
 echo "<td>". $res['renname']."</td>";
 echo "<td>". $res['amtsend']."</td>";
 echo "<td>". $res['dt']."</td>";
 echo "<td>". $res['tm']."</td>";
 echo"</tr>";

 
 }

 echo"</table></div></div></div></div>";  
echo"<br><br><br><br>";
?>
</body>
</html>