<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
<?php $title="Bloodbank | About page"; ?>
<?php require 'head.php'; ?>
<head>
    <title><?php echo $title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
                    <a class="nav-link" href="register.php">Exam</a>
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

    <div class="jumbotron text-center">
        <h1>EDVANTIA INSIGHTS</h1>
        <p>Learn, grow, and succeed with one solution for entrance and competitive exams.</p>
    </div>

    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">About Us</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="image/comp.png" class="img-fluid aboutimg rounded shadow-sm">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="display-4">EDVANTIA - "I'm here to help you!"</h2>
                    <p class="py-3">Since 2000, InSight has explored both vision and leadership in the use of new and emerging technologies in education. In its five-year history, InSight has presented many intriguing articles that have illuminated the potential value of new technologies as well as exemplified their current, practical classroom applications.</p>
                    <p>With an emphasis on academic success for all children, we look at a method of universally designed assessment developed by the Kentucky Department of Education and based on the tenets of universal design for learning.</p>
                    <a href="about.php" class="btn btn-primary mt-3">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <?php require 'footer.php'; ?>
</body>
</html>
