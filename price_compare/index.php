<?php
session_start();
require('dbconfig.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Online Shop</title>
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/business-frontpage.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <?php include("nav.php") ?>
  <!-- /navigation -->
  
  <header class="bg-primary py-5 mb-5">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-lg-12">
          <h1 class="display-4 text-white mt-5 mb-2">Online Shop (Course Price Compare)</h1>
          <p class="lead mb-5 text-white-50">The One Place where you get tutorials of latest technology at right price. Comparison of Branded sites like Udemy,Coursera,Tutorial Point etc. Knowleadge is the real power that should reach to everyone here we are to remove obstruction between it.</p>
        </div>
      </div>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container">

    <div class="row" id="contact">
      <div class="col-md-8 mb-5">
        <h2>What We Do</h2>
        <hr>
        <p>There is a lot of technology avaiable that required a high skill. But to get it there are lot of tutoials and education organization avaiable to teach you but again their is a queston "Which is best?","which is offer least price with maximum benifit" etc.</p>
        <p>So that what we give you solution at one palce of all of these quesion. We compare avaiable tutorial of PL like JAVA,PYTHON,ML,AI,C,C++,HTML 5,JAVASCRIPT & much more from the best tutorials avaiable which help you decide quickly at least price.</p>
        <a class="btn btn-primary btn-lg" href="register.php">Start Compare &raquo;</a>
      </div>
      <div class="col-md-4 mb-5">
        <h2>Contact Us</h2>
        <hr>
        <address>
          <strong>Course Shop</strong>
          <br><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;3481 Melrose Place
          <br>Beverly Hills, CA 90210
          <br>
        </address>
        <address>
         <i class="fa fa-phone" aria-hidden="true"></i>
          (123) 456-7890
          <br>
          <i class="fa fa-envelope" aria-hidden="true"></i>
          <a href="#">compare@courseshop.com</a>
        </address>
      </div>
    </div>
    <!-- /.row -->

    <div class="row">
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <img class="card-img-top" height="200" width="300" src="img/c++.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">C++ Courses</h4>
            <p class="card-text">C++ is an object oriented language which gives a clear structure to programs and allows code to be reused, lowering development costs.</p>
          </div>
          <div class="card-footer">
            <a href="register.php" class="btn btn-primary">Compare</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <img class="card-img-top" height="200" width="300" src="img/python.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Python Courses</h4>
            <p class="card-text">Python was designed for readability, and has some similarities to the English language with influence from mathematics.</p>
          </div>
          <div class="card-footer">
            <a href="register.php" class="btn btn-primary">Compare</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <img class="card-img-top" height="200" width="300" src="img/java.png" alt="">
          <div class="card-body">
            <h4 class="card-title">Java Courses</h4>
            <p class="card-text">Java works on different platforms (Windows, Mac, Linux, Raspberry Pi, etc.).
It is one of the most popular programming language in the world. It is easy to learn and simple to use </p>
          </div>
          <div class="card-footer">
            <a href="register.php" class="btn btn-primary">Compare</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <?php include("footer.php") ?>
 <!-- /footer -->
    <!-- /.container -->
 

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
