<?php
require_once(join(DIRECTORY_SEPARATOR, array('includes', 'init.php')));
?>
<!doctype html>
<html lang="en">
<head>
    <?php
    require_once(join(DIRECTORY_SEPARATOR, array(SITE_LAYOUTS, 'head.php')));
    ?>
</head>
<body>
<?php


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
    <h2 class="text-center">Stručni tim maksimalno posvećen potrebama korisnika.</h2>

    <div class="row text-center">
        <div class="col-md-3 col-sm-6 imagesMain">
            <a href="protetika.php">
                <img src="images/protetika.jpg" alt="..." class="img-responsive center-block">
                <div class="imagesInfo">
                    <h3>Protetika</h3>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6 imagesMain">
            <a href="ortotika.php">
                <img src="images/ortotika.jpg" alt="..." class="img-responsive center-block ">
                <div class="imagesInfo">
                    <h3>Ortotika</h3>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6 imagesMain">
            <a href="mobilnost.php" target="_blank">
                <img src="images/mobilnost.jpg" alt="..." class="img-responsive center-block">
                <div class="imagesInfo">
                    <h3>Mobilnost</h3>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6 imagesMain">
            <a href="http://www.google.com" target="_blank">
                <img src="images/prodavnica.jpg" alt="..." class="img-responsive center-block">
                <div class="imagesInfo">
                    <h3>Specijalizovana prodavnica</h3>
                </div>
            </a>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-md-3 col-sm-6 imagesMain">
            <a href="#">
                <img src="images/inplant.jpg" alt="..." class="img-responsive center-block">
                <div class="imagesInfo">
                    <h3>Femоralni implant</h3>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6 imagesMain">
            <a href="ortopedski_ulosci.php">
                <img src="images/ulosci.jpg" alt="..." class="img-responsive center-block ">
                <div class="imagesInfo">
                    <h3>Ortopedski ulošci</h3>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6 imagesMain">
            <a href="http://www.google.com" target="_blank">
                <img src="images/amputirci.jpg" alt="..." class="img-responsive center-block">
                <div class="imagesInfo">
                    <h3>Priručnik za amputirce</h3>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6 imagesMain">
            <a href="pitajte_humanis.php" target="_blank">
                <img src="images/doktor.jpg" alt="..." class="img-responsive center-block">
                <div class="imagesInfo">
                    <h3>Pitajte HUMANIS</h3>
                </div>
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