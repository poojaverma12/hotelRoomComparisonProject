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
  $pageName = 'Hotels data';
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
<h2 class="text-center " style="background-color: pink;">Hotel Records</h2>
<?php



include('config/conn.php');


$query = "SELECT * FROM hotel_name_table ";
$res = mysqli_query($con, $query) or die("Query unsuccessful.");

// if (mysqli_num_rows($res)>0) {
//     # code...




// ?> 
<div class="container pt-3">
<h3 class=" text-center" style="background-color: #6c6c3d;">
        Add More Details 
        <a class="float-right btn btn-light text-dark" href="hotels_add.php">
            <i class="fa fa-plus" aria-hidden="true"></i>
            Add
        </a>
    </h3>

<table class="table table-bordered" >
   
   <tr>
       <th>id</th>
       <th>Hotel Name</th>
       <th>Address</th>
       <th>Single Room type price</th>
       <th>Amenities</th>
       <th>Double Room Type price</th>
       <th>Amenities</th>
       <th>Details</th>
       <th>Images</th>
       <th>Action</th>
     
   </tr>
   <?php
    while ($row = mysqli_fetch_assoc($res)) {
       
 
   ?>
    <tr>
       
       <td><?php echo $row['Hotel_Id']?></td>
       <td><?php echo $row['Hotel_name']?></td>
       <td><?php echo $row['Location'] ?></td>
       <td><?php echo $row['RoomS']?></td>
       <td><?php echo $row['AmenitiesS'] ?></td>
       <td><?php echo $row['RoomD']?></td>
       <td><?php echo $row['AmenitiesD']?></td>
       <td><?php echo $row['H_Details']?></td>
       <!-- <td><?php // echo $row['image']?></td> -->
       <td>
               <img src="uploads/<?= $row['image']; ?>" width="150" alt="" srcset=""> 
            </td>
      
      
      
       <td>
                <a  class="btn btn-warning" href="hotel_update.php?id=<?= $row['Hotel_Id'] ?>">
                    <i class="fa fa-pencil" aria-hidden="true">update</i>
                </a>
                <a href="hotel_delete.php?data=<?= $row['Hotel_Id'] ?>" class="btn btn-danger text-white">
                    <i class="fa fa-trash" aria-hidden="true"></i>delete</a>
    </td>
               
   </tr> 
     <?php } ?>
   
 
   

</table>

</div>
<?php //}?> 
</body>
</html>
