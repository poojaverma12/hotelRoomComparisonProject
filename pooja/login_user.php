<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="css/l.css"> 


</head>
<body>
<form class="box" action="process/user_login_process.php" method="post"> 
   <h1>Login</h1>
   <div> 
   <input type="text" name="email" id="email" placeholder="Enter Email" required>
  </div> 
   <div>
   <input type="password" class="form-control" name="password" id="name"  placeholder="Password">
   </div>
   <div>
   <button class="btn btn-sm btn-primary" type="submit" value="Login">Login</button>
   
</div>
<div>
   <button class="btn btn-sm btn-primary" type="reset" value="Reset">Reset</button>
   
</div>
  </form> 
</body>
</html>