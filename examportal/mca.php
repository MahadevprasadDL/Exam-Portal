<?php 
    session_start();

    ?>
<!DOCTYPE html>
<html>
<?php $title="Exams | index page"; ?>
<?php require 'head.php'; ?>
<style>
    body {
        background-image: url('image/mca1.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        height: 100%;
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
              
            </div>

            <div class="col-lg-9">
            <div class="row">
            <div class="col-xl-10 col-lg-10 col-md-10  col-sm-10 col-xs-15 mb-10">
                <div class="card">
                    <div class="card-header text-center">Master's in Computer Applications (MCA)</div>
                    <div class="card-body">
                    The Master's in Computer Applications (MCA) course is regarded as one of the most well-liked courses among students seeking to pursue careers in the IT sector. MCA Admissions are based on the university-level as well as state-level MCA entrance exams such as NIMCET, TANCET, MAH MCA CET, etc. Check out the top MCA entrance exams in India to get admission into reputable colleges.
                    </div>
                    <div class="card-body">
                    MCA course is a three-year postgraduate degree in the domain of computer applications and information technology (IT). The course aims to educate students about the various applications and operations of computer and programming languages. Students can enroll in MCA course after successfully completing intermediate and graduation from a recognized board/university
                </div>
                <div class="card-body">
                Master of Computer Applications or MCA is a specialised and professional course offered in the postgraduate-level. This course is an advanced learning program which introduces candidates to the advanced field of Computer Applications. The course deals with the principles of Business Programming through Computer programs, Programming & Data Structure and Management Support System-
                </div>
                <ul>
            <li>
                <a class="nav-link btn btn-light" href="nimcet.php">NIMCET</a>
            </li>
            <li>
                <a class="nav-link btn btn-light" href="pgcet.php">PGCET</a>
            </li>
            <li>
                <a class="nav-link btn btn-light" href="">OJEE</a>
            </li>
            <li>
                <a class="nav-link btn btn-light" href="">TANCET</a>
            </li>
            <li>
                <a class="nav-link btn btn-light" href="">APICET</a>
            </li>
            

        </ul>

        
           

        <div class="row">
            <div class="col-lg-6 rounded mb-5">

            </div>
            <div class="col-lg-6 rounded mb-5">
                 </div>
        </div>

       

    <?php require 'footer.php'; ?>

</body>
</html>