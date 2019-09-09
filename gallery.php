<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>

<title>Gallery Center</title>
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link href="doc.css" rel="stylesheet" />


  <link rel="stylesheet" type="text/css" href="css/lightbox.css">

</head>
<body>

<!-- Menu Bar -->
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
          <a class="dropdown-item" href="sr.php"style="color: #fff;background-color: #232827;">Goal & Objective</a>
          <a class="dropdown-item" href="#"style="color: #fff;background-color: #222827;">Message For You </a>
          <a class="dropdown-item" href="#"style="color: #fff;background-color: #222827;">Our Future Plan</a>
          <a class="dropdown-item" href="#"style="color: #fff;background-color: #222827;">Our Purpose</a>
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

<!-- Fixed Font -->

<div id="home">
    <div class="landing-text">
      <h1>HOSPITAL</h1>
      <h3>The E_hospital is Only for You.</h3>
      <button type="button" class="btn btn-outline-secondary "><a class="btn btn-default btn-sm" href="">learn More</a></button>
      <h2><b>Get A Doctor Appoinment</b></h2>
    <button type="button" class="btn btn-outline-secondary "><a class="btn btn-default btn-sm" href="">appoinment</a></button>  
    </div>
 </div>

<!-- Fixed Body -->


<!-- Find Doctor -->
<div class="container-fluid" style=" margin-top: 25px;">
  
    <div class="col" > 
       <center><h2 style="font-family:'Alfa Slab One';">Our Gallery Center</h2></center>
     </div>
</div>
<!-- Alignment -->

<style type="text/css">
  .col-md-3{
    margin-bottom: 20px;
  }
</style>

<!-- dr profile-->

