
<?php
session_start();

?>


<?php

include 'C:\xampp\htdocs\project work\database_con.php';
 $id =$_GET['id'];
$delete=" DELETE FROM employee_reg where id =$id";
$query=mysqli_query($conn, $delete);
if($query){

  ?>
  <script>
    alert('DELETED successful');
  </script>
  <?php
 header( 'location: dashborad.php');
 	

}else{
  ?>
  <script>
    alert('NOT DELETED');
  </script>
  <?php
}

?>