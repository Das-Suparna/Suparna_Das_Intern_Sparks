<!DOCTYPE html>
<html>
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet'
integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js'
integrity='sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF'
crossorigin='anonymous'></script>
<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<link rel="stylesheet" href="style.css" type="text/css">
<script src="external.js"></script>
<style>
  nav {
      -webkit-box-shadow: 6px 9px 5px 0px rgba(212, 210, 212, 1);
      -moz-box-shadow: 6px 9px 5px 0px rgba(212, 210, 212, 1);
      box-shadow: 6px 9px 5px 0px rgba(212, 210, 212, 1);
      font-size: 20px;
      color: black;
   
  }
  li {
    padding: 0px 0px 0px 0px;
  }
  a{margin-right : 28px; padding:2px}
   body{font-size: 17px}
   a{font-size : 17px}
</style>  
<body>


<nav class="navbar navbar-expand-lg bg-white text-black fixed-top">
    <div class="container-fluid" style="font-weight: bold;">
      <a  style="color:black"  class="navbar-brand" href="banking_home_page.html"><img
          src="https://media.licdn.com/dms/image/C560BAQFgHU3sTF4LfQ/company-logo_200_200/0/1519895156650?e=2147483647&v=beta&t=e6J4j8gWdNCJ-Dhu6xEC2S3EB_6lcim27ymu6-zRQkg"
          alt="logo" style="width:50px;"><strong>&nbsp;&nbsp;THE EVERSHINE BANK</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a  style="color:black"  class="nav-link text-black active" aria-current="page" href="banking_home_page.html">HOME</a>
          </li>
          <li class="nav-item">
            <a  style="color:black"  class="nav-link text-black" href="banking_home_page.html#about">ABOUT US</a>
          </li>
          <li class="nav-item">
            <a  style="color:black"  class="nav-link text-black" href="banking_home_page.html#features">FEATURES</a>
          </li>
          <li class="nav-item dropdown">
            <a  style="color:black"  class="nav-link text-black dropdown-toggle" id="navbarDropdownMenuLink" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              CUSTOMER
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="individual_acc.php">View Individual Account&nbsp;</a></li>
              <li><a class="dropdown-item" href="all_customer.php">View All Customer Details&nbsp;</a></li>
              <li><a class="dropdown-item" href="all_transaction.php">View Transaction History&nbsp;</a></li>             
            </ul>
          </li>
          <li class="nav-item">
            <a  style="color:black"  class="nav-link text-black" href="banking_home_page.html#footer_sec">CONTACT US</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>