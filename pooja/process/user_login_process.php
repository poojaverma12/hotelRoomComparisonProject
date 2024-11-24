
<?php
//if (isset($_POST['id']) && isset($_POST['email']) && isset($_POST['password']))
include '../config/conn.php';

//$Id = $_POST['id'];
//$name = $_POST['name'];
//$contact = $_POST['phone'];
$email = $_POST['email'];
$pwd = $_POST['password'];
$query = "SELECT * FROM `sinup` WHERE email = '$email' AND password = '$pwd' ";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
if($row)
{
    session_start();
    $_SESSION['user_name'] = $row['email'];
    $_SESSION['password'] = $row['password'];
    $_SESSION['id'] = $row['id'];
    //echo $row['email'];
    header('location:../hotel-com.php');
}
else {
    
        echo'
        <script>
            alert("Incorrect username / password");
            window.location.href = "../login_user.php";
        </script>
        ';
       
    }
?>