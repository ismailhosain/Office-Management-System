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

</head>
<body>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark mb-3">
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
        <a class="nav-link" href="#about_section">CHAT WITH HR</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact_section">EMPLOYEE TASK</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#service_section">TASK REPORT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="assign-leave.php

        ">LEAVING APPLICATIONS</a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="admin_logout.php">LOGOUT</a>
      </li>

    </ul>
  </div>
</nav>

<div class="container">
<div class="col-xs-10 col-xs-push-1 well">

<!------ register form start from here ---------------------->
<form class="form-horizontal" method="post" action="inset_task.php" onsubmit="return formvalidation();">
  <fieldset>
    <legend>Assign Task  <a href="all_task.php" class="btn btn-primary" style="margin:5px;">All Task</a></legend>
	
	<!----left box----------->
	<div class="col-xs-3" style="background-color:#F0F0F0;padding:15px;">
	<div class="form-group">
      <label class="col-lg-12"><b>Employee Lists</b></label>
	  <input type="hidden" name="assign_by" value="<?php echo $_SESSION['username']?>  ">
      <div class="col-lg-12">
     <?php
        include 'C:\xampp\htdocs\project work\database_con.php';
        
        $select="SELECT * from employee_reg order by id DESC";
        $query=mysqli_query($conn,$select);
        while($result=mysqli_fetch_assoc($query)) {
        ?>  
        <div class="checkbox">
          <label>
            <input type="checkbox" name=" emp[]" value="<?php echo $result['id'];?>" > 
	           
             <?php echo $result['username'];?>
        </label>
      </div>

<?php } ?>


    </div>
    
	</div>
		<!----right box----------->
	<div class="col-xs-9">
	<div class="form-group">
      <label for="inputEmail" class="col-lg-12"><b>Message</b></label>
      <div class="col-lg-12">
        <textarea class="form-control" rows="10" name="message" placeholder="Message/ Task" style="background-color:#d9d9d9;padding:5px;" required=""></textarea>
      </div>
    </div>
   
	</div>
	
    
    <div class="form-group">
      <div class="col-lg-12 col-lg-offset-3">
        <button type="reset" class="btn btn-danger">Cancel</button>
        <button type="submit" name ="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>

<!------------------------register form end here----------------->


</div>
</div>
  


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


</body>
</html>   