<section id="main" class="p-4">
  <div class="container">
    <div class="row" >
      <div class="col-md-3" >
        <a href="images/a1.jpg" data-lightbox="gallery">
          <img src="images/a1.jpg" class="img-fluid" alt="Image One">
        </a>
      </div>
      <div class="col-md-3">
        <a href="images/a2.jpg" data-lightbox="gallery">
          <img src="images/a2.jpg" class="img-fluid" alt="Image two">
        </a>
      </div>
      <div class="col-md-3">
        <a href="images/a3.jpg" data-lightbox="gallery">
          <img src="images/a3.jpg" class="img-fluid" alt="Image three">
        </a>
      </div>
      <div class="col-md-3">
        <a href="images/a4.jpg" data-lightbox="gallery">
          <img src="images/a4.jpg" class="img-fluid" alt="Image four">
        </a>
      </div>
      <div class="col-md-3">
        <a href="images/a5.jpg" data-lightbox="gallery">
          <img src="images/a5.jpg" class="img-fluid" alt="Image five">
        </a>
      </div>
      <div class="col-md-3">
        <a href="images/a6.jpg" data-lightbox="gallery">
          <img src="images/a6.jpg" class="img-fluid" alt="Image six">
        </a>
      </div>
      <div class="col-md-3">
        <a href="images/a7.jpg" data-lightbox="gallery">
          <img src="images/a7.jpg" class="img-fluid" alt="Image seven">
        </a>
      </div>
      <div class="col-md-3">
        <a href="images/a8.jpg" data-lightbox="gallery">
          <img src="images/a8.jpg" class="img-fluid" alt="Image eight">
        </a>
      </div>
      <div class="col-md-3">
        <a href="images/a9.jpg" data-lightbox="gallery">
          <img src="images/a9.jpg" class="img-fluid" alt="Image nine">
        </a>
      </div>
      <div class="col-md-3">
        <a href="images/a10.jpg" data-lightbox="gallery">
          <img src="images/a10.jpg" class="img-fluid" alt="Image ten">
        </a>
      </div>
      <div class="col-md-3">
        <a href="images/a11.jpg" data-lightbox="gallery">
          <img src="images/a11.jpg" class="img-fluid" alt="Image three">
        </a>
      </div>
      <div class="col-md-3">
        <a href="images/a12.jpg" data-lightbox="gallery">
          <img src="images/a12.jpg" class="img-fluid" alt="Image four">
        </a>
      </div>
      <div class="col-md-3">
        <a href="images/a13.jpg" data-lightbox="gallery">
          <img src="images/a13.jpg" class="img-fluid" alt="Image five">
        </a>
      </div>
      <div class="col-md-3">
        <a href="images/a14.jpg" data-lightbox="gallery">
          <img src="images/a14.jpg" class="img-fluid" alt="Image six">
        </a>
      </div>
      <div class="col-md-3">
        <a href="images/a15.jpg" data-lightbox="gallery">
          <img src="images/a15.jpg" class="img-fluid" alt="Image seven">
        </a>
      </div>
      <div class="col-md-3">
        <a href="images/a16.jpg" data-lightbox="gallery">
          <img src="images/a16.jpg" class="img-fluid" alt="Image eight">
        </a>
      </div>
      <div class="col-md-3">
        <a href="images/a17.jpg" data-lightbox="gallery">
          <img src="images/a17.jpg" class="img-fluid" alt="Image One">
        </a>
      </div>
      <div class="col-md-3">
        <a href="images/a18.jpg" data-lightbox="gallery">
          <img src="images/a18.jpg" class="img-fluid" alt="Image two">
        </a>
      </div>
      
      <div class="col-md-3">
        <a href="images/a19.jpg" data-lightbox="gallery">
          <img src="images/a19.jpg" class="img-fluid" alt="Image four">
        </a>
      </div>
      <div class="col-md-3">
        <a href="images/a20.jpg" data-lightbox="gallery">
          <img src="images/a20.jpg" class="img-fluid" alt="Image five">
        </a>
      </div>
      <div class="col-md-3">
        <a href="images/a21.jpg" data-lightbox="gallery">
          <img src="images/a21.jpg" class="img-fluid" alt="Image six">
        </a>
      </div>
      <div class="col-md-3">
        <a href="images/a22.jpg" data-lightbox="gallery">
          <img src="images/a22.jpg" class="img-fluid" alt="Image seven">
        </a>
      </div>
      <div class="col-md-3">
        <a href="images/a23.jpg" data-lightbox="gallery">
          <img src="images/a23.jpg" class="img-fluid" alt="Image eight">
        </a>
      </div>
      <div class="col-md-3">
        <a href="images/a24.jpg" data-lightbox="gallery">
          <img src="images/a24.jpg" class="img-fluid" alt="Image One">
        </a>
      </div>
      <div class="col-md-3">
        <a href="images/a25.jpg" data-lightbox="gallery">
          <img src="images/a25.jpg" class="img-fluid" alt="Image two">
        </a>
      </div>
      <div class="col-md-3">
        <a href="images/a26.jpg" data-lightbox="gallery">
          <img src="images/a26.jpg" class="img-fluid" alt="Image three">
        </a>
      </div>
      <div class="col-md-3">
        <a href="images/a27.jpg" data-lightbox="gallery">
          <img src="images/a27.jpg" class="img-fluid" alt="Image four">
        </a>
      </div>
      <div class="col-md-3">
        <a href="images/a28.jpg" data-lightbox="gallery">
          <img src="images/a28.jpg" class="img-fluid" alt="Image five">
        </a>
      </div>
      <div class="col-md-3">
        <a href="images/a29.jpg" data-lightbox="gallery">
          <img src="images/a29.jpg" class="img-fluid" alt="Image six">
        </a>
      </div>
      <div class="col-md-3">
        <a href="images/a30.jpg" data-lightbox="gallery">
          <img src="images/a30.jpg" class="img-fluid" alt="Image seven">
        </a>
      </div>
      <div class="col-md-3">
        <a href="images/a31.jpg" data-lightbox="gallery">
          <img src="images/a31.jpg" class="img-fluid" alt="Image eight">
        </a>
      </div>
      <div class="col-md-3">
        <a href="images/a32.jpg" data-lightbox="gallery">
          <img src="images/a32.jpg" class="img-fluid" alt="Image three">
        </a>
      </div>
      <div class="col-md-3">
        <a href="images/a33.jpg" data-lightbox="gallery">
          <img src="images/a33.jpg" class="img-fluid" alt="Image five">
        </a>
      </div>
      <div class="col-md-3">
        <a href="images/a34.jpg" data-lightbox="gallery">
          <img src="images/a34.jpg" class="img-fluid" alt="Image six">
        </a>
      </div>
      <div class="col-md-3">
        <a href="images/a35.jpg" data-lightbox="gallery">
          <img src="images/a35.jpg" class="img-fluid" alt="Image seven">
        </a>
      </div>
      <div class="col-md-3">
        <a href="images/a36.jpg" data-lightbox="gallery">
          <img src="images/a36.jpg" class="img-fluid" alt="Image eight">
        </a>
      </div>
      <div class="col-md-3">
        <a href="images/a37.jpg" data-lightbox="gallery">
          <img src="images/a37.jpg" class="img-fluid" alt="Image three">
        </a>
      </div>
      <div class="col-md-3">
        <a href="images/a38.jpg" data-lightbox="gallery">
          <img src="images/a38.jpg" class="img-fluid" alt="Image six">
        </a>
      </div>
      <div class="col-md-3">
        <a href="images/a39.jpg" data-lightbox="gallery">
          <img src="images/a39.jpg" class="img-fluid" alt="Image seven">
        </a>
      </div>
      <div class="col-md-3">
        <a href="images/a40.jpg" data-lightbox="gallery">
          <img src="images/a40.jpg" class="img-fluid" alt="Image eight">
        </a>
      </div>
      

    </div>
  </div>
</section>

<!-- Alignment -->

<!-- drr -->
<button class="" onclick="topFunction()" id="myBn" title="Go to top">Top</button>
<style type="text/css">
#myBn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: #008BAF;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBn:hover {
  background-color: #557DC2;
}
</style>
<!-- Al -->
<script>
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBn").style.display = "block";
  } else {
    document.getElementById("myBn").style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
<!-- footer -->

<footer class="container-fluid text-center">
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

<!-- jquary in body -->

<link href='https://fonts.googleapis.com/css?family=Alfa Slab One' rel='stylesheet'>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>


<script type="text/javascript" src="js/lightbox.js"></script>

</body>
</html>