
<?php

//if (isset($_POST['hname']) && isset($_POST['address']) && isset($_POST['roomS']) && isset($_POST['AmenitiesS'])&& isset($_POST['roomD'])&& isset($_POST['AmenitiesD'])&& isset($_POST['details'])){
include('../config/conn.php');
$hname = $_POST['hname'];
$address = $_POST['address'];
$roomS = $_POST['roomS'];
$amenities_S= $_POST['AmenitiesS'];
$roomD = $_POST['roomD'];
$amenities_D = $_POST['AmenitiesD'];
$Details = $_POST['details'];

if(isset($_FILES['image'])){
    // echo "<pre>";
    // print_r($_FILES);
    // echo "</pre>";
    $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      if( move_uploaded_file($file_tmp,"../uploads/".$file_name))
      {
         echo "file moved"; 
      }
     else { echo "not uploaded"; } 
    }


  $sql = "INSERT INTO `hotel_name_table`( `Hotel_name`, `Location`, `RoomS`, `AmenitiesS`, `RoomD`, `AmenitiesD`, `H_Details`, `image`)
  VALUES ('$hname ','$address','$roomS','$amenities_S','$roomD','$amenities_D','$Details','$file_name ')";
 $result = mysqli_query($con, $sql);
 if($result)
 {
     header('location: ../Hotels_data.php');
    
    echo "inserted sccessfully";
 }



//}
// echo $_POST['hname'];
// echo $_POST['address'];
// echo $_POST['roomS'];
// echo $_POST['AmenitiesS'];
// echo $_POST['roomD'];
// echo $_POST['AmenitiesD'];
// echo $_POST['details'];


?>