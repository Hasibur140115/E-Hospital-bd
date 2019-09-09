<!DOCTYPE html>
<?php include("func.php");?>
<html lang="en">
<head>
  <title>Staff Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body style="background: url(images/b3.jpg) no-repeat center center fixed;">

<div class="jumbotron" style="background:url('images/2.jpg') no-repeat;background-size: cover;height: 400px;">
</div>

<div class="container-fluid" >
    <div class="row" style="margin: 10px;">
      <div class="col-md-3" style="padding-bottom: 50px;">
         
        <div class="list-group">
        <p href="" class="list-group-item active" style="background-color: #3498DB;color: #ffffff;border-color: #3498DB"> Catagories</p>
        <a href="add_doctor.php" class="list-group-item">ADD DOCTOR</a>
        <a href="add_patient.php" class="list-group-item">ADD PATIENT</a>
        <a href="add_test.php" class="list-group-item">ADD TEST & CHARGE</a>
        <a href="add_medicine.php" class="list-group-item">ADD MEDICINE</a>
        <a href="add_staff.php" class="list-group-item">ADD STAFF</a>
        <a href="add_ambulance.php" class="list-group-item">ADD AMBULANCE</a>
      </div>

        <br><br>
      <div class="list-group">
        <p href="" class="list-group-item active" style="background-color: #3498DB;color: #ffffff;border-color: #3498DB">Details</p>
        <a href="details_doctor.php" class="list-group-item">Doctor Details</a>
        <a href="details_patient.php" class="list-group-item">Patient Details</a>
        <a href="details_test.php" class="list-group-item">Test Details</a>
        <a href="details_medicine.php" class="list-group-item">Medicine Details</a>
        <a href="details_staff.php" class="list-group-item">Staff Details</a>
        <a href="details_ambulance.php" class="list-group-item">Ambulance Details</a>
        <a href="logout.php" class="list-group-item">LOGOUT</a>
      </div>
         </div>


          <div class="col-md-9">
             
               <div class="card">
                 <div class="card-body" style="background-color: #3498DB;color: #ffffff;">
                   <div class="row">
                      <div class="col-md-4"><h3>Staff Details</h3></div>
                        <div class="col-md-8">
                          
                            <div>
                                <input class="form-control" id="myInput" type="text" placeholder="Search By Staff_Name, Division , District , Catagories , Contact">
                              </div>
                           
                          </div> 
                      </div>
                  </div>
                </div>
            
  
  <br>
  <table class="table text-center" style="border:1px solid #DEE2E6; color: #fff;">
    <thead>
      <tr>
        <th>Staff_Name</th>
        <th>Division</th>
        <th>District</th>
        <th>Branch_Name</th>
        <th>Staff_Catagory</th>
        <th>Contact</th>

      </tr>
    </thead>
    <tbody id="myTable">
      <?php get_staff_details(); ?>
    </tbody>
  </table>
       </div> 
   </div>
          <div class="col-md-1"></div>
    </div>
  </div><br>

<footer class="container-fluid text-center" style="background-color: #23415C; height: 100px;width: 100%">
    <center><p style="font-size: 13px;color: white;padding-top: 40px;">@Copyright By Hasibur Rahman </p></center>
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

</body>
</html>