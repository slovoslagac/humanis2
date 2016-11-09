<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Humanis</title>
    <link rel="shortcut icon" href="images/logo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Bira pravu sirinu uredjaja -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php
require_once(join(DIRECTORY_SEPARATOR, array('includes', 'init.php')));

// header included in layout

include(join(DIRECTORY_SEPARATOR, array(SITE_LAYOUTS, 'header.php')));
?>

<!-- menu part -->

<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#menu">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="nav navbar-nav">
                <li><a href="#">Naslovna</a></li>
                <li><a href="#">Protetika</a></li>
                <li><a href="#">Ortotika</a></li>
                <li><a href="#">Mobilnost</a></li>
                <li><a href="#">Iskustva Korisnika</a></li>
                <li><a href="#">Maloprodaja</a></li>
                <li><a href="#">Kontakt</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <form class="navbar-form" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" name="srch-term"
                                   id="srch-term">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                </li>
            </ul>

        </div>
    </div>
</nav>

<!-- Carousel -->

<div class="container carousel slide carousel-fade" data-ride="carousel" id="carousel" data-interval="10000">
    <div class="carousel-inner text-center">
        <div class="item active">
            <img src="images/slider/homepage1.jpg" class="img-responsive" alt="Responsive image">
        </div>
        <div class="item">
            <a href="#" target="blanko"><img src="images/slider/homepage2.jpg" class="img-responsive"
                                             alt="Responsive image"></a>
        </div>
        <div class="item">
            <img src="images/slider/homepage3.jpg" class="img-responsive" alt="Responsive image">
        </div>
        <div class="item">
            <img src="images/slider/homepage4.jpg" class="img-responsive" alt="Responsive image">
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- Novosti -->
<div class="container container-fluid">

    <div class="col-xs-12 text-center">
        <h1>Novosti</h1>
    </div>
    <div class="row">
        <div class="col-md-6 col-xs-8 col-xs-offset-2 col-md-offset-0">
            <div class="embed-responsive embed-responsive-16by9">
                <p>
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/hupIjvUGFHE"></iframe>
                    </span>
            </div>
        </div>
        <div class="col-md-6 col-xs-8 col-xs-offset-2 col-md-offset-0">
            <div class="embed-responsive embed-responsive-16by9">
                <p>
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/5dUmeW6QQ84"></iframe>
            </div>
        </div>
    </div>
</div>
<br>
<div class="container container-fluid">
    <h1 class="text-center">Stručni tim maksimalno posvećen potrebama korisnika.</h1>
    <div class="row text-center">
        <div class="col-md-4">
            <a href="#">
            <img src="images/menu1.jpg" alt="..." class="img-responsive center-block circleImage" >
            <h2>Protetika</h2>
            <p>Premium kvalitet uz najviši standard rehabilitacije.</p>
            </a>
        </div>
        <div class="col-md-4">
            <a href="#">
            <img src="images/menu2.jpg" alt="..." class="img-responsive center-block circleImage" >
            <h2>Ortotika</h2>
            <p>Kod nas možete pronaći sve vrste ortoza.</p>
            </a>
        </div>
        <div class="col-md-4 ">
            <a href="http://www.google.com" target="_blank">
            <img src="images/menu3.jpg" alt="..." class="img-responsive center-block circleImage" >
            <h2>Maloprodaja</h2>
            <p>Veliki izbor renomiranih brendova na jednom mestu.</p>
            </a>
        </div>
    </div>
</div>
<br>
<!--footer included-->
<?php
include(join(DIRECTORY_SEPARATOR, array(SITE_LAYOUTS, 'footer.php')));

?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>
</html>