<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  <title>AIS IT CORPORATION</title>
  <link rel="stylesheet" href="style.css">


  <style>
    *{
  margin:0;
  padding: 0;
  font-family: font-family: 'Josefin Sans', sans-serif;

}
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  
  </style>
</head>
<body>
  <!-- header start -->
  
  <header>
    
  
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">AIS IT COMPANY</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse " id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto text-capitalize">
      <li class="nav-item">
        <a class="nav-link" href="admin_style/admin_login.php">ADMIN</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="EMPLOYEE/employee_reg.php">EMPLOYEE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about_section">HR</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="whyus.php">WHY US?</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="contactus.php">CONTACT US</a>
      </li>
    </ul>
  </div>
</nav>
<div id="d
emo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/office1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>BEST TEAM ANALYZER</h3>
        <p>WELCOME TO OURWEBSITE FOR VISITING...</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/office2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>MAKE BONDING WITH YOUR CO-WORKER</h3>
        <p class="text-dark">WELCOME TO OURWEBSITE FOR VISITING...</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/office3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>GOOD WORKING EXPERIANCE</h3>
        <p>WELCOME TO OURWEBSITE FOR VISITING...</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</header>


<!-- contact us part start -->
<section>
  <div> 
<div class="view1">
  <img src="images/1.svg">
</div>

<div class="container">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      
      <h1 class="text-center mt-5 font-weight-bold">Feedback</h1>
      <hr class="bg-white">
      <h6 class="text-center">Please write your feedback about this company below:</h6>
      <h3 class="mt-4">How do you rate your overall experience?</h3>

      <form action="" method="post">
        <label class="radio-inline"><input type="radio" name="experience[]" required="" value="Very good">Excellent</label>
        <label class="radio-inline"><input type="radio" name="experience[]" required="" value="Good">Good</label>
        <label class="radio-inline"><input type="radio" name="experience[]" required="" value="Average">Average</label>
        <label class="radio-inline"><input type="radio" name="experience[]" required="" value="bad">Bad</label>

      </div>
      </div>          

      <div class="row">
        <div class="col-md-2  col-lg-2"></div>
        <label class="col-md-4  col-lg-4">Full Name*<br>
          <input type="text" id="text" class="form-control"  name="name" required="" placeholder="abc" autocomplete="off"></label>

          <label class="col-md-4  col-lg-4">Email*<br>
          <input type="email" id="email" class="form-control"  name="email" required="" placeholder="abc@gmail.com" autocomplete="off"></label>
      </div>

      <div class="row"> 
        <div class="col-md-2  col-lg-2"></div>
        <label class="col-md-4  col-lg-4">Age*<br>
          <input type="number" class="form-control" name="age" id="text" required="" placeholder="age" autocomplete="off"></label>

          <label class="col-md-4  col-lg-4 bd-light">Phone*<br>
          <input type="number" class="form-control" id="text"  name="mobile" required="" placeholder="mobile number" autocomplete="off"></label>
      </div>

      <div class="row">
        <div class="col-md-2  col-lg-2"></div>
        <label class="col-md-8  col-lg-8">Message*<br>
          <textarea id="message" name="msg" required="" placeholder="message your opinion

          " cols="48" rows="5"></textarea></label>
      </div>
            
            <div class="row text-center">
              
       <div class="col-md-12 col-lg-12 col-12 w-100 mx-auto ">
     <button class="btn btn-primary " name="submit" >SUBMIT</button>
  </div>
      </div>
      </form>
</div> 
</div>
</section>


<!-- footer part start -->
<section > 
  <div class="footer mt-5 pt-5 " style=" width:100%;position: absolute;" >
    <div class=" footer text-center text-capitalize text-white bg-success ">

  <p class="mb-0 mt-5">copyright @AIS IT COMPANY</p>

</div>
  </div>

</section>
<!-- footer part start -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  </body>
</html>
<?php

include 'database_con.php';

if (isset($_POST['submit'])) {
 $experience=$_POST['experience'];
 $username =$_POST['name'];
 $email =$_POST['email'];
 $age=$_POST['age'];
 $mobile =$_POST['mobile'];
 $message =$_POST['msg'];

 $exp="";

 foreach ($experience as $exp1 ) {
  $exp .= $exp1;
 }
  $insertquery= "insert into  font_info(experience,name,email,age,phone,massege) values('$exp','$username','$email','$age',$mobile,'$message')";
  $query= mysqli_query( $conn,$insertquery);
  if($query){
  ?>
<script type="text/javascript">
  alert("inserted successful");
</script>

  <?php
}else{
  ?>

  <script type="text/javascript">
  alert("no inserted ");
</script>
  <?php
}

}

?>