<?php 

include 'dbconn.php';

if (isset($_POST['submit'])) {
	$patient = mysqli_real_escape_string($conn,$_POST['patient']);
	$result = mysqli_real_escape_string($conn,$_POST['result']);


	$sql = "INSERT INTO results(patientName,resultDoc) VALUES('$patient', '$result')";

	if (mysqli_query($conn,$sql)) {
	echo "record added";
	}
}


?>