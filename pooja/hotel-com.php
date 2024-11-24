<?php

session_start();
//echo "welcome".$_SESSION['user_name'];
 $UserProfile = $_SESSION['user_name'];
if($UserProfile == true){
  
}
  else{
      header('location:login_user.php');
  } 

?>
<!DOCTYPE html>
<!--Template head start-->
<?php

  include ('partials/nav.php');
  include ('partials/head.php');
   ?>
   <!--Template head end-->
   
   <!-- Template body start -->
   <?php
    include ('partials/footer.php');
    include ('partials/scripts.php');
    ?>
    <!-- Template body end -->

    <?php 
include('config/conn.php');

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Hotels</title>
   
</head>
<body>
<div class="row-12 text-center text-info p-2"style="background-color:#e3f2fd;">
  <h2> Please Choose Your Hotels For Hotel Comparision</h2>
</div>
<hr>
<div class="row">
  
  <div class="col-6 p-3 " style="background-color:#e3f2fd;"> 
<form  method="POST">


<label for="Hotel list">Choose:</label>
<?php 
    $query = 'SELECT * FROM hotel_name_table';
    $result = mysqli_query($con,$query) or die (mysqli_error($con));
    
?>
<select name="Hotel1" id='Hotel list'>
    <option value=" value">Select Hotel Name</option>
<?php
  $query1 = 'SELECT * FROM hotel_name_table';
  $result1 = mysqli_query($con,$query) or die (mysqli_error($con));
While($rows1=mysqli_fetch_assoc($result1))
{
  ?>

  <option value="<?= $rows1['Hotel_Id']  ?>"><?= $rows1['Hotel_name']  ?></option>
    // $Hotel_name=$rows['Hotel_name'];
    // $id=$rows['Hotel_Id'];
    // $add=$row['Address'];

    
    <?php 
}
?>
</select>
</div>

<div class="col-6 p-3 text-right" style="background-color: #e3f2fd;"> 
<label for="Hotellist">Choose:</label>
<select name="Hotel2" id='Hotellist'>
    <option value="value">Select Hotel Name</option>
    <?php
While($rows=mysqli_fetch_assoc($result))
{
  ?>

  <option value="<?= $rows['Hotel_Id']  ?>"><?= $rows['Hotel_name']  ?></option>
    <!-- // $Hotel_name=$rows['Hotel_name']; -->
    <!-- // $id=$rows['Hotel_Id']; -->
    <!-- // $add=$row['Address']; #e3f2fd;-->

    
    <?php 
}
?>
</select>
</div>
</div>
<div class="row-12 text-center p-2" style="background-color: #d4d4aa">
<input class="btn btn-light" type="submit" name="submit" value="Submit" />
</form>
<?php 

  
  if(isset($_POST['submit']))
    {
      $hotel1 = isset($_POST['Hotel1'])?$_POST['Hotel1']:'';
      
      $hotel2 = $_POST['Hotel2'];
      
       
       $query = "SELECT * FROM `hotel_name_table` WHERE `Hotel_id`='$hotel1'";
    $result = mysqli_query($con,$query) or die (mysqli_error($con));

    $row2 = mysqli_fetch_assoc($result);
        $query2 = "SELECT * FROM `hotel_name_table` WHERE `Hotel_id`='$hotel2'";
    $result2 = mysqli_query($con,$query2) or die (mysqli_error($con));

    
    $row3 = mysqli_fetch_assoc($result2);
    
        
?>

</div>
 
 <div class="row-12 p-5  ">
<table class="table table-bordered " style="background-color:white">
  <thead>
    <!-- <tr>
      <th scope="col">Hotel ID</th>
      <td scope="col"><?php //$row2['Hotel_Id']?> </td>
      <td scope="col"><?php //$row3['Hotel_Id']?></td>
      </tr> -->
    <tr>
      <th scope="col">Hotel Name</th>
      <td scope="col"><?= $row2['Hotel_name']?> </td>
      <td scope="col"><?= $row3['Hotel_name']?></td>
      </tr>
      
      <tr>
      <th scope="col">Images</th>
      <td>
       <img src="uploads/<?= $row2['image']; ?>" width="500" alt="" srcset=""> 
      </td>
      <td>
      <img src="uploads/<?= $row3['image']; ?>" width="500" alt="" srcset=""> 
      </td>
      </tr>
      
      <tr>
      <th scope="col">Address</th>
      <td scope="col"><?= $row2['Location']?> </td>
      <td scope="col"><?= $row3['Location']?> </td>
      </tr>
      <tr>
      <th scope="col">Single Room Price</th>
      <td scope="col"><?= $row2['RoomS']?> </td>
      <td scope="col"><?= $row3['RoomS']?> </td>

      <tr>
      <th scope="col">Amenities</th>
      <td scope="col"><?= $row2['AmenitiesS']?> </td>
      <td scope="col"><?= $row3['AmenitiesS']?> </td>

      <tr>
      <th scope="col">Double Room Price</th>
      <td scope="col"><?= $row2['RoomD']?> </td>
      <td scope="col"><?= $row3['RoomD']?> </td>

      <tr>
      <th scope="col">Amenities</th>
      <td scope="col"><?= $row2['AmenitiesD']?> </td>
      <td scope="col"><?= $row3['AmenitiesD']?> </td>
      </tr>

      <tr>
      <th scope="col">Hotel Details</th>
      <td scope="col"><?= $row2['H_Details']?> </td>
      <td scope="col"><?= $row3['H_Details']?> </td>
      </tr>

     
      <?php
       }
      ?>
 
  </thead>
</table>
 </div>



<section>
  <div class="row-12 container ">
<h2 class=" p-3 text-center text-primary bg-light">
  You can view Your Hotels on Google Map too...
</h2>
<div class="d-flex justify-content-center">
<!-- <div class="mx-auto" style="width: 100px;"> -->

 <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=University of Oxford&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://piratebay-proxys.com/">Piratebay</a></div><style>.mapouter{position:relative;text-align:right;width:600px;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:600px;height:400px;}.gmap_iframe {width:600px!important;height:400px!important;}</style></div>
</div>
  </div>
</section>
</body>
</html>