<!DOCTYPE html>
<html>
<head>
  <title>search a patient</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<?php
include("func.php");
if (isset($_POST['patient_search'])) {
  $pcontact=$_POST['search'];
  $query="select * from patienttb where pcontact='$pcontact'";
  $result=mysqli_query($con,$query);
 echo "
 <div class='container-fluid' style='margin-top:50px;'>
 <div class='card' >
 <img src='images/bnr1.jpg' class='card-img-top'>
 <div class='card-body' style='background-color:#3498DB; color:#ffffff;'>
            <table class='table table-hover'>
               <thead>
                 <tr>
                     <th>Name</th>
                     <th>Address</th>
                     <th>Branch</th>
                     <th>App Day</th>
                     <th>Visit Hour</th>
                     <th>Contact</th>
                 </tr>
             </thead>";

  while ($row=mysqli_fetch_array($result)){
    $pname=$row['pname'];
    $paddress=$row['paddress'];
    $pbranch=$row['pbranch'];
    $pday=$row['pday'];
    $ptime=$row['ptime'];
    $pcontact=$row['pcontact'];
    echo "
    <tr>
    <td>$pname</td>
    <td>$paddress</td>
    <td>$pbranch</td>
    <td>$pday</td>
    <td>$ptime</td>
    <td>$pcontact</td>
    </tr>
    ";
  }

  echo "</tbody></table></div></div></div>";
}

?>


<footer class="container-fluid text-center" style="background-color: #23415C; height: 100px;width: 100%">
    <center><p style="font-size: 13px;color: white;padding-top: 40px;">@Copyright By Hasibur Rahman </p></center>
  </footer>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>