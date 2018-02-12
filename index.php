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

<!-- Novosti -->
<div class="container container-fluid">
    <h1 class="text-center">Stručni tim maksimalno posvećen potrebama korisnika.</h1>

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
            <a href="mobilnost.php">
                <img src="images/mobilnost.jpg" alt="..." class="img-responsive center-block">
                <div class="imagesInfo">
                    <h3>Mobilnost</h3>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6 imagesMain">
            <a href="specijalizovana_prodavnica.php">
                <img src="images/prodavnica.jpg" alt="..." class="img-responsive center-block">
                <div class="imagesInfo">
                    <h3>Specijalizovana prodavnica</h3>
                </div>
            </a>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-md-3 col-sm-6 imagesMain">
            <a href="femoralni_implant.php">
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
            <a href="vodic_nakon_amputacije.php">
                <img src="images/amputirci.jpg" alt="..." class="img-responsive center-block">
                <div class="imagesInfo">
                    <h3>Vodič nakon amputacije</h3>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6 imagesMain">
            <a href="pitajte_humanis.php">
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