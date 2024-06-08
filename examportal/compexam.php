<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
<?php $title = "Exams | index page"; ?>
<?php require 'head.php'; ?>
<style>
    body {
        /* Specify the background image URL and set background properties */
        background-image: url('image/12.jpg'); /* Adjust the path to your background image */
        background-size: cover;
        background-repeat: no-repeat;
        height: 100vh; /* Use viewport height for full screen coverage */
        margin: 0; /* Remove default margin */
        padding: 0; /* Remove default padding */
    }
    .container {
        /* Additional styles for the container if needed */
        padding-top: 10px; /* Example: Adjust the top padding */
    }
    .card-header {
        background-color: #007bff;
        color: #fff;
    }
    .nav-link.btn.btn-light {
        background-color: #fff;
        color: #007bff;
        border: 1px solid #007bff;
        margin-bottom: 5px;
    }
    .nav-link.btn.btn-light:hover {
        background-color: #007bff;
        color: #fff;
    }
    .card {
        border: 1px solid #007bff;
        border-radius: 10px;
    }
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">EDVANTIA INSIGHTS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="main.php">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="exam.php">Exam</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      
      <li class="nav-item active">
        <a class="nav-link" href="login.php">Login/logout</a>
      </li>
     
    </ul>

  </div>
</nav>
    <?php require 'header.php'; ?>

    <div class="container cont">
        <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5 col-xs-6 mb-5" style="width: 60%">
                <!-- Content for left column -->
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-xs-15 mb-10">
                        <div class="card">
                            <div class="card-header text-center">Competitive Exams</div>
                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item">
                                            <a class="nav-link btn btn-light" href="bank.php">Banking Exam</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link btn btn-light" href="rail.php">Railway Exam</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link btn btn-light" href="civil.php">Civil Services</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link btn btn-light" href="entrexam.php">SSC Exam</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link btn btn-light" href="#">Defence</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link btn btn-light" href="#">FDA</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link btn btn-light" href="#">SDA</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link btn btn-light" href="#">NDA</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 rounded mb-5">
                        <!-- Content for left column -->
                    </div>
                    <div class="col-lg-6 rounded mb-5">
                        <!-- Content for right column -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require 'footer.php'; ?>
</body>
</html>
