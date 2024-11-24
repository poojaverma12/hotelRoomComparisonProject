<?php 

include('config/conn.php');
$id = $_GET['data'];
$sql = "DELETE FROM `hotel_name_table` WHERE `Hotel_Id` =  '$id'";
$result = mysqli_query($con , $sql);
if ($result) {
    header('location:Hotels_data.php');
}


?>