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
        <h1 class="text-center">Mobilnost</h1>
        <br>
        <div class="row text-center">
            <div class="col-md-4 imagesMain">
                <a href="#">
                    <img src="images/aktivna.jpg" alt="..." class="img-responsive center-block">
                    <div class="imagesInfo">
                        <h3>Aktivna kolica</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-4 imagesMain">
                <a href="#">
                    <img src="images/mehanicka.jpg" alt="..." class="img-responsive center-block ">
                    <div class="imagesInfo">
                        <h3>Mehanička kolica</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-4 imagesMain">
                <a href="#">
                    <img src="images/neuroloska.jpg" alt="..." class="img-responsive center-block ">
                    <div class="imagesInfo">
                        <h3>Neurološka kolica</h3>
                    </div>
                </a>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4 imagesMain">
                <a href="#">
                    <img src="images/decija.jpg" alt="..." class="img-responsive center-block">
                    <div class="imagesInfo">
                        <h3>Dečija kolica</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-4 imagesMain">
                <a href="#">
                    <img src="images/elektromotorna.jpg" alt="..." class="img-responsive center-block ">
                    <div class="imagesInfo">
                        <h3>Elektromotorna kolica</h3>
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