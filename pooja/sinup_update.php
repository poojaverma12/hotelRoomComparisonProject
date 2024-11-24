<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="css/s.css">

</head>
<body>
<?php

session_start();
//echo "welcome".$_SESSION['user'];
 $UserProfile = $_SESSION['user'];
if($UserProfile == true){
 
}
  else{
      header('location:login_admin.php');
  } 

?>  

<?php
  $pageName = 'updation';
  include 'partials/nav.php';
  include 'partials/head.php';
   ?>
   <!--Template head end-->
   
   <!-- Template body start -->
   <?php
    include 'partials/footer.php';
    include 'partials/scripts.php';
    ?>
    <!-- Template body end -->

<!-- <div class="card bg-dark text-black">
  <img src="images/background.jpg" class="card-img" alt="...">
  <div class="card-img-overlay">
  <div class="card">
    <div class="card-header text-center bg-warning ">
      <h4>Updation Form</h4>
    </div> -->
    <div class="card-body">
    <?php
    include ('config/conn.php');
    $id = $_GET['id'];
    $query = "SELECT * FROM `sinup` WHERE id = '$id' ";
    $res = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($res);
?>
   <div class="sign-up-form">
  <h1>Sign Up Now</h1>
  <form action="process/sinup_update_process.php" method="post">
  <input type="text"  hidden  value="<?= $row['id'] ?>" name="id">
  <input type="text" class="input-box" id="name" value="<?= $row['name'] ?>" name="name" placeholder="Full Name " required>
  <input type="number" class="input-box" id="phone" value="<?= $row['phone'] ?>" name="phone" placeholder="Phone Number " required>
    <input type="email" class="input-box" id="email" value="<?= $row['email'] ?>" name="email" placeholder="Your Email" >
    <input type="password" class="input-box"  id="password" value="<?= $row['password'] ?>" name="password" placeholder="Your Password" >
    <p><span><input type="checkbox"></span>I agree to the terms of service</p>
    <button type="submit" class="signup-btn">Update</button>
    <hr>
    
    <p>Do you have an account ? <a href="login.php">Login</a></p>
</form>
</div>     
</body>
</html>