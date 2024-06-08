<?php 
    session_start();

    ?>
<!DOCTYPE html>
<html>
<?php $title="Exams | index page"; ?>
<?php require 'head.php'; ?>
<style>
    body {
        background-image: url('image/mba2.jpg');
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
                    <div class="card-header text-center">Master of Business Administration</div>
                    <div class="card-body">
                    A master of business administration (MBA) is a graduate degree that provides theoretical and practical training for business or investment management. An MBA is designed to help graduates gain a better understanding of general business management functions.
                    </div>
                    <div class="card-body">
                    Top MBA entrance exams like CAT, XAT, MAT, SNAP, NMAT will be held between November 2023 to January 2024. After that, CMAT, ATMA, MAH CET, TANCET, TSICET, TANCET and other exams will be held for 2024 academic year. Take a look at application and exam dates of every top entrance exam for MBA in India that are the gateway to popular MBA colleges in India.
                </div>
                <div class="card-body">
                IIM administered CAT is the most popular entrance exam for MBA in India as over 1,200 MBA colleges select candidates for admission on the basis of marks obtained in this exam. Following CAT, the second most popular MBA entrance exam is CMAT conducted by the NTA. CMAT score is accepted by 1,000 MBA colleges across India. Third most popular MBA entrance exam is XAT which is conducted by XLRI Jamshedpur. XAT score is accepted by over 800 MBA colleges in India. 
                </div>
                <ul>
            <li>
                <a class="nav-link btn btn-light" href="cat.php">CAT</a>
            </li>
            <li>
                <a class="nav-link btn btn-light" href="snap.php">SNAP</a>
            </li>
            <li>
                <a class="nav-link btn btn-light" href="mat.php">MAT</a>
            </li>
            <li>
                <a class="nav-link btn btn-light" href="cmat.php">CMAT</a>
            </li>
            <li>
                <a class="nav-link btn btn-light" href="">TISSNET</a>
            </li>
            <li>
                <a class="nav-link btn btn-light" href="">IIFT</a>
            </li>
            <li>
                <a class="nav-link btn btn-light" href="">XAT</a>
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