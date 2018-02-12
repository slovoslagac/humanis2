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

<br>
<!-- Novosti -->
<div class="container container-fluid">
    <h1 class="text-center">Protetika donjih ekstremiteta</h1>
    <br>
    <div class="row">
        <div class="col-md-3 col-sm-6 imagesMain">
            <a href="natkolena_protetika.php">
                <img src="images/pdnatkolena.jpg" alt="..." class="img-responsive center-block">
                <div class="imagesInfo">
                    <h3>Natkolena protetika</h3>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6 imagesMain">
            <a href="potkolena_protetika.php">
                <img src="images/pdpotkolena.jpg" alt="..." class="img-responsive center-block ">
                <div class="imagesInfo">
                    <h3>Potkolena protetika</h3>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6 imagesMain">
            <a href="dezartikulacija_kuka.php">
                <img src="images/pddezkuk.jpg" alt="..." class="img-responsive center-block">
                <div class="imagesInfo">
                    <h3>Dezartikulacija kuka</h3>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6 imagesMain">
            <a href="par_proteze_stopala.php">
                <img src="images/pdparcijalneamputacijestopala.jpg" alt="..." class="img-responsive center-block">
                <div class="imagesInfo">
                    <h3>Parcijalne proteze stopala</h3>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6 imagesMain">
            <a href="proteticka_stopala.php">
                <img src="images/pdnaprednaprotetika.jpg" alt="..." class="img-responsive center-block">
                <div class="imagesInfo">
                    <h3>Napredna protetička rešenja</h3>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6 imagesMain">
            <a href="proteticka_stopala.php">
                <img src="images/pdstopalo.jpg" alt="..." class="img-responsive center-block ">
                <div class="imagesInfo">
                    <h3>Protetička stopala</h3>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6 imagesMain">
            <a href="komponente_protetika.php">
                <img src="images/pdkomponente.jpg" alt="..." class="img-responsive center-block">
                <div class="imagesInfo">
                    <h3>Komponente za protetiku</h3>
                </div>
            </a>
        </div>
        <div class="spacer" style="clear: both;"></div>
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