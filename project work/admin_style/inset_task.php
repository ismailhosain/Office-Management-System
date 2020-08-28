<?php
session_start();
if(!isset($_SESSION['username'])){

    header('location:admin_login.php');
}
?>



           <?php include 'C:\xampp\htdocs\project work\database_con.php';
        if(isset($_POST['submit'])){
            $message=mysqli_real_escape_string($conn,$_POST['message']);
            $assign_by=$_POST['assign_by'];
             $emplist=$_POST['emp'];
 
            foreach($emplist as $emp){
    
    $query="INSERT INTO `task` (`t_id`,`task`,`user_id`,`assigned_by`) VALUES ('','$message','$emp','$assign_by')";
    
    $res=mysqli_query($conn,$query);
    
    }
    if($res){
        $_SESSION['success']="Message send successfully!";
        header('Location:task.php');
    }else{
        echo "Data not inserted, please try again!";
    }
}



?>
           
     