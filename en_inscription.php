<?php
error_reporting(0);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">


    <!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="css/freelancer.min.css" rel="stylesheet">
    <link href="css/tintas.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="en_index.php">DIETER STAIN</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-0 mx-lg-1">

                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="en_connexion.php">Log in</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="inscription.php"><img src="img/fr.png"></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container-fluid" id="contmargin">
    <div class="col-lg-6 offset-lg-3">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-3" id="title_inscription">Registration</h1>
                <form action="db/en_traitement_inscription.php" method="post">
                    <div class="form-group">
                        <label for="name">Name<red>*</red></label>
                        <input type="text" class="form-control form-control-sm" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="firstName">First name<red>*</red></label>
                        <input type="text" class="form-control form-control-sm" name="firstName" required>
                    </div>
                    <div class="form-group">
                        <label for="age">Age<red>*</red></label>
                        <select class="form-control form-control-sm" name="age">
                            <?php
                            for($i = 1; $i < 111; $i++){
                                echo '<option value="' . $i . '">' . $i . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <?php
                    if($_GET['error'] == 1){
                        echo '<red>This pseudo is already used</red>';
                    }else{

                    }
                    ?>
                    <div class="form-group">
                        <label for="pseudo">Pseudo<red>*</red></label>
                        <input type="text" class="form-control form-control-sm" name="pseudo" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Mail address<red>*</red></label>
                        <input type="email" class="form-control form-control-sm" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password<red>*</red></label>
                        <input type="password" class="form-control form-control-sm" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="repeatPassword">Repeat password<red>*</red></label>
                        <input type="password" class="form-control form-control-sm" name="repeatPassword" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" id="centerButton" class="btn btn-primary">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>

