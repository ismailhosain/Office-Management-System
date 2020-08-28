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
	<title></title>
	

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="..\font page.php">ADMIN DASHBOARD</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse " id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto text-capitalize">
      <li class="nav-item">
        <a class="nav-link" href="#">CHAT WITH HR</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="task.php">EMPLOYEE TASK</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">TASK REPORT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="assign-leave.php">LEAVING APPLICATIONS</a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="admin_logout.php">LOGOUT</a>
      </li>

    </ul>
  </div>
</nav>
<div class="container-fluid mt-5">
	<div class="row justify-content-center">
		
		<div class="col-md-10 ">
			
				<h2 class="text-center">ALL RECORDS ARE PRESENTING HERE</h2>
			<hr>
		</div>
	</div>
	<div class="col-md-8">
		
		<table class="table table-bordered table-hover mt-2 ml-5">
    <thead>
      <tr class="text-center ">
      	<th>ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>PHONE</th>
        <th>DEPARTEMNT</th>
        <th>ACTION</th>
      </tr>
    </thead>
    <tbody>
    	<?php
    		include 'C:\xampp\htdocs\project work\database_con.php';
    		$no= 1;
    		$select="SELECT * from employee_reg";
    		$query=mysqli_query($conn,$select);
    		while($result=mysqli_fetch_assoc($query)) {
    		?>	
    		
      <tr class="text-center ">
      	<td><?php echo  $no ;?> </td>
        <td><?php echo $result ['username'];?> </td>
        <td><?php echo $result ['email'];?> </td>
        <td><?php echo $result ['mobile'];?> </td>
        <td><?php echo $result ['department'];?> </td>
        <td>
        	<a href="edit_user.php?id=<?php echo $result ['id'];?>"class="badge badge-success p-2">EDIT</a>
        	<a href="delete_user.php?id=<?php echo $result ['id'];?>"class="badge badge-danger p-2">DELETE</a>
        </td>
      </tr>
      <?php
      $no++;
    }

    	?>
    </tbody>
  </table>
	</div>
</div>
</div>
</body>
</html>
