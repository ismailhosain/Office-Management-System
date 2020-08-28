<?php

$servername='localhost';
$user='root';
$password='';
$db='fontpage';

$conn=mysqli_connect($servername,$user,$password,$db);

if($conn){
	?>


	<?php
}else{
	?>

	<script type="text/javascript">
	alert("connection unsuccessful");
</script>
	<?php
}

?>