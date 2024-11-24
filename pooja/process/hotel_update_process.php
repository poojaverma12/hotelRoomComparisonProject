<?php

if (isset($_POST['hname']) && isset($_POST['address']) && isset($_POST['roomS']) && isset($_POST['AmenitiesS'])&& isset($_POST['roomD'])&& isset($_POST['AmenitiesD'])&& isset($_POST['details'])){

include('../config/conn.php');

$Id = $_POST['id'];
$hname = $_POST['hname'];
$address = $_POST['address'];
$roomS = $_POST['roomS'];
$amenities_S = $_POST['AmenitiesS'];
$roomD = $_POST['roomD'];
$amenities_D = $_POST['AmenitiesD'];
$Details = $_POST['details'];
//$image = $_POST['image'];
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


$query = "UPDATE `hotel_name_table` SET `Hotel_name`='$hname',`Location`='$address',`RoomS`='$roomS',`AmenitiesS`='$amenities_S',`RoomD`='$roomD',`AmenitiesD`='$amenities_D',`H_Details`='$Details',`image`='$file_name' WHERE Hotel_Id ='$Id'";
//header('location: ../Hotels_data.php');
$result = mysqli_query($con , $query);
    if ($result) {
        header('location: ../Hotels_data.php');
    }

}
?>