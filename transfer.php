<!--
<?php
/*
 include 'conn.php';

 if(isset($_POST['done'])){


 //and (update customer_table set totbal= totbal - '$amount' where sno = '$sno' )
 $username = $_POST['cname'];
 $amount = $_POST['amount'];
 $q = " update customer_table set totbal= totbal + '$amount'  where cname='$username'  ";

 $query = mysqli_query($con,$q);

 header('location:all_customer.php');
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
</head>
<body>

 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Transfer Money </h1>
 </div><br>

 <label> Receipant's name: </label>
 <select name="cname">

 <?php


 $q = "select * from customer_table ";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
    echo"<option>".$res['cname']."</option>";
 }

*/
 ?>
</select><br>
 <label> Amount: </label>
 <input type="text" name="amount" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>-->