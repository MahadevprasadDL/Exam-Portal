<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
<?php $title = "Exams | index page"; ?>
<?php require 'head.php'; ?>
<style>
    body {
        background-image: url('image/entrance.png');
        background-size: cover;
        background-repeat: no-repeat;
        height: 100%;
    }
    
    .card-header {
        background-color: #007bff;
        color: #fff;
        font-weight: bold;
    }
    
    .btn.btn-light {
        background-color: #fff;
        color: #007bff;
        border-color: #007bff;
        margin-bottom: 10px;
    }
    
    .btn.btn-light:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }
    
    .card {
        border: 2px solid #007bff;
        border-radius: 10px;
    }
    
    .card-body {
        padding: 20px;
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
                            <div class="card-header text-center">Entrance Exams</div>
                            <!-- The slideshow -->
                            <div class="card-body">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-light" href="mca.php">Master of Computer Applications (MCA)</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-light" href="mba.php">Master of Business Administration (MBA)</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-light" href="law.php">LAW</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-light" href="">Master of Arts (MA)</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-light" href="">KCET</a>
                                    </li>
                                </ul>
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
