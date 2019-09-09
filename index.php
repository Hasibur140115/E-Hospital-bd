<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>

<title>Home Page</title>
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="doc.css" rel="stylesheet" />

<link href='https://fonts.googleapis.com/css?family=Alfa Slab One' rel='stylesheet'>

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
          <a class="dropdown-item" href="about.php"style="color: #fff;background-color: #232827;">Goal & Objective</a>
          <a class="dropdown-item" href="#"style="color: #fff;background-color: #222827;">Message For You </a>
          <a class="dropdown-item" href="future.php"style="color: #fff;background-color: #222827;">Our Future Plan</a>
          <a class="dropdown-item" href="#"style="color: #fff;background-color: #222827;">Our Purpose</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff; ">
          Our srevice
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #222829;">
          <a class="dropdown-item" href="sr.php"style="color: #fff;background-color: #222829;">Service Center</a>
          <a class="dropdown-item" href="test_center.php"style="color: #fff;background-color: #222829;">Test & Charges</a>
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
    <form class="form-inline my-2 my-lg-0" style=" padding-right: 6px;">
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


<!-- Find Doctor -->
<div id="fixed">
<br>
<div class="d-flex justify-content-center" style=" ">
  <div class="spinner-grow text-primary" role="status">
  <span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-secondary" role="status">
  <span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-success" role="status">
  <span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-danger" role="status">
  <span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-warning" role="status">
  <span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-info" role="status">
  <span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-dark" role="status">
  <span class="sr-only">Loading...</span>
</div>
</div>
<div class="bd-example" style="margin:  40px;" >
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/s3.jpg" class="d-block w-100 rounded-lg" alt="...">
        <div class="carousel-caption d-none d-md-block" style="color: #222429;">
          <h5><b>All Dr. in One Platform</b></h5>
          <p><b>We should be established a E_Hospital with all Doctors of BD in one Platform.</b></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/s1.jpg" class="d-block w-100 rounded-lg" alt="...">
        <div class="carousel-caption d-none d-md-block" style="color: #222429;">
          <h5><b>Digitalization </b></h5>
          <p><b>It is a digital process of Hospitalism for People.</b></p>
        </div>
      </div>
       <div class="carousel-item">
        <img src="images/s5.jpg" class="d-block w-100 rounded-lg" alt="...">
        <div class="carousel-caption d-none d-md-block" style="color: #222429;">
          <h5><b>Easyer Pocess</b></h5>
          <p><b>It make the hospital systems more easyer and useable for people.</b></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/s6.jpg" class="d-block w-100 rounded-lg" alt="...">
        <div class="carousel-caption d-none d-md-block" style="color: #222429;">
          <h5 ><b>All In One Place</b></h5>
          <p><b>This E_Hospital Systems are make Hospitalism system in one Platfrom.</b></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/s4.jpg" class="d-block w-100 rounded-lg" alt="...">
        <div class="carousel-caption d-none d-md-block" style="color: #FFF;">
          <h5 ><b>Best Service</b></h5>
          <p><b>It can be supply the best service in the Hospital Systems for us.</b></p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="container"  style="height: 450px;">
	
    <h2 class="card-title text-center" style="padding-top: 130px; font-family:'Alfa Slab One'; ">E_Hospital</h2>
    <p class="card-text text-center"><b>This is a platfrom that makes all our country Hospitals are one Platfrom. We can easily known about all Hospital service information by using it. It can be provide our country Hospitalism system all information to us. we can take all hospitals service in any place using it. It can easily make this process for customars. And this website are always give the right information about any Hospital serivec for us.</b></p>
 
</div>

    <!--Main container-->
    <div class="container">
      <!--Grid row-->
      <div class="row" >
        <!--Grid column-->
        <div class="col-md-7 mb-4">
          <div class="view overlay z-depth-1-half">
            <img src="images/6.jpg" class="card-img-top" alt="">
          </div>
        </div>

        <div class="col-md-5 mb-4 text-center" >
          <br><br><br>
          <h2 style="font-family:'Alfa Slab One';"><marquee behavior="scroll" direction="right" >Our Service</marquee> </h2>
          <hr>
          <p class="text-justify"><b>We are provide some service for people.Those are finding doctors, Blood banking service, Ambulance service, clear information of any Hospital all Service, any medical test and service charge information of any center etc.<b></p>
          <a href="sr.php" class="btn btn-sm btn-outline-primary">Learn More</a>
        </div>
      </div>
       <br><br>
       </div>
      <!--Grid row-->


      <!--Grid row-->
      <div class="container">
      <div class="card-deck" >
          <div class="card" style='box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.8);'>
              <div class="card-icon-top text-center" style="padding: 50px;">
                <i class='fas fa-hospital' style='font-size:130px;color:green;'></i>
              </div>
            <div class="card-body text-center" >
              <!--Title-->
              <h4 class="card-title" style="font-family:'Alfa Slab One';">Govt. Hospital</h4>
              <!--Text-->
              <p class="text-justify">We are provide some Govment hospital Service information for people.Any one can get this information by using this website easily. And we are communicate with us for help People. </p>
              <div><a href="Govt_hospital.php"  target="_blank" class="btn btn-sm btn-outline-dark">See More</a></div>
            </div>
          </div>

          <div class="card" style='box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.8);'>
              <div class="card-icon-top text-center" style="padding: 50px;">
                <i class='  far fa-hospital' style='font-size:130px;color: #6A5ACD;'></i>
              </div>
          
            <div class="card-body text-center">
              <h4 class="card-title" style="font-family:'Alfa Slab One';">Private Hospital</h4>
              <!--Text-->
              <p class="text-justify">We are provide the Ambulance Service for people.Any one can get the Ambulance information by using this website easily.we are give the ambulance contact number of any position of our country.</p>
              <a href="private_hospital.php" target="_blank" class="btn btn-sm btn-outline-dark">See More</a>
            </div>
          </div>

          <div class="card" style='box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.8);'>
            <div class="card-icon-top text-center" style="padding: 50px;">
                <i class='fas fa-heartbeat' style='font-size:130px;color:red;'></i>
              </div>
            <div class="card-body text-center">
              <!--Title-->
              <h4 class="card-title" style="font-family:'Alfa Slab One';">Test Center</h4>
              <!--Text-->
              <p class="text-justify">We are provide the Medicine Service for people.Any one can get the any Medicine information by using this website easily.we are give the medicine Center information of any position of our country.</p>
              <a href="test_center.php" target="_blank" class="btn btn-sm btn-outline-dark">See More</a>
            </div>
          </div>
      </div>   
  </div>
