<?php
	if (isset($_POST['submit'])) {
		include 'configuration.php';
		$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
  if (!$conn) {
    	echo "failed";
          die("Connection failed: " . mysqli_connect_error());
  }

		$name = $_POST['full_name'];
		$username = $_POST['username'];
		$contact = $_POST['contact_no'];
		$address = $_POST['address'];

		echo "Returning back in 5 seconds..............";
		header("refresh:5;url=owner_dashboard.php");

		$insert = "INSERT INTO person (name, username, contact_no, address) VALUES (' ".$name." ',' ".$username." ',' ".$contact." ',' ".$address." ')";
		$query = mysqli_query($insert);
	}
?>