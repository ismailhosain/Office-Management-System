<?php
session_start();
if(!isset($_SESSION['username'])){

    header('location:employee_login.php');
}
?>



           <?php include 'C:\xampp\htdocs\project work\database_con.php';

        if(isset($_REQUEST['l_from']))
        {
          $l_from=$_POST['l_from'];
          $l_to=$_POST['l_to'];
          $eleave=$_POST['eleave'];
          $mleave=$_POST['mleave'];
          $cleave=$_POST['cleave'];
          $apply_by=$_POST['user_id'];
          $status="Pending";
    
     $query="INSERT INTO `applied_leave` (`id`,`l_from`,`l_to`,`e_leave`,`m_leave`,`c_leave`,`apply_by`,`status`) VALUES ('','$l_from','$l_to','$eleave','$mleave','$cleave','$apply_by','$status')";
    
    $res=mysqli_query($conn,$query);
    
    if($res){
      
        header('Location:employee_leave.php');
    }else{
        echo " LEAVE NOT APPLIED, please try again!";
    }

    }

?>
           
     