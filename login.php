<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="hh.css">

</head>
<body style="background: url('images/2.jpg') no-repeat; background-size: cover;">
	<style type="text/css"> 
		#ab1:hover{cursor: pointer;}
	</style>
<div class="container" style="width: 400px;margin-top: 60px;margin-bottom: 60px;color:#34495E;">
	<div class="card">
		<img src="images/7.png" class="card-img-top">
		<div class="card-body">
			<center><h5>Admin Login</h5><br></center>
			<center><p><a href="signup.php" class="btn btn-primary">Sign Up</a></p></center>
	


	<form class="form-group" action="func.php" method="post">
		     <label>username :</label><br>
		     <input type="text" name="username" class="form-control" placeholder="Enter username"><br> 
		    <label>password :</label><br>
		     <input type="password" name="password" class="form-control" placeholder="Enter password" required><br><br>
		  
			       <center><input type="submit" name="login_submit" id="ab1" class="btn btn-primary"></center>
		
	</form>



</div>
</div>
</div>

<footer class="container-fluid text-center" style="background-color: #23415C; height: 100px;width: 100%">
	<center><p style="font-size: 13px;color: white;padding-top: 40px;">@Copyright By Hasibur Rahman </p></center>
  	
  </footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 

</body>
</html>