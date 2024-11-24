
<?php  $pageName = 'Hotel add';
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

<div class="card bg-dark text-black">
  <img src="images/background.jpg" class="card-img" alt="...">
  <div class="card-img-overlay">
  <div class="card container pt-3">
    <div class="card-header text-center text-white "style="background-color: #5a5c5c;">
    <h5><?php
    echo "Please fill your hotel details here";
    ?></h5>
      <h4>Hotel Details </h4>
    </div>
    <div class="card-body">
    <form action="process/hotel-add-process.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
    <!-- <label for="h_id">Hotel Id</label> -->
          <input type="text" class="form-control" hidden name="id" id="name" aria-describedby="helpId" placeholder="id">
        </div>
        <!-- <div class="form-group">
          <label for="Sno">Sno</label>
          <input type="text" class="form-control" name="Sno" id="name" aria-describedby="helpId" placeholder="Enter serial no">
        </div> -->
        <div class="form-group">
          <label for="hname">Hotel Name</label>
          <input type="text" class="form-control" name="hname" id="name" aria-describedby="helpId" placeholder="Enter Hotel Name">
        </div>
        <div class="form-group">
          <label for="Address">Address</label>
          <input type="text" class="form-control" name="address" id="name" aria-describedby="helpId" placeholder="Enter Address">
        </div>
        <div class="form-group">
          <label for="rooms"> Single Roomtype Price</label>
          <input type="text" class="form-control" name="roomS" id="name" aria-describedby="helpId" placeholder="Enter your room price">
        </div>
        <div class="form-group">
          <label for="amenty">Amenties provided</label>
          <input type="text" class="form-control" name="AmenitiesS" id="name" aria-describedby="helpId" placeholder="Enter Amenities ">
        </div>
        <div class="form-group">
          <label for="room"> Double Roomtype Price </label>
          <input type="text" class="form-control" name="roomD" id="name" aria-describedby="helpId" placeholder="Enter your room price">
        </div>
        <div class="form-group">
          <label for="amenty">Amenties provided</label>
          <input type="text" class="form-control" name="AmenitiesD" id="name" aria-describedby="helpId" placeholder="Enter Amenities">
        </div>
        <div class="form-group">
          <label for="details">Details</label>
          <input type="text" class="form-control" name="details" id="name" aria-describedby="helpId" placeholder="Enter details">
        </div>
        <!-- <div class="form-group">
        <label for="details">Files</label> -->
        <input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png" value="">
        <!-- </div> -->
        <div class="text-center mt-4">
          <button class="btn btn-sm btn-primary" type="submit">Submit</button>
          <button class="btn btn-sm btn-danger" type="reset">Reset</button>
          <!-- <i class="fa fa-trash" aria-hidden="true"></i> -->
          
        </div>
      </form>
    </div>
  </div>
</div>
</div>
<!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script> -->
</body>
</html>