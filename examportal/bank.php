<?php 
    session_start();

    ?>
<!DOCTYPE html>
<html>
<?php $title="Exams | index page"; ?>
<?php require 'head.php'; ?>
<style>
    body {
        background-image: url('image/bank.png');
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
                    <div class="card-header text-center">Banking</div>
                    <div class="card-body">
                    Banking exam are very popular exams in India lack of occupations apply for various bank exams all over India out of them few are selected depending upon their performance we provide certain study material exam updates and information about the various bank exam
                    </div>
                    <div class="card-body">
                         Are you preparing for banking exams such as SBI PO, SBI Clerk, IBPS PO, IBPS Clerk, IBPS RRB etc.? Here is the list of top bank exams that you can appear in 2023.
                </div>
                <div class="card-body">
                Banking Exams 2023: In a country like India, bank exams are often considered in high regard for candidates aspiring to make their career in banking. There are multiple banking exams that are conducted by various banks and testing agencies across the country every year. Some of the popular banking exams that are largely participated by banking aspirants are :-
                </div>
                <ul>
            <li>
                <a class="nav-link btn btn-light" href="po.php">SBI PO</a>
            </li>
            <li>
                <a class="nav-link btn btn-light" href="clerk.php">SBI CLERK</a>
            </li>
            <li>
                <a class="nav-link btn btn-light" href="ibps.php">IBPS PO</a>
            </li>
            <li>
                <a class="nav-link btn btn-light" href="">IBPS SO(CWE SO)</a>
            </li>
            <li>
                <a class="nav-link btn btn-light" href="">IBPS CLERK(CWE Clerical)</a>
            </li>
            <li>
                <a class="nav-link btn btn-light" href="">RBI Officer grade B</a>
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