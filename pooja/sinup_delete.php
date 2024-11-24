<?php 

include('config/conn.php');
$Id = $_GET['data'];
$sql = "DELETE FROM `sinup` WHERE `id` = '$Id'";
$result = mysqli_query($con , $sql);
if ($result) {
    header('location:sinup_data.php');
}


?>