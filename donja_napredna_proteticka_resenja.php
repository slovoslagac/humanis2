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
    <h1 class="text-center">Napredna protetička rešenja</h1>
    <p><strong>HUMANIS</strong> kao lider u oblasti ortopetske protetike u svojoj ponudi donosi širok asortiman vrhunskih tehnoloških rešenja sa ciljem postavljanja novih standarda kvaliteta
        funkcionalnosti udobnosti I estetike.</p>
    <p>Sa željom da svojim korisnicima omogući život bez ograničenja tim HUMANIS-a zahvaljujući višegodišnjem iskustvu predano iznalazi najbolja rešenja. Uverite se.</p>
    <br>
    <div class="col-md-6 pull-left">
        <h3>Izdvajamo</h3>
        <ul>
            <li>Aktivni ili pasivni vakuum sistem bez upotrebe gel kolenice.</li>
            <li>Protetička mikroprocesorska kolena.</li>
            <li>PROTHEFLEX sistem protetičkih fleksibilnih ležišta</li>
            <li>CLIC MEDICAL adaptibilan dodatak protetičkim ležištima koji može pratiti dnevne oscilacije i promene voluma preostatka.</li>
        </ul>

    </div>
    <div class="col-md-5 col-sm-offset-1 pull-left">
        <iframe width="100%" height="300" src="https://www.youtube.com/embed/0GWbRvRdqjA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="imagesMain"></iframe>

    </div>
    <div class="horizontalLine"></div>

    <?php for ($i = 1; $i <= 7; $i++) { ?>
        <div class="col-md-3 pull-left">
            <div class="imagesMain img img-responsive">
                <img src="images/dnapredna<?php echo $i ?>.jpg" class="img img-responsive center-block">
            </div>
        </div>
    <?php } ?>


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