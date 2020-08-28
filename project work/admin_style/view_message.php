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
        <a class="nav-link" href="employee_logout.php">LOGOUT</a>
      </li>

    </ul>
  </div>
</nav>


<div class="container pt-3">
<h3>Message Detail View</h3>

<div class="col-sm-12" style="background:#f9f9f9;padding:15px;">
<?php $m_id = $_GET['id'];

        include 'C:\xampp\htdocs\project work\database_con.php';
        
        $select="SELECT * from task where `t_id`='".$m_id."'";
        $query=mysqli_query($conn,$select);
        ($result=mysqli_fetch_assoc($query));
        echo $result['task']; 
        ?>  

</div>
<div class="col-sm-12">
<br>
<?php
if(isset($_POST['m_reply'])){
  $mid=$_POST['m_id'];
  $user_id=$_POST['user_id'];
  $reply=mysqli_real_escape_string($conn,$_POST['m_reply']);
  
  $query="insert into `task_reply` (`r_id`,`reply`,`m_id`,`reply_by`) values ('','$reply','$mid','$user_id')";
  $res=mysqli_query($conn,$query);
  if($res){
   
?>
  <script>
  alert ("Reply Inserted Sussfully");
  </script>
  <?php

  }else{
   
    ?>
  <script>
  alert ("Error in reply, Please try again!");
  </script>
  <?php 
  }
}
?>
<form action="" method="post">
<fieldset>
<input type="hidden" name="m_id" value="<?php echo $m_id;?>">
<input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id'];?>">
<div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label"><h3>Write your Reply:</h3></label>
      <div class="col-lg-10">
<textarea name="m_reply" rows="5" style="width:100%;background:#d9d9d9;padding:5px;" required=""></textarea>
</div></div>
  <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-primary">Submit Reply</button>
    
      </div>
    </div>
</form>
 </div>
 <div class="col-sm-12">
<fieldset>
<p>&nbsp;</p>
 
 <?php $m_id=$_GET['id'];
$query1="Select * from `task_reply` join `employee_reg` on `employee_reg`.`id`=`task_reply`.`reply_by`  where `m_id`='".$m_id."' ";
  $res1=mysqli_query($conn, $query1);
  $count1=mysqli_num_rows($res1);
while($row1=mysqli_fetch_array($res1)){
?>  



<div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label"><h3>&nbsp;</h3></label>
      <div class="col-lg-10">
  
  <div class="col-sm-12" style="background:#f9f9f9;padding:15px;">
<?php echo $row1['username'].':- '.$row1['reply'];?>
</div>

   </div>
</fieldset>
</div>
<?php }
 ?>

</div>
</div>
</body>
</html>