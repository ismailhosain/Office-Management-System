<?php
session_start();

?>

<!DOCTYPE html>
<html>

    
    <head>
        <title>Sign Up</title>
         <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  <title>bootstrap working project</title>
  
        <?php include 'edituser/style.php'?>
        
    </head>
    
    
    <body>
        <header>
            <nav class="nav navbar navbar-expand-md bg-dark navbar-dark mb-5">
  <!-- Brand -->
  <a class="text_nav navbar-brand" href="..\font page.php">AIS IT COMPANY</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  
</nav>
        </header>

    <div class="form-wrap mt-5 pb-2">
                 
    
     <form action=" " method="POST">
            
            <?php 

            include 'C:\xampp\htdocs\project work\database_con.php';

  $id=$_GET['id'];

 $select="SELECT * FROM employee_reg where id= $id ";

  $query=mysqli_query($conn,$select); 
  $result=mysqli_fetch_assoc($query);
if(isset($_POST['submit'])){
$id=$_GET['id'];
$username=$_POST['username']; 
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$department=$_POST['department'];

$update="UPDATE employee_reg set  username='$username', email='$email', mobile='$mobile',department='$department' where id=$id";

$query=mysqli_query($conn,$update);

if($query){
?>
  <script>
  alert("updated succesful");
  </script>
  <?php
  header('location:dashborad.php');
}else{

  ?>
  <script>
  alert("NOT updated");
  </script>
  <?php 
}

}

?>
                <h1>Sign Up</h1>
                
        <input type="text" placeholder="Username" name="username" value="<?php echo $result ['username'];?>" required>
        <input type="email" placeholder="Email" name="email" value="<?php echo $result ['email'];?>" required>
        <input type="number" placeholder="phonenumber" name="mobile" value="<?php echo $result ['mobile'];?>" required>
        <input type="text" placeholder="department" name="department" value="<?php echo $result ['department'];?>" required>
                <input type="submit" name="submit" value ="UPDATE" required >
                <p>have an account?<br><a style="text-decoration: none" href="employee_login.php">login</a></p>
            
            </form>
        
        </div>
    
    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    </body>



</html>
