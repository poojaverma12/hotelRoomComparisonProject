<?php 

if ( isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['password'])){
    include('../config/conn.php');

$name = $_POST['name'];
$number = $_POST['phone'];
$email = $_POST['email'];
$pwd = $_POST['password'];

$sql = "INSERT INTO `sinup`(`id`, `name`, `phone`, `email`, `password`, `timestime`) VALUES ( '','$name','$number','$email','$pwd','')";

$result = mysqli_query($con , $sql);
if ($result)
{
    header('location:../login_user.php');
}

}
?>