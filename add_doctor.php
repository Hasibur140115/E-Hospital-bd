
<!DOCTYPE html>
<html>
<head>
<title>Add Doctor</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>
<body style="background: url(images/b3.jpg) no-repeat center center fixed;">

<div class="header" style="background:url('images/2.jpg') no-repeat;background-size: cover;height: 400px;">

</div>

<div class="container-fluid" >
	<div class="row" style="margin: 10px;">
		<div class="col-md-3"  >
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
				<a href="details_doctor.php" class="list-group-item text-decoration-none">Doctor Details</a>
				<a href="details_patient.php" class="list-group-item text-decoration-none">Patient Details</a>
				<a href="details_test.php" class="list-group-item text-decoration-none">Test Details</a>
				<a href="details_medicine.php" class="list-group-item text-decoration-none">Medicine Details</a>
				<a href="d_etails_staff.php" class="list-group-item text-decoration-none">Staff Details</a>
				<a href="details_ambulance.php" class="list-group-item text-decoration-none">Ambulance Details</a>
				<a href="logout.php" class="list-group-item text-decoration-none">LOGOUT</a>
			</div>
		</div>


		<div class="col-md-9" style="padding-bottom: 50px;">
			<br><br>
			<div class="card">
				<div class="card-body" style="background-color: #3498DB;color: #ffffff;">
					<center> ADD A DOCTOR
				</div></center>

				<div class="card-body">

					<form class="form-group" action="func.php" method="post">
						<label>Dr. Name:</label>
						<input type="text" name="drname" class="form-control" required><br>
						<label> Dr. Degree:</label>
						<input type="text" name="degree" class="form-control" required><br>
						<label>Specialities:</label>
						<select class="form-control" name="specilities" required>
							<option value="All">All Speciality</option>
							<option value="Breast Cancer Specialist">Breast Cancer Specialist</option>
							<option value="Burn Plastic Surgery Specialist">Burn Plastic Surgery Specialist</option>
							<option value="Cancer Specialist">Cancer Specialist</option>
							<option value="Cardiologist">Cardiologist</option>
							<option value="Chest Medicine">Chest Medicine</option>
							<option value="Child Neurologist">Child Neurologist</option>
							<option value="Colorectal Surgeon">Colorectal Surgeon</option>
							<option value="Consultant Microbiologist">Consultant Microbiologist</option>		
							<option value="Consultant Pathologist">Consultant Pathologist</option>		
							<option value="Consultant Radiologist">Consultant Radiologist</option>		
							<option value="Consultant Sonologist">Consultant Sonologist</option>		
							<option value="Dermatologist">Dermatologist</option>		
							<option value="Diabetologist">Diabetologist</option>		
							<option value="Dienician">Dienician</option>		
							<option value="Endocrine Medicine">Endocrine Medicine</option>	
							<option value="Endoscopy Specialist">Endoscopy Specialist</option>		
							<option value="Ent Specialist">Ent Specialist</option>		
							<option value="Gastroenterology">Gastroenterology</option>		
							<option value="General Surgeon">General Surgeon</option>		
							<option value="General Surgeon And Laparoscopic Specialist">General Surgeon And Laparoscopic Specialist</optio>	
							<option value="Haematologist">Haematologist</option>		
							<option value="Hepatologist">Hepatologist</option>		
							<option value="Kidney And Medicine Specialist">Kidney And Medicine Specialist</option>	
							<option value="Kidney Specialist">Kidney Speialist</option>		
							<option value="Liver And Gastroenterologist">Liver And Gastroenterologist</option>		
							<option value="Liver,Biliary And Pancreatic Surgery">Liver,Biliary And Pancreatic Surgery</option>	
							<option value="Medicine">Medicine</option>		
							<option value="Medicine And Rheumatology">Medicine And Rheumatology</option>		
							<option value="Neonatology">Neonatology</option>		
							<option value="Nephrologist">Nephrologist</option>		
							<option value="Neuro Surgeon">Neuro Surgeon</option>
							<option value="Neurology">Neurology</option>		
							<option value="Obstetrics And Gynaecology">Obstetrics And Gynaecology</option>		
							<option value="Orthopaedics Specialist">Orthopaedics Specialist</option>
							<option value="Ophthalmology">Ophthalmology </option>		
							<option value="Pain Management">Pain Management</option>		
							<option value="Pain Specialist">Pain Specialist</option>		
							<option value="Pathologist">Pathologist</option>		
							<option value="Pediatric">Pediatric</option>		
							<option value="Pediatric Surgery">Pediatric Surgery</option>
							<option value="Physical Medicine And Rehabilitation">Physical Medicine And Rehabilitation</option>	
							<option value="Physiotherapy">Physiotherapy</option>		
							<option value="Psychiatrist">Psychiatrist</option>		
							<option value="Radiologist">Radiologist</option>		
							<option value="Radiology & Imaging">Radiology & Imaging</option>		
							<option value="Respiratory Medicine">Respiratory Medicine</option>		
							<option value="Rheumatology And Medicine">Rheumatology And Medicine</option>		
							<option value="Skin And Sex Specialist">Skin And Sex Disease Specialist</option>
							<option value="Specialist In Orthopedic Surgery">Specialist In Orthopedic Surgery</option>		
							<option value="Thyroid Specialist">Thyroid Specialist</option>		
							<option value="Urology Specialist">Urology Specialist</option>		
							<option value="Urology Surgery">Urology Surgery</option>		
							<option value="Vascular Surgeon">Vascular Surgeon</option>		
																
						</select>
						<br>
						<label>Location:</label>
						<input type="text" name="branch" class="form-control" required><br>
						<label>Visiting Hour:</label>
						<input type="text" name="times" class="form-control" required><br><br>
						<label>Practice Days:</label>
						<input type="text" name="days" class="form-control" required><br>
						
						<label>Contact :</label>
						<input type="text" name="contruct" class="form-control" required><br>
						<label>Dr. Image :</label>
						<div class="input-group mb-3">
                          <div class="custom-file">
                       <input type="file" name="image" class="custom-file-input" id="inputGroupFile02">
                       <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                        </div>
                      </div>
						<center><input type="submit" class="btn btn-primary" name="dr_submit" value="submit"></center>
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