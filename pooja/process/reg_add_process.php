
<!-- this table insert basic hotel data and user email password for login in database table "hotel_name_table"  -->
<!-- please check the database for more explanation -->
<?php
if (isset($_POST['name']) && isset($_POST['location']) && isset($_POST['contact']) && isset($_POST['email'])&& isset($_POST['password'])){
include('../config/conn.php');
$hotel_name = $_POST['name'];
$Address = $_POST['location'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$pwd = $_POST['password'];
$sql = "INSERT INTO `registration`(`id`, `Aname`, `Address`, `contact`, `email`, `password`, `timestime`) 
 VALUES ('','$hotel_name','$Address','$contact','$email','$pwd','')";
 $result = mysqli_query($con, $sql);
 if($result)
 {
   header('location:../hotels_add.php');
 }
}
?>