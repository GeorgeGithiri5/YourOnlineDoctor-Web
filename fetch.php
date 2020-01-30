<!DOCTYPE html>
<html>
<head>
	<title>Patient Details</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
	<h2 class="doctorhead">Our Patients Record</h2>
</div>

</body>
</html>

<?php 
include 'dbconn.php';

$query = mysqli_query($conn,"SELECT fullName,Age,date,county,check_up,description FROM patient");
while ($rows = mysqli_fetch_array($query)) { ?>
	<table class="table table-bordered container">
		<thead>
			<th scope="col">Patient Name</th>
			<th scope="col">Age</th>
			<th scope="col">Date</th>
			<th scope="col">County</th>
			<th scope="col">Check Up Area</th>
			<th scope="col">Description</th>
		</thead>
	<tr>
		<td><?php echo $rows['fullName']; ?></td>
		<td><?php echo $rows['Age']; ?></td>
		<td><?php echo $rows['date']; ?></td>
		<td><?php echo $rows['county']; ?></td>
		<td><?php echo $rows['check_up']; ?></td>
		<td><?php echo $rows['description']; ?></td>
	</tr>
</table>
<form action="result.php" class="container" method="POST">
	<div class="form-group">
	<label for="patientName" style="color:black;">
		Enter Patient Name As Submitted:
	</label>
	<input type="text" name="patient" placeholder="Enter Name" required/>
	</div>

	<div class="form-group">
		<label style="color: black;">Prescribe For The Patient:</label>
		<textarea class="form-control" name="result" rows="7"></textarea>
	</div>
	<div>
		<input type="submit" name="submit" value="Submit" class="btn btn-primary">
	</div>
</form>
<?php } ?>