<br>
<!--gfg -->




<!-- dr profile-->

<br>
<div class="container-fluid" >
  <div class="row" style="margin-left: 10px;">
    <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="images/6.jpg" class="relative" alt="" style="width:100%;height:200px;">
    </div>
    <div class="flip-box-back text-center" >
      <h2>Blood Bank</h2>
      <p class="text-justify"> We have some govmont Hospital patner. We give their service information by online.</p>
      <button class="btn btn-sm btn-outline-dark"><a href="" class="text-decoration-none">See More</a></button>
    </div>
  </div>
</div>

<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front" >
      <img src="images/7.jpg" alt="" style="width:100%;height:200px;">
    </div>
    <div class="flip-box-back text-center" >
      <h2>Ambulance Service</h2>
      <p class="text-justify" >We have some private Hospital patners.  We give their service information by online.</p>
      <button class="btn btn-sm btn-outline-dark"><a href="" class="text-decoration-none">See More</a></button>
    </div>
  </div>
</div>

<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="images/2.jpg" alt="" style="width:100%;height:200px;">
    </div>
    <div class="flip-box-back text-center" >
      <h2>Medicine Shop</h2>
      <p class="text-justify">We have some Medicine Shop patners.  We give their service information by online.</p>
      <button class="btn btn-sm btn-outline-dark"><a href="" class="text-decoration-none">See More</a></button>
    </div>
  </div>
</div>

<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="images/h1.jpg" alt="" style="width:100%;height:200px;">
    </div>
    <div class="flip-box-back text-center" >
      <h2>something</h2>
      <p class="text-justify" >We have some medical Test Center patners. We give their service information by online.
       </p>
        <button class="btn btn-sm btn-outline-dark"><a href="" class="text-decoration-none">See More</a></button>
    </div>
  </div>
</div>
  </div>
</div><br><br>

<!-- Al -->
<div class="container">
	<div class="row">
    <div class="col-4">
       
<!-- Modal footer end -->
			<div id="mySidenav" class="sidenav">
       <a href="#" id="about">About Us</a><br><br><br>
       <a href="#" id="blog">For Blood</a><br><br><br>
       <a href="#" id="projects">Doctors</a><br><br><br>
       <a href="#" id="contact">Contact</a><br><br><br>
       <a href="#" id="service">Service</a><br><br><br>
       <a href="#" id="team">Our_Team</a><br><br><br>
       <a href="#" id="ambulance">Ambulance</a><br><br><br>
       <a href="#" id="projects">Doctors</a><br>
     </div>
    <style>
#mySidenav a {
  position: absolute;
  left: -130px;
  transition: 1.2s;
  padding: 15px;
  z-index: 99;
  text-align: center;
  width: 180px;
  text-decoration: none;
  font-size: 20px;
  color: white;
  border-radius: 4px;
}

#mySidenav a:hover {
  left: 0;
}

#about {
  background-color: #4CAF50;
}

#blog {
 
  background-color: #2196F3;
}

#projects {

  background-color: #C70039;
}

#contact {
 
  background-color: #581845;
}
#service {
  
  background-color: #1C2833;
}
#team {
 
  background-color: #FF5733;
}
#ambulance {

  background-color: #FFC30F;
}
</style>

		</div>
		<div class="col-8">
			<center><h4 style="font-family:'Alfa Slab One';">Future Hospital</h4></center><br>
			
<video  width="100%" controls id="myvideo">
  <source src="upload/hospital2.mp4" type="video/mp4">
</video>

<script>
var elem = document.getElementById("myvideo");
function openFullscreen() {
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  } else if (elem.mozRequestFullScreen) { /* Firefox */
    elem.mozRequestFullScreen();
  } else if (elem.webkitRequestFullscreen) { /* Chrome, Safari & Opera */
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) { /* IE/Edge */
    elem.msRequestFullscreen();
  }
}
</script>
		</div>
	</div>
	<br>
</div><br>


<!-- Al -->
<button onclick="topFunction()" id="myBn" title="Go to top"><i class='fas fa-angle-up' style='font-size:32px'></i>
</button>
<style type="text/css">
#myBn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 20px;
  z-index: 99;
  border: none;
  outline: none;
  background-color: #008BAF;
  color: white;
  cursor: pointer;
 
  border-radius: 2px;
}

#myBn:hover {
  background-color: # ;
  
  border-radius: 50%;
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



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

</body>
</html>