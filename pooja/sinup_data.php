

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
  $pageName = 'User data';
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
<body>
<h2 class="text-center " style="background-color: pink;">User Records</h2>

<?php



include('config/conn.php');


$query = "SELECT * FROM `sinup`  ";
$res = mysqli_query($con, $query) or die("Query unsuccessful.");
?>
<div class="container pt-3">

<table class="table table-bordered">
   
   <tr>
       <th>id</th>
       <th> Name</th>
       <th>Contact</th>
       <th>email</th>
       <th>password</th>
       <th>Action</th>
     
   </tr>
   <?php
    while ($row = mysqli_fetch_assoc($res)) {
       
 
   ?>
    <tr>
       
    <!-- `id`, `name`, `phone`, `email`, `password`, `timestime`  -->
       <td><?php echo $row['id']?></td>
       <td><?php echo $row['name']?></td>
       <td><?php echo $row['phone']?></td>
       <td><?php echo $row['email'] ?></td>
       <td><?php echo $row['password']?></td>
       
       <td>
      
                <a href="sinup_update.php?id=<?= $row['id'] ?>" class="btn btn-warning">
                    <i class="fa fa-pencil" aria-hidden="true"></i>
                </a>
                <a href="sinup_delete.php?data=<?= $row['id'] ?>" class="btn btn-danger text-white">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                </a>
            </td>
   </tr> 
     <?php 
 } ?>
   
 
   

</table>

    <h3 class=" text-center" style="background-color: #6c6c3d;">
        Add More Details 
        <a class="float-right btn btn-light text-dark" href="sinup_add.php">
            <i class="fa fa-plus" aria-hidden="true"></i>
            Add
        </a>
    </h3>

</body>
</html>
