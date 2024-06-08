<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
<?php $title="EDVANTIA | About page"; ?>
<?php require 'head.php'; ?>
<head>
  <title><?php echo $title; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .contact-card {
        background-color: #fff; /* Change background color to white */
        padding: 20px;
        border-radius: 15px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .contact-image {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        object-fit: cover;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
    .contact-info {
        text-align: center;
        padding: 15px;
    }
    .contact-info h3 {
        margin-top: 10px;
        color: #333; /* Change text color to dark gray */
    }
    .contact-info p {
        font-size: 1.1em;
        color: #666; /* Change text color to gray */
    }
    .contact-info a {
        display: block;
        margin-top: 10px;
        color: #007bff; /* Change link color to blue */
        text-decoration: none; /* Remove underline from links */
    }
    .contact-info a:hover {
        color: #0056b3; /* Change link hover color */
    }
    .jumbotron h1 {
        text-align: right; /* Align text to the right */
    }
  </style>
</head>
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
        <a class="nav-link" href="register.php">Login</a>
      </li>
     
    </ul>
  </div>
</nav>

<section class="my-5" style="background-color: #f8f9fa;"> <!-- Change background color of section -->
  <div class="py-5">
    <h2 class="text-center">Contact Us</h2>
  </div>
  <div class="container contact-card">
    <div class="row">
      <div class="col-md-4 offset-md-4">
        <img src="image/myimage.jpg" alt="My Image" class="contact-image">
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 offset-md-2 contact-info">
        <h3>Mahadevprasad D L</h3>
        <p>Email: <a href="mailto:girishdl78524@gmail.com">girishdl78524@gmail.com</a></p>
        <p>"I am a full-stack web developer and a contributor to Girl Script Summer of Code 2024 (GSSoC24). I am a student at JSS Science and Technology University (formerly SJCE), pursuing a Bachelor's degree in Computer Applications."</p>
        <a href="https://www.linkedin.com/in/mahadevprasad-d-l-889624290" target="_blank">LinkedIn</a>
        <a href="https://github.com/MahadevprasadDL" target="_blank">GitHub</a>
      </div>
    </div>
  </div>
</section>

<?php require 'footer.php'; ?>
</body>
</html>
