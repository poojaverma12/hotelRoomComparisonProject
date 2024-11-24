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
  <!-- <a href="index.php">NextDoorHotelRoom</a> -->
   <div class="sign-up-form">
   <h2>If You Want To View The Hotels Then SignUp Your Account First </h2>
  <h1>Sign Up Now</h1>
  <form action="process/sinup_add_process.php" method="post">
    <input type="text" name="id" hidden>
  <input type="text" class="input-box" id="text" name="name" placeholder="Full Name " required>
  <input type="number" class="input-box" id="text" name="phone" placeholder="Phone Number " required>
    <input type="email" class="input-box" id="text" name="email" placeholder="Your Email" >
    <input type="password" class="input-box"  id="text" name="password" placeholder="Your Password" >
    <p><span><input type="checkbox" required></span>I agree to the terms of service</p>
    <button type="submit" class="signup-btn">Signup</button>
    <hr>
    
    <p>Do you have an account ? <a href="login_user.php">Login</a></p>
</form>
</div>     
</body>
</html>