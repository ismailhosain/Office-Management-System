<?php
session_start();

?>

<!DOCTYPE html>
<html>

<head>
    <title>LOGIN</title>
    <?php include 'style1.php'?>
</head>

<body>
    <?php include 'C:\xampp\htdocs\project work\database_con.php';
    
    if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $email_search="select * from admin_reg where email='$email'";
    $query=mysqli_query($conn,$email_search);
    $email_count=mysqli_num_rows($query);
    if($email_count){
    $email_pass=mysqli_fetch_assoc($query);
    $db_pass= $email_pass['password'];
    $_SESSION['username']=$email_pass['username'];
    // $_SESSION['id']=$email_pass['id'];
    $pass_decode=password_verify($password,$db_pass);
    if($pass_decode){
    echo "login successful";

    ?>
                
                <script>
                location.replace("dashborad.php");
                </script>
                
                <?php
            }
            else{
                ?>
                <script type="text/javascript">
                alert("PASSWORD INCORRECT");
                </script>
                <?php
            }
        }
        else
            {
                ?>
                <script type="text/javascript">
                  alert("INVALID EMAIL");
                    </script>
            <?php
            }
        
    }
    
    ?>








    <div class="form-wrap">
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">

            <h1>LOG IN NOW</h1>
            <input type="email" placeholder="Email" name="email" required>
            <input type="password" placeholder="password" name="password" required>
            <input type="submit" name="submit" required >
        </form>
        <div>
            <a href="..\font page.php">Back to </a>
        </div>
    </div>

</body>

</html>
