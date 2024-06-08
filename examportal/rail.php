<?php 
    session_start();

    ?>
<!DOCTYPE html>
<html>
<?php $title="Exams | index page"; ?>
<?php require 'head.php'; ?>
<style>
    body {
        background-image: url('image/rail1.jpg');
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
                    <div class="card-header text-center">Railway </div>
                    <div class="card-body">
                    For an aspirant looking for a government job, Railways exams is one of the best options. The railway exams are administered by the Railways Recruitment Board. The Indian Railways will hold recruiting exams for various vacancies in Group A, B, C, D, and other departments. Indian Railways issue a flurry of job announcements almost every year. Interested individuals should select their preferred field of work and then monitor the job notifications.

PhysicsWallah brings you the most trusted platform to prepare for the RRB Exams 2023-24
                    </div>
                    <div class="card-body">
                    The Railway Panel posts group-specific recruitment announcements, which are divided into Gazette and Non-Gazette categories. Group A & B vacancies are included in this category. Group C and D postings are included in the non-Gazette category, whereas it falls under the Gazette category.
                </div>
                <div class="card-body">
                Railway examinations are held in India for a variety of posts and profiles in the various Indian railway branches. Take a look at some of the well-known railway exams that are held in India each year are :-
                </div>
                <ul>
            <li>
                <a class="nav-link btn btn-light" href="NTPC.php">RRB NTPC Exam</a>
            </li>
            <li>
                <a class="nav-link btn btn-light" href="RRB.php">RRB group</a>
            </li>
            <li>
                <a class="nav-link btn btn-light" href="ALP.php">RRB ALP</a>
            </li>
            <li>
                <a class="nav-link btn btn-light" href="">RRB JE Exam</a>
            </li>
            <li>
                <a class="nav-link btn btn-light" href="">RRB NTPC Exam</a>
            </li>
            <li>
                <a class="nav-link btn btn-light" href="">RRB ALP</a>
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