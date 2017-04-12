<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Remove Employee</title>
  <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css" media="screen" title="no title">
  <link rel="stylesheet" href="style.css" media="screen" title="no title">
  <script src="js/jquery-3.1.0.min.js"></script>
  <script src="css/bootstrap/js/bootstrap.min.js"></script>
</head>
	</body>
	<div class="container">
		<div class="container" id="logo">
	      	<a class='logo' href="index.php">Inventory Management System</a>
	      	<h1>Remove Employee</h1>
    	</div>
		<div class="box-section">
			<br><br>
		<?php
			if( isset($_POST['submit']) ){
				include 'configuration.php';
				$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
  if (!$conn) {
    	echo "failed";
          die("Connection failed: " . mysqli_connect_error());
  }

				$selemp=$_POST['employee'];


				$del = "DELETE FROM person WHERE name='".$selemp."'";
				$query = mysqli_query($del);
		?>
				<div class = "progress progress-striped active">
					<div class = "progress-bar progress-bar-success" role = "progressbar" aria-valuenow = "60" aria-valuemin = "0" aria-valuemax = "100" style = "width: 40%;">
      
      				<span class = "sr-only">40% Complete</span>
   					</div>
				</div>
		<?php

				echo "Deleting the &nbsp"  .$selemp.  "&nbsp from the records";
				header("refresh:5;url=owner_dashboard.php");
			}
		?>
		</div>
	</div>
	</body>
</html>