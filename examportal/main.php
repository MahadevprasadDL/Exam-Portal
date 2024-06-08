<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
<?php $title = "Red let's | Home Page"; ?>
<?php require 'head.php'; ?>
<head>
  <title><?php echo $title; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/styles.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* CSS for logo */
    .navbar-brand img {
      max-width: 60px; /* Adjust width as needed */
      height: auto;
    }
    /* Custom CSS for About Us section */
    .about-section {
      background-color: #f8f9fa;
      padding: 50px 0;
    }
    .about-section h2 {
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 20px;
    }
    .about-section p {
      font-size: 1.1rem;
      margin-bottom: 30px;
    }
    .about-section .btn {
      background-color: #343a40;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }
    .about-section .btn:hover {
      background-color: #495057;
    }
    .about-section .img-fluid {
      border-radius: 15px;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><img src="image/logo.jpg" alt="Logo"></a>
  <div class="mx-auto d-lg-flex d-block">
    <h1 class="text-center text-white">EDVANTIA INSIGHTS</h1>
  </div>
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
        <a class="nav-link" href="register.php">Exam</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true): ?>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
      <?php else: ?>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <?php endif; ?>
    </ul>
  </div>
</nav>
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/comp.png" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="image/comp2.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="image/exam.jpeg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="about-section my-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12">
        <img src="image/exam.jpeg" class="img-fluid aboutimg">
      </div>
      <div class="col-lg-6 col-md-6 col-12">
        <h2>EDVANTIA - "I'm here to help you!"</h2>
        <p class="py-3">Learn, grow, and succeed with one solution! EDVANTIA Insights is dedicated to providing top-notch educational resources and support to help you achieve your goals. Whether you're preparing for exams, looking to expand your knowledge, or seeking guidance on your educational journey, we are here to assist you every step of the way.</p>
        <p>Our platform offers a variety of tools and resources designed to cater to your specific needs. From interactive learning modules to expert advice, we ensure that you have everything you need to excel.</p>
        <a href="about.php" class="btn">Learn More</a> 
      </div>
    </div>
  </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<?php require 'footer.php'; ?>
</body>
</html>
