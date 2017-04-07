<?php
  session_start();
  if(!isset($_SESSION['admin']))
  {
    header("Location: index.php");
    exit();
  }
  include 'configuration.php';
  if(!($dbconn = @mysql_connect($dbhost, $dbuser, $dbpass))) exit('Error connecting to database.');
  mysql_select_db($db);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Dashboard - Inventory Management System</title>
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css" media="screen" title="no title">
    <link rel="stylesheet" href="style.css" media="screen" title="no title">
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="css/bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">

      <div class="container" id="logo">
  			<a class='logo' href="admin_dashboard.php">Inventory Management System</a>
  		</div>
      <br><h1>Welcome to the Administrator Dashboard</h1>
      <div class="box-section row">
        <div class="col-md-4 text-center">
          <br><br><br><br><a href="add_owner"><button type="button" class="btn btn-danger" id="add_owner">
            <span class="glyphicon glyphicon-plus-sign"></span> Click Here
          </button></a>
          <br>to
          <br><legend>Add an Owner</legend>
          <small class="text-danger text-center">Add a new Store Owner</small><br><br><br>
        </div>

        <div class="col-md-4 text-center">
          <br><br><br><br><a href="add_employee"><button type="button" class="btn btn-primary" id="add_employee">
            <span class="glyphicon glyphicon-user"></span> Click Here
          </button></a>
          <br>to
          <br><legend>Add an Employee</legend>
          <small class="text-danger text-center">Add an employee to the users-list of a store</small><br><br><br>
        </div>

        <div class="col-md-4 text-center">
          <br><br><br><br><a href="#"><button type="button" class="btn btn-primary" id="view_users">
            <span class="glyphicon glyphicon-search"></span> Click Here
          </button></a>
          <br>to
          <br><legend>Current Users</legend>
          <small class="text-danger text-center">View the list of all people using the service</small><br><br><br>

        </div>
      </div>

    </div>
  </body>
</html>
