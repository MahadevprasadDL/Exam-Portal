<nav class="navbar navbar-expand-sm navbar-light bg-light sticky-top">
    <div class="container">
        <a class="navbar-brand" href="index.php"><img src="image/giri.jpg" width="30" height="30" class="rounded-circle">Exams</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"><i class="fas fa-align-left"></i></span>
        </button>

        <div class="collapse navbar-collapse" id="collapsibleNavbar">

            <?php if (isset($_SESSION['hid'])) { ?>

            <?php } elseif (isset($_SESSION['rid'])) { ?>

            <?php }  else { ?>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link btn btn-light" href="compexam.php" style="background-color: #28a745; color: #fff;">Competitive exams</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-light" href="entrexam.php" style="background-color: #28a745; color: #fff;">Entrance exams</a>
                    </li>
                </ul>

            <?php } ?>
        </div>
    </div>
</nav>
