<!DOCTYPE html>
<?php include("func.php");?>
<html lang="en">
<head>
  <title>Medicine Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Alfa Slab One' rel='stylesheet'>
  <link href="doc.css" rel="stylesheet" />
</head>
<body >
<nav class="navbar navbar-expand-lg navbar navbar-light " style="background-color: #23415C;">
  <a class="navbar-brand" href="#" style="color: white;"><h3>E_Hospital BD</h3></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="padding: 6px;">
    <ul class="navbar-nav mr-auto" style=" padding-right: 5px;">
      <li class="nav-item active">
        <a class="nav-link" href="index.php" style="color: #fff;">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff; ">
          About Us
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #232827;">
          <a class="dropdown-item" href=".php"style="color: #fff;background-color: #232827;">Goal & Objective</a>
          <a class="dropdown-item" href=".php"style="color: #fff;background-color: #222827;">Message For You </a>
          <a class="dropdown-item" href=".php"style="color: #fff;background-color: #222827;">Our Future Plan</a>
          <a class="dropdown-item" href=".php"style="color: #fff;background-color: #222827;">Our Purpose</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff; ">
          Our srevice
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #222829;">
          <a class="dropdown-item" href="sr.php"style="color: #fff;background-color: #222829;">Service Center</a>
          <a class="dropdown-item" href="test_center.php"style="color: #fff;background-color: #222829;">Test & Charges </a>
          <a class="dropdown-item" href="medicine_center.php"style="color: #fff;background-color: #222829;">Medicine Center</a>
          <a class="dropdown-item" href="blood_center.php"style="color: #fff;background-color: #222829;">Blood Center</a>
          <a class="dropdown-item" href="ambulance.php"style="color: #fff;background-color: #222829;">Ambulance Service</a>
        </div>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="dr.php"style="color: #fff;">Doctors</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="branch.php"style="color: #fff;">Branches</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="gallery.php"style="color: #fff;">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="news.php"style="color: #fff;">News</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php" style="color: #fff;">Contact</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="login.php"style="color: #fff;">LogIn</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" style="padding-right: 6px;">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" >Search</button>
    </form>
  </div>
</nav>

<div id="home">
    <div class="landing-text">
      <h1>HOSPITAL</h1>
      <h3>The E_hospital is Only for You.</h3>
      <button type="button" class="btn btn-outline-secondary "><a class="btn btn-default btn-sm" href="">learn More</a></button>
      <h2><b>Get A Doctor Appoinment</b></h2>
    <button type="button" class="btn btn-outline-secondary "><a class="btn btn-default btn-sm" href="">appoinment</a></button>  
    </div>
 </div>
 <div class="container-fluid" style=" margin-top: 25px;">
  
    <div class="col" > 
      <center><h2 style="font-family:'Alfa Slab One';">Our Medicine Center</h2></center> 
    </div>
</div><br>


<div class="container" >
    <div class="col">
       <div class="card">
          <div class="card-body" style="background-color: #3498DB;color: #ffffff;">
           <div class="row">
            <div class="col-md-4"><h3>Medicine Details</h3></div>
              <div class="col-md-8">
                          
              <div>
                <input class="form-control" id="myInput" type="text" placeholder="Search By Medicine_Name, Compuny_Name, Medicine_Price">
              </div>
            </div> 
          </div>
        </div>
      </div>
  <br>
  <table class="table text-center" style="border:1px solid #DEE2E6;">
    <thead>
      <tr>
        <th>Medicine_Name</th>
        <th>Medicine_Compuny_Name</th>
        <th>Medicine_Price</th>
       

      </tr>
    </thead>
    <tbody id="myTable">
      <?php get_medicine_details(); ?>
    </tbody>
  </table>
       </div> 
   </div>
  <br>

<footer class="container-fluid text-center" style="color: white;">
    <div class="row">
      <div class="col-sm-4">
        <h4>Contact</h4>
        <br>
        <p>House #48/5, Road # 5, Dakkhin Bishil, Mirpur-1, Dhaka-1216, Bangladesh </p>
        <p>Phone : +880 1754001091</p>
        <p>E-mail : hasibur140115@gmail.com</p>
      </div>
      <div class="col-sm-4">
        <h4>Our Social Link</h4>
        <br>
        <div class="icon-bar text-center" id="s-n" >
  <a class="active" href="#"><i class="fab fa-facebook"></i></a> 
  <a href="#"><i class="fab fa-google" ></i></a> 
  <a href="#"><i class="fab fa-twitter" ></i></a>
  <a href="#"><i class="fab fa-youtube" ></i></a>
</div>
      </div>
      <div class="col-sm-4">
        <h4>WE ARE </h4>
        <br>
        <img src="images/m1.jpg" class="rounded-circle" style="height: 120px; width: 120px;" >
      </div>
    </div><br>
  <div>
       <center><p style="font-size: 13px;color: white;">@Copyright By Hasibur Rahman </p></center>
  </div>
  </footer>


<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
</body>
</html>