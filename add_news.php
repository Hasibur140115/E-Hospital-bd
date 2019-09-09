
<!DOCTYPE html>
<html>
<head>
<title>Add A NEWS</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>
<body style="background: url(images/b3.jpg) no-repeat center center fixed;">

<div class="header" style="background:url('images/2.jpg') no-repeat;background-size: cover;height: 400px;">

</div>

<div class="container-fluid" >
	<div class="row" style="margin: 10px;">
		<div class="col-md-3" >
			<br><br>
			<div class="list-group">
				<p href="" class="list-group-item active" style="background-color: #3498DB;color: #ffffff;border-color: #3498DB"> Catagories</p>
				<a href="add_doctor.php" class="list-group-item text-decoration-none">ADD DOCTOR</a>
				<a href="add_patient.php" class="list-group-item text-decoration-none">ADD PATIENT</a>
				<a href="add_test.php" class="list-group-item text-decoration-none">ADD TEST & CHARGE</a>
				<a href="add_medicine.php" class="list-group-item text-decoration-none">ADD MEDICINE</a>
				<a href="add_staff.php" class="list-group-item text-decoration-none">ADD STAFF</a>
				<a href="add_ambulance.php" class="list-group-item text-decoration-none">ADD AMBULANCE</a>
				<a href="add_news.php" class="list-group-item text-decoration-none">ADD NEWS</a>
				<a href="update.php" class="list-group-item text-decoration-none">UPDATE DATA</a>
			</div>

				<br><br>
			<div class="list-group">
				<p href="" class="list-group-item active" style="background-color: #3498DB;color: #ffffff;border-color: #3498DB">Details</p>
				<a href="details_doctor.php" class="list-group-item">Doctor Details</a>
				<a href="details_patient.php" class="list-group-item">Patient Details</a>
				<a href="details_test.php" class="list-group-item">Test Details</a>
				<a href="details_medicine.php" class="list-group-item">Medicine Details</a>
				<a href="d_etails_staff.php" class="list-group-item">Staff Details</a>
				<a href="details_ambulance.php" class="list-group-item">Ambulance Details</a>
				<a href="logout.php" class="list-group-item">LOGOUT</a>
			</div>

		</div>


		<div class="col-md-9" style="padding-bottom: 50px;">
			<br><br>
			<div class="card">
				<div class="card-body" style="background-color: #3498DB;color: #ffffff;">
					<center> ADD A NEWS
				</div></center>

				<div class="card-body">

					<form class="form-group" action="func.php" method="post">
						<label>News Heading:</label>
						<input type="text" name="news_heading" class="form-control" required><br>
						<label>News:</label>
						<input type="text" name="news" class="form-control" required><br>
						<center>
							<input type="submit" class="btn btn-primary" name="news_submit" value="submit">
						</center>

					</form>					
				</div>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
</div>


<footer class="container-fluid text-center" style="background-color: #23415C; height: 100px;width: 100%">
	<center><p style="font-size: 13px;color: white;padding-top: 40px;">@Copyright By Hasibur Rahman </p></center>
  	
  </footer>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>