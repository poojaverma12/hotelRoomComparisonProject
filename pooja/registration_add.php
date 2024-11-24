
<!--Template head start-->

<?php
  $pageName = 'Registration';
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
    <div class="card-header text-center  text-white container pt-3" style="background-color: #5a5c5c;">
      <h4>Registration Form</h4>
    </div>
    <div class="card-body container pt-3">
    <form action="process/reg_add_process.php" method="post" class="container pt-3" >
    <div class="form-group">
          
          <input type="text" class="form-control" name="id" id="name" aria-describedby="helpId" placeholder="" hidden>
        </div>
        <!-- <div class="form-group">
          <label for="Sno">Sno</label>
          <input type="text" class="form-control" name="Sno" id="name" aria-describedby="helpId" placeholder="Enter serial no">
        </div> -->
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="Enter your  Name here" required>
        </div>
        <div class="form-group">
          <label for="location">Location</label>
          <input type="location" class="form-control" name="location" id="name" aria-describedby="helpId" placeholder="Enter your Residental Address here" required>
        </div>
        <div class="form-group">
          <label for="contact">Contact</label>
          <input type="text" class="form-control" name="contact" id="name" aria-describedby="helpId" placeholder="Enter Contact Number" required>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" name="email" id="name" aria-describedby="helpId" placeholder="Enter email" required>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" name="password" id="name" aria-describedby="helpId" placeholder="Enter password" required>
        </div>
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

</body>
</html>