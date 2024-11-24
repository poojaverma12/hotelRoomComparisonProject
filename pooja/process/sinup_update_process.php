<?php 
// <!-- `id`, `name`, `phone`, `email`, `password`, `timestime`  -->
if (isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['password']) ) {
    
    include '../config/conn.php';

    $Id = $_POST['id'];
    $name = $_POST['name'];
    $contact = $_POST['phone'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];
   
    $sql = "UPDATE `sinup` SET  `name`='$name',`phone`='$contact',`email`='$email',`password`='$pwd' WHERE id ='$Id'";
    $result = mysqli_query($con , $sql);
    if ($result) {
        header('location: ../sinup_data.php');
    }

}





?>