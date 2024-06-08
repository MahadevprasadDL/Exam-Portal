<?php 
    session_start();

    ?>
<!DOCTYPE html>
<html>
<?php $title="Exams | index page"; ?>
<?php require 'head.php'; ?>
<style>
    body {
        background-image: url('image/civil1.png');
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
                    <div class="card-header text-center">Civil Services</div>
                    <div class="card-body">
                    The Civil Services Exam (CSE) in India is a nationwide competitive examination conducted by the Union Public Service Commission (UPSC).

Via the Civil Services Examination, the UPSC recruits candidates for various Central and All India Civil Service posts in the Indian Administrative Service (IAS), Indian Foreign Service (IFS), Indian Police Service (IPS), Indian Revenue Service (IRS), etc.
                    </div>
                    <div class="card-body">
                    Preparing for the Civil Services Examination requires dedication, hard work, and a comprehensive understanding of various subjects. It is essential to stay updated with current affairs and maintain a disciplined study routine to succeed in this examination. The career prospects and responsibilities associated with civil services make it a sought-after career choice among Indian youth.





.
                </div>
                <div class="card-body">
                The Civil Services Examination is a gateway to a rewarding and impactful career in public service. Success in this examination requires dedication, perseverance, and a strategic approach to preparation:-
                </div>
                <ul>
            <li>
                <a class="nav-link btn btn-light" href="IAS.php">Indian Administrative Service (IAS) </a>
            </li>
            <li>
                <a class="nav-link btn btn-light" href="forest.php">INDIAN FOREST SERVICE</a>
            </li>
            <li>
                <a class="nav-link btn btn-light" href="police.php">Indian Police Service (IPS)</a>
            </li>
            <li>
                <a class="nav-link btn btn-light" href="">Indian Revenue Service</a>
            </li>
            <li>
                <a class="nav-link btn btn-light" href="">Indian Trade Service</a>
            </li>
            <li>
                <a class="nav-link btn btn-light" href="">Indian information Service</a>
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