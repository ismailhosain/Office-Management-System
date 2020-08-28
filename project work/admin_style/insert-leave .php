<?php
session_start();
if(!isset($_SESSION['username'])){

    header('location:admin_login.php');
}
?>



           <?php include 'C:\xampp\htdocs\project work\database_con.php';





        if(isset($_REQUEST['validfrm'])){
            $validfrm=$_POST['validfrm'];
            $validto=$_POST['validto'];
            $eleave=$_POST['eleave'];
            $mleave=$_POST['mleave'];
            $mleave=$_POST['mleave'];
            $cleave=$_POST['cleave'];
            $assign_by=$_POST['assign_by'];
            $emplist=$_POST['emp'];
 
            foreach($emplist as $emp){
    
    $query="INSERT INTO `assign_leave` (`id`,`v_from`,`v_to`,`e_leave`,`m_leave`,`c_leave`,`assign_to`,`assign_by`) VALUES ('','$validfrm','$validto','$eleave','$mleave','$cleave','$emp','$assign_by')";
    
    $res=mysqli_query($conn,$query);
    
    }
    if($res){
      
        header('Location:assign-leave.php');
    }else{
        echo "Data not inserted, please try again!";
    }
}



?>
           
     