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
    <h1 class="text-center">Amputacioni nivoi</h1>
    <p>Tip proteze koju ćete nositi zasniva se uglavnom na dužini vašeg preostatka.</p>
    <br>
    <div class="col-md-9 pull-left">
        <h3>Različiti tipovi amputacija</h3>
        <p>Postoji nekoliko različitih tipova amputacija gornjeg ekstremiteta koji mogu nastati, uključujući:</p>
        <ul>
            <li>Prsti ili delimična amputacija šake (transfalangealno ili transcarpalno)</li>
            <li>Dezartikulacija zgloba šake (preko zglobnog šake)</li>
            <li>Podlakatna (transradijalna)</li>
            <li>Dezartikulacija lakta (kroz laktatni zglob)</li>
            <li>Iznad lakta (transhumerno)</li>
            <li>Bilateralni (amputacija na obe strane tela)</li>
            <li>Dezartikulacija ramena (preko ramenskog zgloba)</li>
            <li>Interskapularna (uklanjanje čitavog ramena)</li>
        </ul>
    </div>
    <div class="col-md-3">
        <?php for ($i = 1; $i <= 1; $i++) { ?>
            <div class="imagesMain">
                <img src="images/anivoi<?php echo $i ?>.jpg" class="img img-responsive center-block">
            </div>
        <?php } ?>
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