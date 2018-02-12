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
    <h1 class="text-center">Ortoze i mideri donjih ekstremiteta</h1>
    <br>
    <div class="row">
        <div class="col-md-4">
            <h4><strong>Miofit 33</strong> (Steznik za butinu)</h4>
            <p>
                M.H1133
                <strong>Indikacije:</strong> neprijatne senzacije i grcevi u butini, pomagalo pri nastavku sa sportskim aktivnostima nakon povrede, prevencija hematoma.
                <strong>Velicina:</strong> S, M, L, XL, XXL
            </p>

        </div>
        <div class="col-md-2">
            <img src="images/miofit33.jpg" class="img img-responsive center-block imagesOrto">
        </div>

        <div class="col-md-4">
            <h4><strong>Object</strong> (Steznik za koleno sa stabilizatorom patele) </h4>
            <p>
                M.404
                <strong>Indikacije:</strong> bol u regiji kolena usled hematoma, rana faza artroze, hondromalacija patele, umerena nestabilnost patele, prevencija dislokacije patele usled sportskih aktivnosti.
                <strong>Velicina:</strong> S, M, L, XL, XXL
            </p>
        </div>
        <div class="col-md-2">
            <img src="images/object.jpg" class="img img-responsive center-block imagesOrto">
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <img src="images/genufit4.jpg" class="img img-responsive center-block imagesOrto">
        </div>
        <div class="col-md-4">
            <h4><strong>Genufit 04</strong> (Ortoza za koleno sa spiralnim udlagama i stabilizatorom patele)</h4>
            <p>

                <strong>Indikacije:</strong> gonalgija usled povrede sa umerenim istegnućem kolateralnih ligamenata (kada nije operativno), umerena lateralno-medijalna nestabilnost  patele, femoro-patelarna artroza.
                <strong>Velicina:</strong> XS, S, M, L, XL, XXL
            </p>

        </div>
        <div class="col-md-2">
            <img src="images/genufit15.jpg" class="img img-responsive center-block imagesOrto">
        </div>
        <div class="col-md-4">
            <h4><strong>Genufit 15</strong> (Ortoza za koleno sa zglobovima i stabilizatorom patele) </h4>
            <p>
                M.415
                <strong>Indikacije:</strong>  artroza kolena, povreda sa posledicom nestabilnosti (istegnuća) kolateralnih ligamenata (kada nije operativno), umerena lateralno-medijalna nestabilnost patele, femoro-patelarna artroza.
                <strong>Velicina:</strong> XS, S, M, L, XL, XXL
            </p>
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