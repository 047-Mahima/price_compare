<?php require('../dbconfig.php'); ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">Welcome Admin</a>
      <span style="color: white"><?php $q=mysqli_query($conn,"select * from user");
$r1=mysqli_num_rows($q);?>
Total Number of User Register :<?php echo $r1; ?>
  
</span>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tutorial.php">Tutorial</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="course.php">Course</a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="pass.php">Change Password</a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="logout.php"><i class="fa fa-sign-out"></i>&nbsp;Log Out</a>
          </li>
        </ul>
       
      </div>
    </div>
  </nav>

  <!-- Header -->