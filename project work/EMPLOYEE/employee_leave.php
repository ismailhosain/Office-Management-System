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
	<title>EMPLOYEE LEAVE </title>
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
<h3>LEAVE LISTS <a href="applied_leave.php" class="btn btn-primary" style="margin:5px;">All Applied Leave</a></h3>
<table class="table table-striped table-hover ">
  <thead >
    <tr >
      <th class="text-center">NAME</th>
      <th class="text-center">earning Leave</th>
     <th class="text-center">Medical Leave</th>
     <th class="text-center">Casual Leave</th>
     <th class="text-center">Valid From</th>
     <th class="text-center">Valid to</th>
    </tr>
  </thead>
  <tbody>
  <?php
        include 'C:\xampp\htdocs\project work\database_con.php';
        $no= 1;
        $user_id=$_SESSION['user_id'];
        $select="Select * from `assign_leave` t1 join `employee_reg` t2 on t1.assign_to=t2.id where t2.id=$user_id ";
        $query=mysqli_query($conn,$select);
        while($result=mysqli_fetch_assoc($query)) {
        ?>  
        
      <tr>
        <td class="text-center"><?php echo $result ['username'];?> </td>
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





<div class="col-xs-6 col-xs-push-6 well">
<form class="form-horizontal" method="post" action="apply_leave.php" >
<input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id'];?>">
  <fieldset>
    <legend>Apply Leave  </legend>
  
  <!----left box----------->
    <!----right box----------->
  <div class="col-xs-9">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-3"><b>Leave From:</b></label>
      <div class="col-lg-9">
        <input type="date" name="l_from" placeholder="dd/mm/yyyy" class="form-control">
      </div>
    </div>
   <div class="form-group">
      <label for="inputEmail" class="col-lg-3"><b>Leave To:</b></label>
      <div class="col-lg-9">
        <input type="date" name="l_to" placeholder="dd/mm/yyyy" class="form-control" >
      </div>
    </div>
  <div class="form-group">
      <label for="inputEmail" class="col-lg-3"><b>Earning Leave:</b></label>
      <div class="col-lg-9">
        <input type="text" name="eleave" placeholder="No. of leave" class="form-control" >
      </div>
    </div>
  <div class="form-group">
      <label for="inputEmail" class="col-lg-3"><b>Medical Leave:</b></label>
      <div class="col-lg-9">
        <input type="text" name="mleave" placeholder="No. of leave" class="form-control" >
      </div>
    </div>
  <div class="form-group">
      <label for="inputEmail" class="col-lg-3"><b>Casual Leave:</b></label>
      <div class="col-lg-9">
          <input type="text" name="cleave" placeholder="No. of leave" class="form-control" 

          >
      </div>
    </div>
  </div>
  
    
    <div class="form-group">
      <div class="col-lg-12">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>
</div>
</div>


</header>
</body>
</html>
