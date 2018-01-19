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
    <!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

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
<br>
<!-- Novosti -->
<div class="container container-fluid">
    <div class="container container-fluid">
        <h2 class="text-center">Stručni tim maksimalno posvećen potrebama korisnika.</h2>
        <br>
        <div class="row text-center">
            <div class="col-md-4">
                <a href="#">
                    <img src="images/menu1.jpg" alt="..." class="img-responsive center-block">
                    <div class="imagesInfo">
                        <h3>Protetika</h3>
                        <p class="text-center">Premium kvalitet<br>uz najviši standard rehabilitacije.</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#">
                    <img src="images/menu2.jpg" alt="..." class="img-responsive center-block ">
                    <div class="imagesInfo">
                        <h3>Ortotika</h3>
                        <p>Kod nas možete pronaći sve vrste ortoza.</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="http://www.google.com" target="_blank">
                    <img src="images/menu3.jpg" alt="..." class="img-responsive center-block">
                    <div class="imagesInfo">
                        <h3>Maloprodaja</h3>
                        <p>Veliki izbor renomiranih brendova na jednom mestu.</p>
                    </div>
                </a>
            </div>
        </div>
        <br>
        <div class="row text-center">
            <div class="col-md-3">
                <a href="#">
                    <img src="images/menu1.jpg" alt="..." class="img-responsive center-block">
                    <div class="imagesInfo">
                        <h3>Protetika</h3>
                        <p class="text-center">Premium kvalitet<br>uz najviši standard rehabilitacije.</p>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="#">
                    <img src="images/menu2.jpg" alt="..." class="img-responsive center-block ">
                    <div class="imagesInfo">
                        <h3>Ortotika</h3>
                        <p>Kod nas možete pronaći sve vrste ortoza.</p>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="http://www.google.com" target="_blank">
                    <img src="images/menu3.jpg" alt="..." class="img-responsive center-block">
                    <div class="imagesInfo">
                        <h3>Maloprodaja</h3>
                        <p>Veliki izbor renomiranih brendova na jednom mestu.</p>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="http://www.google.com" target="_blank">
                    <img src="images/menu3.jpg" alt="..." class="img-responsive center-block">
                    <div class="imagesInfo">
                        <h3>Maloprodaja</h3>
                        <p>Veliki izbor renomiranih brendova na jednom mestu.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

</div>

<!-- Novosti -->
<!--<div class="container container-fluid">-->
<!---->
<!--    <br>-->
<!--    <div class="container container-fluid">-->
<!--        <h2 class="text-center">Stručni tim maksimalno posvećen potrebama korisnika.</h2>-->
<!--        <div class="row text-center">-->
<!--            <div class="col-md-4">-->
<!--                <a href="#">-->
<!--                    <img src="images/menu1.jpg" alt="..." class="img-responsive center-block circleImage">-->
<!--                    <h2>Protetika</h2>-->
<!--                    <p>Premium kvalitet uz najviši standard rehabilitacije.</p>-->
<!--                </a>-->
<!--            </div>-->
<!--            <div class="col-md-4">-->
<!--                <a href="#">-->
<!--                    <img src="images/menu2.jpg" alt="..." class="img-responsive center-block circleImage">-->
<!--                    <h2>Ortotika</h2>-->
<!--                    <p>Kod nas možete pronaći sve vrste ortoza.</p>-->
<!--                </a>-->
<!--            </div>-->
<!--            <div class="col-md-4 ">-->
<!--                <a href="http://www.google.com" target="_blank">-->
<!--                    <img src="images/menu3.jpg" alt="..." class="img-responsive center-block circleImage">-->
<!--                    <h2>Maloprodaja</h2>-->
<!--                    <p>Veliki izbor renomiranih brendova na jednom mestu.</p>-->
<!--                </a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<br>
<!--footer included-->
<?php
include(join(DIRECTORY_SEPARATOR, array(SITE_LAYOUTS, 'footer.php')));

?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        $('.dropdown-submenu a.test').on("click", function (e) {
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
        });
    });
</script>

</body>
</html>