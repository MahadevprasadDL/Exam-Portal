<?php 
    session_start();

    ?>
<!DOCTYPE html>
<html>
<?php $title="Exams | index page"; ?>
<?php require 'head.php'; ?>
<style>
    body {
        background-image: url('image/law1.jpg');
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
                    <div class="card-header text-center">LAW</div>
                    <div class="card-body">
                    In India, law education has grown significantly compared to a decade ago. Candidates want to explore disciplines other than Engineering and Medicine. Law studies are growing increasingly popular in India, whereas other options have limited admission opportunities and high competition.
                    </div>
                    <div class="card-body">
                    Top Law Entrance Exams in India - Law education is a meticulous choice of aspirants who want to explore fields other than Engineering and Medicine. In India, law education is gaining popularity as the other options have limited admission opportunities and high competition. Law education has renowned law colleges including National Law Universities, as well as top private law colleges including Symbiosis Law Schools, Symbiosis International University (SIU); School of Law, UPES; ILS Law College; Faculty of Law, Jamia Milia Islamia; Army Institute of Law; ICFAI Law Schoo.
                </div>
                <div class="card-body">
                </div>
                <ul>
            <li>
                <a class="nav-link btn btn-light" href="clat.php">CLAT</a>
            </li>
            <li>
                <a class="nav-link btn btn-light" href="ailet.php">AILET</a>
            </li>
            <li>
                <a class="nav-link btn btn-light" href="lsat.php">LSAT</a>
            </li>
            <li>
                <a class="nav-link btn btn-light" href="">NLAT</a>
            </li>  
            <li>
                <a class="nav-link btn btn-light" href="">SLAT</a>
            </li>
            <li>
                <a class="nav-link btn btn-light" href="">MH CET Law exam</a>
            </li>
            <li>
                <a class="nav-link btn btn-light" href="">DU LLB</a>
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