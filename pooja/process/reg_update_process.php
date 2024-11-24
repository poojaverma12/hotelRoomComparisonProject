<?php 

if (isset($_POST['name']) && isset($_POST['location']) && isset($_POST['contact']) && isset($_POST['email']) && isset($_POST['password']) ) {
    
    include '../config/conn.php';

    $Id = $_POST['id'];
    $name = $_POST['name'];
    $location = $_POST['location'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];
   
    $sql = "UPDATE `registration` SET `Aname`='$name',`Address`='$location',`contact`='$contact',`email`='$email',`password`='$pwd' WHERE id ='$Id'";
    $result = mysqli_query($con , $sql);
    if ($result) {
        header('location: ../reg_data.php');
    }

}





?>