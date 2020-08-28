
<?php
session_start();
if(!isset($_SESSION['username'])){

    header('location:admin_login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
	<title>ADMIN PAGE </title>
	<link rel="stylesheet" href="">
</head>    





<body>
	
<header>
		
	
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">ADMIN</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse " id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto text-capitalize">
      <li class="nav-item">
        <a class="nav-link" href="#about_section">CHAT WITH HR</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact_section">EMPLOYEE TASK</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#service_section">TASK REPORT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#service_section">LEAVING APPLICATIONS</a>
      </li>
   <li class="nav-item">
        <a class="nav-link" href="admin_logout.php">LOGOUT</a>
      </li>
    </ul>
  </div>
</nav>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>