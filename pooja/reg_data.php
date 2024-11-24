



<!--Template head start-->
<?php
  $pageName = 'registration';
  include 'partials/nav.php';
  include 'partials/head.php';
   ?>
   <!--Template head end-->
   
   <!-- Template body start -->
   <?php
    include 'partials/footer.php';
    include 'partials/scripts.php';
    ?>
    <!-- Template body end -->
<body>
<h2 class="text-center " style="background-color: pink;">Hotel Registration Record</h2>

<?php



include('config/conn.php');


$query = "SELECT * FROM `registration`  ";
$res = mysqli_query($con, $query) or die("Query unsuccessful.");
?>

<div class="container pt-3">

<table class="table table-bordered">
   
   <tr>
       <th>id</th>
       <th> Name</th>
       <th>Address</th>
       <th>contact</th>
       <th>email</th>
       <th>password</th>
       <th>Action</th>
     
   </tr>
   <?php
    while ($row = mysqli_fetch_assoc($res)) {
       
 
   ?>
    <tr>
       
    <!-- `id`,`Aname`, `Address`, `contact`, `email`, `password`  -->
       <td><?php echo $row['id']?></td>
       <td><?php echo $row['Aname']?></td>
       <td><?php echo $row['Address'] ?></td>
       <td><?php echo $row['contact']?></td>
       <td><?php echo $row['email'] ?></td>
       <td><?php echo $row['password']?></td>
       
       <td>
                <a href="reg_update.php?id=<?= $row['id'] ?>" class="btn btn-warning">
                    <i class="fa fa-pencil" aria-hidden="true"></i>
                </a>
                <a href="reg_delete.php?data=<?= $row['id'] ?>" class="btn btn-danger text-white">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                </a>
            </td>
   </tr> 
     <?php  
 } ?>
   
 
   

</table>
<h3 class=" text-center" style="background-color: #6c6c3d;">
        Add More Details 
        <a class="float-right btn btn-light text-dark" href="registration_add.php">
            <i class="fa fa-plus" aria-hidden="true"></i>
            Add
        </a>
    </h3>
<?php //}?> 
</body>
</html>
