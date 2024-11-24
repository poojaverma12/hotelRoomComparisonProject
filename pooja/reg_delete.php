<?php 

include('config/conn.php');
$id = $_GET['data'];
$sql = "DELETE FROM `registration` WHERE `id` =  '$id'";
$result = mysqli_query($con , $sql);
if ($result) {
    header('location:reg_data.php');
}


?>