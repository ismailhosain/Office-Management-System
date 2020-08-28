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
	<title>APPLIED LEAVE </title>
	<link rel="stylesheet" href="">
</head>    





<body>
	
<header>
		
	
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#"><?php echo $_SESSION['username']; ?></a>

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
        <a class="nav-link" href="employee_task.php">EMPLOYEE TASK</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#service_section">TASK REPORT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#service_section">LEAVING APPLICATIONS</a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="employee_logout.php">LOGOUT</a>
      </li>

    </ul>
  </div>
</nav>

<div class="container pt-5">
<h3>All Applied Leave Status </h3>
<table class="table table-striped table-hover ">
  <thead >
    <tr >
          <th>Sr.no</th>
          <th>Earning Leave</th>
          <th>Medical Leave</th>
          <th>Casual Leave</th>
          <th>Leave From</th>
          <th>Leave To</th>
          <th>Status</th>
          <th>Comment</th>
    </tr>
  </thead>
  <tbody>
  <?php
        include 'C:\xampp\htdocs\project work\database_con.php';
        $no= 1;
        $user_id=$_SESSION['user_id'];
        $select="Select * from `applied_leave` where `apply_by`=$user_id ";
        $query=mysqli_query($conn,$select);
        while($result=mysqli_fetch_assoc($query)) {
        ?>  
        
      <tr>
      <td ><?php echo $no;?></td>
      <td class="mleave"><?php echo $result['e_leave'];?></td>
      <td class="mleave"><?php echo $result['m_leave'];?></td>
      <td class="cleave"><?php echo $result['c_leave'];?> </td>
      <td><?php echo $result['l_from'];?></td>
      <td class="eleave"><?php echo $result['l_to'];?></td>
      <td class="v_from" style="color:green;"><?php echo $result['status'];?></td>
      <td class="" style="color:green;"><?php echo $result['comment'];?></td>

      </tr>
      <?php
      $no++;
    }

      ?>

  </tbody>
</table> 
</div>
</header>
</body>
</html>
