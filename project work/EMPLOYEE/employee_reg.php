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
  <link rel="stylesheet" href="style.css">
        <?php include 'style.php'?>
        
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
           <?php include 'C:\xampp\htdocs\project work\database_con.php';
        if(isset($_POST['submit'])){
            $username=mysqli_real_escape_string($conn,$_POST['username']);
            $email=mysqli_real_escape_string($conn,$_POST['email']);
            $mobile=mysqli_real_escape_string($conn,$_POST['mobile']);
            $department=mysqli_real_escape_string($conn,$_POST['department']);
            $password=mysqli_real_escape_string($conn,$_POST['password']);
            $cpassword=mysqli_real_escape_string($conn,$_POST['cpassword']);
          
            
            $pass=password_hash($password,PASSWORD_BCRYPT);
            $cpass=password_hash($cpassword,PASSWORD_BCRYPT);
            
            $emailquery="select * from employee_reg where email='$email'";
            $query=mysqli_query($conn,$emailquery);
            $emailcount=mysqli_num_rows($query);
            if($emailcount>0){
            echo "email already exist";
            }
            else{
            if($password===$cpassword){
            $insert="insert into employee_reg (username, email, mobile,department, password, cpassword) values('$username','$email','$mobile','$department','$pass','$cpass')";
            $iquery=mysqli_query($conn,$insert);
            if($iquery){
            ?>
            <script>
                alert("inserted is succesful");
            </script>
            <?php
                    }else{

                          ?>
            <script>
                alert("inserted is unsuccesful");
            </script>
            <?php
                    }
                    }
                else
                {
 ?>
            <script>
                alert("password are not matching");
            </script>
            <?php
                }
            }
            
        }
        
        ?>
           
    
    
    
    <div class="form-wrap mt-5 pb-2">
     <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
            
                <h1>Sign Up</h1>
                
                <input type="text" placeholder="Username" name="username" required>
                <input type="email" placeholder="Email" name="email" required>
                <input type="number" placeholder="phonenumber" name="mobile" required>
                <input type="text" placeholder="department" name="department" required>
                <input type="password" placeholder="password" name="password" required>
                <input type="password" placeholder="confirm password" name="cpassword" required><input type="submit" name="submit" required >
                <p>have an account?<br><a style="text-decoration: none" href="employee_login.php">login</a></p>
            
            </form>
        
        </div>
    
    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    </body>



</html>
