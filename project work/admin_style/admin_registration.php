<?php
session_start();

?>



<!DOCTYPE html>
<html>

    
    <head>
        <title>Sign Up</title>
        <?php include 'style.php'?>
        
    </head>
    
    
    <body>
        
           <?php
    include 'C:\xampp\htdocs\project work\database_con.php';
        if(isset($_POST['submit'])){
            $username=mysqli_real_escape_string($conn,$_POST['username']);
            $email=mysqli_real_escape_string($conn,$_POST['email']);
            $mobile=mysqli_real_escape_string($conn,$_POST['mobile']);
            $password=mysqli_real_escape_string($conn,$_POST['password']);
            $cpassword=mysqli_real_escape_string($conn,$_POST['cpassword']);
          
            
            $pass=password_hash($password,PASSWORD_BCRYPT);
            $cpass=password_hash($cpassword,PASSWORD_BCRYPT);
            
            $emailquery="select * from admin_reg where email='$email'";
            $query=mysqli_query($conn,$emailquery);
            $emailcount=mysqli_num_rows($query);
            if($emailcount>0){
            echo "email already exist";
            }
            else{
            if($password===$cpassword){
            $insert="insert into admin_reg (username, email, mobile, password, cpassword) values('$username','$email','$mobile','$pass','$cpass')";
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
           
    
    
    
    <div class="form-wrap">
     <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
            
                <h1>Sign Up</h1>
                
                <input type="text" placeholder="Username" name="username" required>
                <input type="email" placeholder="Email" name="email" required>
                <input type="number" placeholder="phonenumber" name="mobile" required>
                <input type="password" placeholder="password" name="password" required>
                <input type="password" placeholder="cpassword" name="cpassword" required><input type="submit" name="submit" required >
                <p>have an account?<br><a href="admin login.php">login</a></p>
            
            </form>
        
        </div>
    
    
    
    </body>



</html>
