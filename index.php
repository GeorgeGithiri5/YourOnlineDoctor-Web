<?php
 
 include 'dbconn.php';
 include 'patient_exec.php';

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Your Online Doctor</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  	<link rel="stylesheet" type="text/css" href="style.css">
  	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+icons">
  	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="body">
	<!--Header section-->
	<div class="header">
		<h1 class="heading1">YOUR ONLINE DOCTOR</h1>
		<h6 class="heading2"><i>Consultation,Prescription and Check-Up appointment from which ever distance in our country.</i></h6>
	</div>

	<div class="form">
		<form class="" enctype="multipart/form-data" action="patient_exec.php" method="POST">
			<div class="heading3">
				<h3 class="jumbotron">Please Fill in the form accordingly,every field is important for proper description and also prescription.</h3>
			</div>
			<div class="form-group">
				<label>Full Name</label>
				<input type="text" name="username" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Age</label>
				<input type="number" name="age" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Date</label>
				<input type="date" name="daate" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Gender</label>
				<input type="radio" value="male">Male
				<input type="radio" value="Female">Female
			</div>
			<div class="form-group">
				<label>Residence County</label>
				<input type="text" name="county" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Email Address</label>
				<input type="email" name="email" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Phone Number</label>
				<input type="number" name="phone" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Check-Up Area</label>
				<input type="text" name="check" class="form-control" placeholder="for example,Heart Check-Up,eye Check-Up..etc" required>
			</div>
			<div class="form-group">
				<legend>Description</legend>
				<textarea placeholder="Describe your condition..." name="message" required></textarea>
			</div>
			<div class="form-group">
				<label>Have Attended any of Our Health Facilty with the same problem</label>
				<input type="radio" name="" value="Yes">Yes
				<input type="radio" name="" value="Yes">No
			</div>
			<button type="submit" name="submit" class="btn btn-primary btn1">Submit</button>
		</form>
	</div>

	<div class="footer row">
		<div class="col-md-6">
			<p class="lead"><i class="fas fa-envelope"></i>Email:<a href="">youronlinedoctor@gmail.com</a></p>
			<p class="lead"><i class="fas fa-phone"></i>Phone: 07123456780</p>
			<p class="lead"><i class="fab fa-facebook"></i><a href="">Facebook</a></p>
			<p class="lead"><i class="fab fa-instagram"><a href=""></i>Instagram</a></p>
		</div>
		<div class="col-md-6">
			<p class="lead">We always available for you,we here to save more life and ensure Quaility and convinient Health facilities irrespective of distance.</p>
		</div>
	</div>
</div>
</body>
</html>