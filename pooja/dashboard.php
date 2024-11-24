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
<!--Template head start-->
<?php
  $pageName = 'dashboard';
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
 

  <div class="conatiner text-center">
    
  <h3 class="text-center bg-dark p-3 text-light">Dashboard</h3>
  <hr>
    <h3 class="text-center p-5 text-info bg-light">Online Hotel Room Comparision WebSite</h3>
    <div class="list-group">
    <a href="registration_add.php" class="list-group-item list-group-item-action text-warning bg-light">
            <i class="fa fa-dashcube text-info" aria-hidden="true"></i>
          Hotel Registration
        </a>
        <a href="reg_data.php" class="list-group-item list-group-item-action text-warning bg-light">
            <i class="fa fa-dashcube text-info" aria-hidden="true"></i>
           Registration List
        </a>
        <a href="Hotels_data.php" class="list-group-item list-group-item-action text-warning bg-light">
            <i class="fa fa-dashcube text-info" aria-hidden="true"></i>
          Hotel Records
        </a>
       
        <a href="Sinup_data.php" class="list-group-item list-group-item-action text-warning bg-light">
            <i class="fa fa-dashcube text-info" aria-hidden="true"></i>
            User Detail
        </a>
        
       
    </div>
</div>