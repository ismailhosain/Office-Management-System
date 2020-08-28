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
	<title>ALL LEAVE </title>
	<link rel="stylesheet" href="">
</head>    





<body>
	
<header>
		
	
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="..\font page.php"><?php echo $_SESSION['username']; ?></a>

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


<div class="container pt-5">
<h3>All EMPLOYEE LEAVE Lists</h3>
<table class="table table-striped table-hover ">
  <thead >
    <tr >
      <th class="text-center">Sr No.</th>
      <th class="text-center">Employee Name</th>
      <th class="text-center">earning Leave</th>
     <th class="text-center">Medical Leave</th>
     <th class="text-center">Casual Leave</th>
     <th class="text-center">Valid From</th>
     <th class="text-center"



     >Valid to</th>
    </tr>
  </thead>
  <tbody>
  <?php
        include 'C:\xampp\htdocs\project work\database_con.php';
        $no= 1;
        $select="Select * from `assign_leave` t1 join `employee_reg` t2 on t1.assign_to=t2.id ";
        $query=mysqli_query($conn,$select);
        while($result=mysqli_fetch_assoc($query)) {
        ?>  
        
      <tr>
        <td><?php echo  $no ;?> </td>
        <td class="text-center"><?php echo $result['username']; ?></td>
        <td class="text-center"><?php echo $result ['e_leave'];?> </td>
        <td class="text-center"><?php echo $result ['m_leave'];?> </td>
        <td class="text-center">
          <?php echo $result['c_leave'];?>
        </td>
        <td class="text-center">
          <?php echo $result['v_from'];?>
        </td>
        <td class="text-center">
          <?php echo $result['v_to'];?>
        </td>

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