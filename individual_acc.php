<!--

Created By SUPARNA DAS
 
--> 

<?php
include 'conn.php';
include 'header.php';
echo"<br><br><br><br>";
?>
<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'>

<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<style>
   label{margin:0px 70px 0px 10px}
   h1 {font-family: 'Lobster';}
   form{font-family : 'Poppins'}
   body{background-image: url('https://img.freepik.com/free-vector/preferences-concept-illustration_114360-6320.jpg?size=626&ext=jpg&ga=GA1.1.1023083493.1682422864&semt=ais')}
</style>
<body>
 
<div class="container" style="width:50%;">
<div class="card">
<form method="post" id="form_data" class="form" style="box-shadow: 0px 9px 20px -3px rgba(196,193,193,1);">
<center>
<h1 font-family="font-family : Lobster" class="bg-danger text-white">Individual Account Details</h1>
<hr>

<div class="row align-items-center">
<div class="col-sm-6">
   <label class="form-label">Select Customer Name : </label>
</div>

<div class="col-sm-6">
<select name="moves" class="form-control" style="width:85% ;margin-right: 50px;height:20%;">
<option></option>
 <?php

 $q4 = "select * from customer_table ";
 $query = mysqli_query($con,$q4);
 while($res = mysqli_fetch_array($query)){
    echo"<option value='".$res['cname']."'>".$res['cname']."</option>";
 }
 ?>
      </select>
   </div>
</div>
</center>
<br>
<center><input type="submit" name="submit" value="Show Details" class="btn btn-success"></center><br>
<hr>

<?php
include 'conn.php';

if(isset($_POST['submit']))
{ 
   if(!empty($_POST['moves'])){ 
      $abc = $_POST['moves'];
      $q5 = "select *from customer_table where cname = '$abc'";
      $query = mysqli_query($con,$q5);
      while($res = mysqli_fetch_array($query)){
          echo "<div class='row align-items-start'><div class='col-sm-6'><label style='margin-left:80px'>Customer Serial No. :</label></div><div class='col-sm-6'> <span class='form-control'  style='width:85%'>  ".$res['sno']."</span></div></div><br>";
          echo "<div class='row align-items-start'><div class='col-sm-6'><label style='margin-left:80px'>Customer Name :</label> </div><div class='col-sm-6'> <span class='form-control'  style='width:85%'>  ".$res['cname']."</span></div></div><br>";
          echo "<div class='row align-items-start'><div class='col-sm-6'><label style='margin-left:80px'>Account No : </label> </div><div class='col-sm-6'> <span class='form-control'  style='width:85%'> ".$res['accno']."</span></div></div><br>";
          echo "<div class='row align-items-start'><div class='col-sm-6'><label style='margin-left:80px'>Email ID :</label> </div><div class='col-sm-6'> <span class='form-control'  style='width:85%'>".$res['email']."</span></div></div><br>";
          echo "<div class='row align-items-start'><div class='col-sm-6'><label style='margin-left:80px'>Total Balance :</label> </div><div class='col-sm-6'><span class='form-control'  style='width:85%'>".$res['totbal']."</span></div></div><br>"; 
      }
   }
}
 ?>
</form>
</div>
</div>
<!--

Created By SUPARNA DAS
 
--> 
</body>
<script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>
<?php

echo"<br><br><br><br><br><br><br>";

?>
