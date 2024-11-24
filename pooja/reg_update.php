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

<div class="card bg-dark text-black">
  <img src="images/background.jpg" class="card-img" alt="...">
  <div class="card-img-overlay">
  <div class="card">
    <div class="card-header text-center bg-warning ">
      <h4>Updation Form</h4>
    </div>
    <div class="card-body">
    <?php
    include ('config/conn.php');
    
    $id = $_GET['id'];
    $query = "SELECT * FROM `registration` WHERE id = '$id'  ";
    $res = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($res);
?>
    <form action="process/reg_update_process.php" method="post">
    <div class="form-group">
          
          <input type="text" class="form-control" name="id" value="<?= $row['id'] ?>" id="id" aria-describedby="helpId" placeholder="" hidden>
        </div>
       
        <!-- `id`, `Aname`, `Address`, `contact`, `email`, `password`, -->
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" name="name" id="name" value="<?= $row['Aname']?>" aria-describedby="helpId" placeholder="Enter Name here">
        </div>
        <div class="form-group">
          <label for="location">Location</label>
          <input type="location" class="form-control" name="location" id="location" value="<?= $row['Address']?>" aria-describedby="helpId" placeholder="Enter your Residental Address here">
        </div>
        <div class="form-group">
          <label for="contact">contact</label>
          <input type="text" class="form-control" name="contact" id="contact" value="<?= $row['contact']?>" aria-describedby="helpId" placeholder="Enter Contact Number">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" name="email" id="email" value="<?= $row['email']?>" aria-describedby="helpId" placeholder="Enter Email">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" name="password" id="password" value="<?= $row['password']?>"  aria-describedby="helpId" placeholder="Enter password">
        </div>
        <div class="text-center mt-4">
          <button class="btn btn-sm btn-primary" type="submit">Submit</button>
          <button class="btn btn-sm btn-danger" type="reset">Reset</button>
          
          <!-- <i class="fa fa-trash" aria-hidden="true"></i> -->
          
        </div>
      </form>
    </div>
  </div>
</div>
</div>

</body>
</html>