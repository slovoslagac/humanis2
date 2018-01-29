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
    <div class="container container-fluid">
        <h1 class="text-center">Specijalizovana prodavnica</h1>
        <br>
        <div class="row text-center">
            <div class="col-md-4 imagesMain">
                <a href="#">
                    <img src="images/ortoze&mideri.jpg" alt="..." class="img-responsive center-block">
                    <div class="imagesInfo">
                        <h3>Ortoze i mideri</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-4 imagesMain">
                <a href="#">
                    <img src="images/Kompresivne_carape.jpg" alt="..." class="img-responsive center-block ">
                    <div class="imagesInfo">
                        <h3>Flebologija/ kompresivne čarape</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-4 imagesMain">
                <a href="#">
                    <img src="images/Toaletni%20program.jpg" alt="..." class="img-responsive center-block ">
                    <div class="imagesInfo">
                        <h3>Toaletni program</h3>
                    </div>
                </a>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4 imagesMain">
                <a href="#">
                    <img src="images/Antidekubitalni_program.jpg" alt="..." class="img-responsive center-block">
                    <div class="imagesInfo">
                        <h3>Antidekubitalni program</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-4 imagesMain">
                <a href="#">
                    <img src="images/Pomocna_sredstva_za_kretanje.jpg" alt="..." class="img-responsive center-block ">
                    <div class="imagesInfo">
                        <h3>Pomoćna sredstva za kretanje</h3>
                    </div>
                </a>
            </div>
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