<?php 
include 'dbconn.php';

if (isset($_POST['submit'])) {
	
$username = mysqli_real_escape_string($conn,$_POST['username']);
$age = mysqli_real_escape_string($conn,$_POST['age']);
$daate = mysqli_real_escape_string($conn,$_POST['daate']);
$county = mysqli_real_escape_string($conn,$_POST['county']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$phone = mysqli_real_escape_string($conn,$_POST['phone']);
$check = mysqli_real_escape_string($conn,$_POST['check']);
$message = mysqli_real_escape_string($conn,$_POST['message']);


$sql = "INSERT INTO patient(fullName,Age,date,county,email,phone,check_up,description) VALUES('$username', '$age', '$daate', '$county', '$email', '$phone', '$check','$message')";

if (mysqli_query($conn,$sql)) {
	echo "record added";
	header('location: welcome.php');
}
}

mysqli_close($conn);
?>