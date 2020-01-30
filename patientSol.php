	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

  	<h2 style="text-align: center;background-color: grey;height: 100px;font-weight: bold;padding-top: 20px;">Hello,These is our Response to your request</h2>

<?php 
		include 'dbconn.php';
		include 'result.php';
				$fetch = mysqli_query($conn,"SELECT patientName,resultDoc FROM results");

					while ($rows = mysqli_fetch_array($fetch)) { ?>
						<div>
						<ul>
							<li>
								<h3 style="font-size: 40px;"><?php echo $rows['patientName']; ?></h3>
								<p class="lead jumbotron" style="font-size: 30px;"><?php echo $rows['resultDoc']; ?></p>
							</li>

						</ul>
						</div>
						
				<?php } ?>