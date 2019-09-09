<?php
$con=mysqli_connect("localhost","root","","hmdb");

if(isset($_POST['login_submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query="select * from signuptb where username='$username' and password='$password';";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)==1)
	{
		header("Location:add_doctor.php");
	}
	else
		header("Location:error.php");
  
  }


if (isset($_POST['dr_submit'])) {
    $drname=$_POST['drname'];
    $degree=$_POST['degree'];
    $specilities=$_POST['specilities'];
    $branch=$_POST['branch'];
    $times=$_POST['times'];
    $days=$_POST['days'];
    $contruct=$_POST['contruct'];
    $image=$_POST['image'];
    $query="insert into drtable(drname,degree,specilities,branch,times,days,contruct,image)values('$drname','$degree','$specilities','$branch','$times','$days','$contruct','$image')";
    $result=mysqli_query($con,$query);
    if ($result) {
      echo "<script> alert('successful')</script>";
      header("Location:add_doctor.php");
    }
  }
   $msg="";
  if(isset($_POST['dr_submit'])){
    $target="C:/xampp/htdocs/project/images".basename($_FILES['image']['name']);
    $db=mysqli_connect("localhost","root","","hmdb");
    $image =$_FILES['image']['name'];
    $sql="insert into drtable(image)values($image)";
    mysqli_query($db,$sql);
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {

      $msg=" image uploded";
    } else{
      $msg="Fail";
    }
  }


  if (isset($_POST['test_submit'])) {
     $testname=$_POST['testname'];
     $testcenter=$_POST['testcenter'];
     $testprice=$_POST['testprice'];
    $query="insert into testtable(testname,testcenter,testprice)values('$testname','$testcenter','$testprice')";
    $result=mysqli_query($con,$query);
    if ($result) {
      echo "<script> alert('successful')</script>";
      header("Location:add_test.php");
    }
  }


if (isset($_POST['amb_submit'])) {
     $division=$_POST['division'];
     $district=$_POST['district'];
     $amhospital=$_POST['amhospital'];
     $ambranch=$_POST['ambranch'];
     $amcontact=$_POST['amcontact'];
    $query="insert into amtable(division,district,amhospital,ambranch,amcontact)values('$division','$district','$amhospital','$ambranch','$amcontact')";
    $result=mysqli_query($con,$query);
    if ($result) {
     header("Location:add_ambulance.php");
    }
  }


  if (isset($_POST['med_submit'])) {
     $mdname=$_POST['mdname'];
     $mdbrand=$_POST['mdbrand'];
     $mdprice=$_POST['mdprice'];
    $query="insert into mdtable(mdname,mdbrand,mdprice)values('$mdname','$mdbrand','$mdprice')";
    $result=mysqli_query($con,$query);
    if ($result) {
      echo "<script> alert('successful')</script>";
      header("Location:add_medicine.php");
    }
  }

if (isset($_POST['news_submit'])) {
     $news_heading=$_POST['news_heading'];
     $news=$_POST['news'];
    $query="insert into newstable(news_heading,news)values('$news_heading','$news')";
    $result=mysqli_query($con,$query);
    if ($result) {
      echo "<script> alert('successful')</script>";
      header("Location:add_news.php");
    }
  }

  if (isset($_POST['news_update'])) {
   $serial=$_POST['serial'];
   $news_heading=$_POST['news_heading'];
   $news=$_POST['news'];
   $query="update newstable set news_heading='$news_heading', news='$news' where serial='$serial';";
   $result=mysqli_query($con,$query);
   if ($result) {
     header("Location:update.php");
   }
}



if(isset($_POST['signup_submit'])){
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$username=$_POST['username'];
$password=$_POST['password'];
$query="insert into signuptb(fname,lname,email,contact,username,password)values('$fname','$lname','$email','$contact','$username','$password')";
$result=mysqli_query($con,$query);
if($result){
  header("Location:login.php");
    }
}


if(isset($_POST['patient_submit'])){
$pname=$_POST['pname'];
$paddress=$_POST['paddress'];
$pbranch=$_POST['pbranch'];
$pdrname=$_POST['pdrname'];
$pday=$_POST['pday'];
$ptime=$_POST['ptime'];
$pcontact=$_POST['pcontact'];
$query="insert into patienttb(pname,paddress,pbranch,pdrname,pday,ptime,pcontact)values('$pname','$paddress','$pbranch','$pdrname','$pday','$ptime','$pcontact')";

$result=mysqli_query($con,$query);
if ($result) {
  header("Location:add_patient.php");
   }
}



if(isset($_POST['staff_submit'])){
$sname=$_POST['sname'];
$sdivision=$_POST['sdivision'];
$sdistrict=$_POST['sdistrict'];
$sbranch=$_POST['sbranch'];
$scatagory=$_POST['scatagory'];
$scontact=$_POST['scontact'];

$query="insert into stafftb(sname,sdivision,sdistrict,sbranch,scatagory,scontact)values('$sname' , '$sdivision' , '$sdistrict' , '$sbranch' , '$scatagory' , '$scontact')";
$result=mysqli_query($con,$query);
if ($result) {
  header("Location:add_staff.php");
  }
}

function get_staff_details(){
  global $con;
  $query="select * from stafftb";
  $result=mysqli_query($con,$query);
  while($row=mysqli_fetch_array($result)){
    $sname=$row['sname'];
    $sdivision=$row['sdivision'];
    $sdistrict=$row['sdistrict'];
    $sbranch=$row['sbranch'];
    $scatagory=$row['scatagory'];
    $scontact=$row['scontact'];

    echo "<tr>
            <td>$sname</td>
            <td>$sdivision</td>
            <td>$sdistrict</td>
            <td>$sbranch</td>
            <td>$scatagory</td>
            <td>$scontact</td>
           
          </tr>";
  }
}


function get_branch(){
  global $con;
  $query="select * from drtable";
  $result=mysqli_query($con,$query);
  while($row=mysqli_fetch_array($result)){
  
    $branch=$row['branch'];
   
    echo "
         <p>$branch</p>
        ";
  }
}



function get_patient_details(){
  global $con;
  $query="select * from patienttb";
  $result=mysqli_query($con,$query);
  while($row=mysqli_fetch_array($result)){
    $pname=$row['pname'];
    $paddress=$row['paddress'];
    $pbranch=$row['pbranch'];
    $pdrname=$row['pdrname'];
    $pday=$row['pday'];
    $ptime=$row['ptime'];
    $pcontact=$row['pcontact'];
    echo "<tr>
            <td>$pname</td>
            <td>$paddress</td>
            <td>$pbranch</td>
            <td>$pdrname</td>
            <td>$pday</td>
            <td>$ptime</td>
            <td>$pcontact</td>
          </tr>";
  }
}

function get_doctor_details(){
  global $con;
  $query="select * from drtable";
  $result=mysqli_query($con,$query);
  while($row=mysqli_fetch_array($result)){
    $doctor_name=$row['drname'];
    $doctor_degree=$row['degree'];
    $doctor_specialities=$row['specilities'];
    $doctor_branch=$row['branch'];
    $doctor_time=$row['times'];
    $doctor_days=$row['days'];
    $doctor_contruct=$row['contruct'];
    echo "<tr>
            <td>$doctor_name</td>
            <td>$doctor_degree</td>
            <td>$doctor_specialities</td>
            <td>$doctor_branch</td>
            <td>$doctor_time</td>
            <td>$doctor_days</td>
            <td>$doctor_contruct</td>
          </tr>";
  }
}


function get_test_details(){
  global $con;
  $query="select * from testtable";
  $result=mysqli_query($con,$query);
  while($row=mysqli_fetch_array($result)){
    $testname=$row['testname'];
    $testcenter=$row['testcenter'];
    $testprice=$row['testprice'];
    echo "<tr>
            <td>$testname</td>
            <td>$testcenter</td>
            <td>$testprice</td>
          </tr>";
  }
}

function get_medicine_details(){
  global $con;
  $query="select * from mdtable";
  $result=mysqli_query($con,$query);
  while($row=mysqli_fetch_array($result)){
    $mdname=$row['mdname'];
    $mdbrand=$row['mdbrand'];
    $mdprice=$row['mdprice'];
    echo "<tr>
            <td>$mdname</td>
            <td>$mdbrand</td>
            <td>$mdprice</td>
          </tr>";
  }
}

function get_ambulance_details(){
  global $con;
  $query="select * from amtable";
  $result=mysqli_query($con,$query);
  while($row=mysqli_fetch_array($result)){
    $division=$row['division'];
    $district=$row['district'];
    $hospital=$row['amhospital'];
    $branch=$row['ambranch'];
    $contact=$row['amcontact'];
    echo "<tr>
            <td>$division</td>
            <td>$district</td>
            <td>$hospital</td>
            <td>$branch</td>
            <td>$contact</td>
          </tr>";
  }
}

function display_docs(){

  global $con;
  $query="select * from drtable";
  $result=mysqli_query($con,$query);
  while ($row=mysqli_fetch_array($result))
   {
    $pdrname=$row['drname'];
    echo '<option value="'.$pdrname.'">'.$pdrname.'</option>';
  }
}

function display_branch(){

  global $con;
  $query="select * from drtable";
  $result=mysqli_query($con,$query);
  while ($row=mysqli_fetch_array($result))
   {
    $branch=$row['branch'];
    echo '<option value="'.$branch.'">'.$branch.'</option>';
  }
}

function display_visit_hour(){

  global $con;
  $query="select * from drtable";
  $result=mysqli_query($con,$query);
  while ($row=mysqli_fetch_array($result))
   {
    $visit=$row['times'];
    echo '<option value="'.$visit.'">'.$visit.'</option>';
  }
}

function display_news_heading1(){
  global $con;
  $query="select * from  newstable";
  $result=mysqli_query($con,$query);
  while ($row=mysqli_fetch_array($result)) {
    $news_heading=$row['news_heading'];
    $sl=$row['serial'];
    if ($sl==1) {
      echo "
      ".$news_heading."
      ";
    }
  }
}
function display_news_heading2(){
  global $con;
  $query="select * from  newstable";
  $result=mysqli_query($con,$query);
  while ($row=mysqli_fetch_array($result)) {
    $news_heading=$row['news_heading'];
    $sl=$row['serial'];
    if ($sl==2) {
      echo "
      ".$news_heading."
      ";
    }
  }
}
function display_news_heading3(){
  global $con;
  $query="select * from  newstable";
  $result=mysqli_query($con,$query);
  while ($row=mysqli_fetch_array($result)) {
    $news_heading=$row['news_heading'];
    $sl=$row['serial'];
    if ($sl==3) {
      echo "
      ".$news_heading."
      ";
    }
  }
}
function display_news_heading4(){
  global $con;
  $query="select * from  newstable";
  $result=mysqli_query($con,$query);
  while ($row=mysqli_fetch_array($result)) {
    $news_heading=$row['news_heading'];
    $sl=$row['serial'];
    if ($sl==4) {
      echo "
      ".$news_heading."
      ";
    }
  }
}
function display_news_heading5(){
  global $con;
  $query="select * from  newstable";
  $result=mysqli_query($con,$query);
  while ($row=mysqli_fetch_array($result)) {
    $news_heading=$row['news_heading'];
    $sl=$row['serial'];
    if ($sl==5) {
      echo "
      ".$news_heading."
      ";
    }
  }
}
function display_news_heading6(){
  global $con;
  $query="select * from  newstable";
  $result=mysqli_query($con,$query);
  while ($row=mysqli_fetch_array($result)) {
    $news_heading=$row['news_heading'];
    $sl=$row['serial'];
    if ($sl==6) {
      echo "
      ".$news_heading."
      ";
    }
  }
}
function display_news_heading7(){
  global $con;
  $query="select * from  newstable";
  $result=mysqli_query($con,$query);
  while ($row=mysqli_fetch_array($result)) {
    $news_heading=$row['news_heading'];
    $sl=$row['serial'];
    if ($sl==7) {
      echo "
      ".$news_heading."
      ";
    }
  }
}

function display_news1(){
  global $con;
  $query="select * from newstable";
  $result=mysqli_query($con,$query);
  while ($row=mysqli_fetch_array($result)) {
    $news_heading=$row['news_heading'];
    $news=$row['news'];
    $sl=$row['serial'];
    if ($sl==1) {
       echo "<div class='modal-dialog modal-lg'>
      <div class='modal-content'>
      
        <div class='modal-header'>
          <h2 class='modal-title'>".$news_heading."</h2>
          <button type='button' class='close' data-dismiss='modal'>×</button>
        </div>
        
        <!-- Modal body -->
        <div class='modal-body'>
          
            <div class='col-sm-12' >
              <img class='img-fluid' src='images/hospital_image1.jpg'>
            </div>     
          <br>
          <p><b>" .$news."</b></p>
         
          <br>

        </div>
        
        <!-- Modal footer -->
        <div class='modal-footer'>
          <button type='button' class='btn btn-danger' data-dismiss='modal'>Close</button>
        </div>
      </div>
    </div>";
      }     
    }
  }

function display_news2(){
  global $con;
  $query="select * from newstable";
  $result=mysqli_query($con,$query);
  while ($row=mysqli_fetch_array($result)) {
    $news_heading=$row['news_heading'];
    $news=$row['news'];
    $sl=$row['serial'];
    if ($sl==2) {
       echo "<div class='modal-dialog modal-lg'>
      <div class='modal-content'>
      
        <div class='modal-header'>
          <h2 class='modal-title'>".$news_heading."</h2>
          <button type='button' class='close' data-dismiss='modal'>×</button>
        </div>
        
        <!-- Modal body -->
        <div class='modal-body'>
          
            <div class='col-sm-12' >
              <img class='img-fluid' src='images/hospital_image1.jpg'>
            </div>    
          <br>
          <p><b>" .$news."</b></p>
         
          <br>

        </div>
        
        <!-- Modal footer -->
        <div class='modal-footer'>
          <button type='button' class='btn btn-danger' data-dismiss='modal'>Close</button>
        </div>
      </div>
    </div>";
      }     
    }
  }

function display_news3(){
  global $con;
  $query="select * from newstable";
  $result=mysqli_query($con,$query);
  while ($row=mysqli_fetch_array($result)) {
    $news_heading=$row['news_heading'];
    $news=$row['news'];
    $sl=$row['serial'];
    if ($sl==3) {
       echo "<div class='modal-dialog modal-lg'>
      <div class='modal-content'>
      
        <div class='modal-header'>
          <h2 class='modal-title'>".$news_heading."</h2>
          <button type='button' class='close' data-dismiss='modal'>×</button>
        </div>
        
        <!-- Modal body -->
        <div class='modal-body'>
          
            <div class='col-sm-12' >
              <img class='img-fluid' src='images/hospital_image1.jpg'>
            </div>
            <br>
          <p><b>" .$news."</b></p>
         
          <br>

        </div>
        
        <!-- Modal footer -->
        <div class='modal-footer'>
          <button type='button' class='btn btn-danger' data-dismiss='modal'>Close</button>
        </div>
      </div>
    </div>";
      }     
    }
  }
  function display_news4(){
  global $con;
  $query="select * from newstable";
  $result=mysqli_query($con,$query);
  while ($row=mysqli_fetch_array($result)) {
    $news_heading=$row['news_heading'];
    $news=$row['news'];
    $sl=$row['serial'];
    if ($sl==4) {
       echo "<div class='modal-dialog modal-lg'>
      <div class='modal-content'>
      
        <div class='modal-header'>
          <h2 class='modal-title'>".$news_heading."</h2>
          <button type='button' class='close' data-dismiss='modal'>×</button>
        </div>
        
        <!-- Modal body -->
        <div class='modal-body'>
            <div class='col-sm-12' >
              <img class='img-fluid' src='images/hospital_image1.jpg'>
            </div>
            <br>
          <p><b>" .$news."</b></p>
         
          <br>

        </div>
        
        <!-- Modal footer -->
        <div class='modal-footer'>
          <button type='button' class='btn btn-danger' data-dismiss='modal'>Close</button>
        </div>
      </div>
    </div>";
      }     
    }
  }

function display_news5(){
  global $con;
  $query="select * from newstable";
  $result=mysqli_query($con,$query);
  while ($row=mysqli_fetch_array($result)) {
    $news_heading=$row['news_heading'];
    $news=$row['news'];
    $sl=$row['serial'];
    if ($sl==5) {
       echo "<div class='modal-dialog modal-lg'>
      <div class='modal-content'>
      
        <div class='modal-header'>
          <h2 class='modal-title'>".$news_heading."</h2>
          <button type='button' class='close' data-dismiss='modal'>×</button>
        </div>
        
        <!-- Modal body -->
        <div class='modal-body'>
        
            <div class='col-sm-12' >
              <img class='img-fluid' src='images/hospital_image1.jpg'>
            </div>
            <br>
          <p><b>" .$news."</b></p>
         
          <br>

        </div>
        
        <!-- Modal footer -->
        <div class='modal-footer'>
          <button type='button' class='btn btn-danger' data-dismiss='modal'>Close</button>
        </div>
      </div>
    </div>";
      }     
    }
  }
function display_news6(){
  global $con;
  $query="select * from newstable";
  $result=mysqli_query($con,$query);
  while ($row=mysqli_fetch_array($result)) {
    $news_heading=$row['news_heading'];
    $news=$row['news'];
    $sl=$row['serial'];
    if ($sl==6) {
       echo "<div class='modal-dialog modal-lg'>
      <div class='modal-content'>
      
        <div class='modal-header'>
          <h2 class='modal-title'>".$news_heading."</h2>
          <button type='button' class='close' data-dismiss='modal'>×</button>
        </div>
        
        <!-- Modal body -->
        <div class='modal-body'>
          
            <div class='col-sm-6' >
              <img class='img-fluid' src='images/hospital_image1.jpg'>
            </div>
            <br>
          <p><b>" .$news."</b></p>
         
          <br>

        </div>
        
        <!-- Modal footer -->
        <div class='modal-footer'>
          <button type='button' class='btn btn-danger' data-dismiss='modal'>Close</button>
        </div>
      </div>
    </div>";
      }     
    }
  }

function display_news7(){
  global $con;
  $query="select * from newstable";
  $result=mysqli_query($con,$query);
  while ($row=mysqli_fetch_array($result)) {
    $news_heading=$row['news_heading'];
    $news=$row['news'];
    $sl=$row['serial'];
    if ($sl==7) {
       echo "<div class='modal-dialog modal-lg'>
      <div class='modal-content'>
      
        <div class='modal-header'>
          <h2 class='modal-title'>".$news_heading."</h2>
          <button type='button' class='close' data-dismiss='modal'>×</button>
        </div>
        
        <!-- Modal body -->
        <div class='modal-body'>
            <div class='col-sm-6' >
              <img class='img-fluid' src='images/hospital_image1.jpg'>
            </div>
            <br>
          <p><b>" .$news."</b></p>
         
          <br>

        </div>
        
        <!-- Modal footer -->
        <div class='modal-footer'>
          <button type='button' class='btn btn-danger' data-dismiss='modal'>Close</button>
        </div>
      </div>
    </div>";
      }     
    }
  }








function get_dr_details(){
  global $con;
  $query="select * from drtable";
  $result=mysqli_query($con,$query);
  while ($row=mysqli_fetch_array($result)) {
      $serial=$row['serial'];
      $doctor_name=$row['drname'];
      $doctor_degree=$row['degree'];
      $doctor_specialities=$row['specilities'];
      $doctor_branch=$row['branch'];
      $doctor_time=$row['times'];
      $doctor_days=$row['days'];
      $doctor_contruct=$row['contruct'];
      for ($i=0; $i < 1; $i++) { 
      echo " 
      <div class='col-4'>
       <div class='card' style='box-shadow: 0 4px 10px 0 rgba(0, 0, 0, 0.5);'>
       <div class='card-img'>
        <img src= 'images/".$row['image']." ' style='height:320px;width:100% '> 
      </div>
        <div class='card-body' style='hight:400px;'>
        <h4 class='card-title'> ".$doctor_name." </h4>
        <p><b>Degree: </b>".$doctor_degree."</p>
        <p><b>Specilities: </b>".$doctor_specialities."</p>
        <p><b>Branch:</b> ".$doctor_branch."</p>
        <p><b>Visiting Time: </b>".$doctor_time."</p>
        <p><b>Practice Days: </b>".$doctor_days."</p>
         </div>
         <p><button id='dd'>Get an Appoinment</button></p>
         </div>
         </div><br>
      ";
    }
  } 
}


?>