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
	<title>all applied leave.php </title>
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

<?php include 'C:\xampp\htdocs\project work\database_con.php';?>

<?php
if(isset($_POST['approved']))
{
  $status="Approved";
  $comment=$_POST['comment'];
  $id=$_POST['id'];
  
   $query="UPDATE `applied_leave` set `status`='$status', `comment`='$comment' where `id`='$id'";
  
  $res=mysqli_query($conn,$query);
  
  if($res){
    
    
  }else{
    echo "Data not Updated, please try again!";
  }

}
if(isset($_POST['rejected']))
{
  $status= "Rejected";
  $comment=$_POST['comment'];
  $id=$_POST['id'];
  
  $query="UPDATE `applied_leave` set `status`='$status', `comment`='$comment' where `id`='$id'";
  
  $res=mysqli_query($conn,$query);
  
  if($res){
    
    
  }else{
    echo "Data not Updated, please try again!";
  }
}


?>




<div class="container pt-5">
<h3>All Applied Leave Lists</h3>
<table class="table table-striped table-hover ">
  <thead >
    <tr >
          <th>Sr No.</th>
          <th>Employee Name</th>
          <th>Earning Leave</th>
          <th>Medical Leave</th>
          <th>Casual Leave</th>
          <th>From</th>
          <th>To</th>
          <th>Status</th>
          <th>Comment</th>
          <th>&nbsp;</th>



    </tr>
  </thead>
  <tbody>
  <?php
        include 'C:\xampp\htdocs\project work\database_con.php';
        $no= 1;
        $select="Select * from `applied_leave` t1 join `employee_reg` t2 on t1.apply_by=t2.id ";
        $query=mysqli_query($conn,$select);
        $count=mysqli_num_rows($query);
		if($count>0)
			{
        while($result=mysqli_fetch_assoc($query)) {
        ?>  
        
      <tr>
        <td><?php echo  $no ;?> </td>
        <td class="text-center"><?php echo $result['username']; ?></td>
        <td class="text-center"><?php echo $result ['e_leave'];?> </td>
        <td class="text-center"><?php echo $result ['m_leave'];?> </td>
        <td class="text-center"><?php echo $result['c_leave'];?></td>
        <td class="text-center"><?php echo $result['l_from'];?></td>
        <td class="text-center"><?php echo $result['l_to'];?></td>
        <td style="color:green;"><?php echo $result['status'];?></td>
      <td><form method="post" action="" >
      <textarea name="comment"></textarea></td>
      <input type="hidden" name="id" value="<?php echo $result['id'];?>">
      <td> 
      <button type="submit" name="approved" class="btn btn-primary">Approved</button>
      <button type="submit" name="rejected" class="btn btn-primary">X</button>
      </form></td>


      </tr>
      <?php  $no++; }
}else{
	echo "No record Found!";
}

      ?>

  </tbody>
</table> 
</div>
</header>
</body>
</html>