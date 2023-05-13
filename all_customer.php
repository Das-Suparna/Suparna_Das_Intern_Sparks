<?php
 include 'conn.php';
 include 'header.php';
 echo"<br><br>";
 if(isset($_POST['done'])){

 $a = $_POST['sname'];

 $username = $_POST['rname'];

 $amount = $_POST['amount'];
 
 $dt = $_POST['dt'];

 $tm = $_POST['tm'];

 $q = " update customer_table set totbal= totbal + '$amount'  where cname='$username'  ";

 $query = mysqli_query($con,$q);


  $q2 = "update customer_table set totbal= totbal - '$amount' where cname = '$a'";

 $query = mysqli_query($con,$q2);



$q3 = "insert into transaction_table(senname, renname,amtsend,dt,tm) values ('$a', '$username', '$amount','$dt','$tm')"; 

$query3 = mysqli_query($con,$q3);




header('location:all_customer.php');

 $con->close();
 }

?>

<!DOCTYPE html>
<html>
<head>
 <title></title>

 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'>
 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
 <style>
  
  label,select,input{margin-left:30px;}
   td{font-weight: 530;}
  body{background-image: url('https://img.freepik.com/free-vector/hand-drawn-installment-illustration_23-2149397096.jpg?size=626&ext=jpg&ga=GA1.1.1023083493.1682422864&semt=sph')}
 </style>
</head>
<body onload="load()">

<br><br>
 <div class="container" id="table">
 
<div class="card" style="padding: 15px">
 
 <h1 class="bg-danger text-white" style="font-family: 'Lobster'; padding:15px" align="center">Details of All Customers</h1>
 <br>
 <table id="tabledata" class="table bg-white table-striped table-hover table-bordered" style="font-family:Arial, Helvetica, sans-serif">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Sno </th>
 <th> Customer Name </th>
 <th> Account No </th>
 <th> Email </th>
 <th> Total Balance </th>
 </tr >

 <?php

 include 'conn.php'; 
 $q = "select * from customer_table ";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td name="sno"> <?php echo $res['sno'];  ?> </td>
 <td>  <?php echo $res['cname'];  ?> </td>
 <td> <?php echo $res['accno'];  ?> </td>
 <td> <?php echo $res['email'];  ?> </td>
 <td name="amt"> <?php echo $res['totbal'];  ?> </td>

 </tr>

 <?php 
 }
  ?>
 </table>  

<center class="bg-white"><br><button class="btn-success btn" name="trans" onclick="d()">Transfer Money</button><br>&nbsp;</center>
</div>

</div>

<div class="col-lg-6 m-auto" id="transfer_sec">
 <form method="post" style="font-weight:bold">
  <br> <div class="card">
 <h1 align="center" style="font-family:'Lobster'; padding:20px" class="bg-danger text-white">Make a Transaction</h1>
<br>
<label> Sender's name: </label>
<select name="sname" class="form-control" style="width:90%">

<?php

 $q4 = "select * from customer_table ";

 $query = mysqli_query($con,$q4);

 while($res = mysqli_fetch_array($query)){
    echo"<option>".$res['cname']."</option>";

 }

?>
</select><br>

<label> Receipant's name: </label>
<select name="rname"  class="form-control" style="width:90%">

<?php


 $q = "select * from customer_table ";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
    echo"<option>".$res['cname']."</option>";

 }

include 'footer.php';

 ?>
</select><br>
 <label> Amount: </label>
 <input type="number" name="amount" id="amount" style="width:90%" class="form-control" required> <br>
 
 <div class="d-flex">
 <label>Date of Transaction</label>
      <div id="spacing" style="width:210px"></div>
<label>Time of Transaction</label>
</div>
<div class="d-flex">
<input type="text" class="form-control" style="width:150px" name="dt" id="dt"><br>
      <div id="spacing" style="width:210px"></div>
<input type="text" class="form-control" style="width:150px" name="tm" id="tm"><br>
</div>
<hr>
<div class="d-flex text-center" style="margin-left:290px">

<button class="btn btn-success" type="submit" name="done" onclick="alert('Transaction Successful')"> Submit </button>&nbsp;&nbsp;
<span class="btn btn-secondary" name="back" onclick="back()"> Back </span>

</div>
<br>
</div>
 </form>

</div>
 
 
 <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>
<script  type="text/javascript">
    function load()
    {
      document.getElementById("transfer_sec").style.display = "none";
      
  var date = new Date();
  var month = date.getMonth();
  var day = date.getDate();

  var year = date.getFullYear();

  dt.value += (year+"-"+month+"-"+day);


  var hours = date.getHours();
  var min = date.getMinutes();

  var sec = date.getSeconds();

  tm.value += (hours+":"+min+":"+sec);

    }
    function d(){
      document.getElementById("transfer_sec").style.display = "block";
      document.getElementById("table").style.display = "none";
    }
    
    function back(){
      document.getElementById("transfer_sec").style.display = "none";
      document.getElementById("table").style.display = "block";
    }
</script>

<?php
echo "<br><br>";

?>
</body>
</html>