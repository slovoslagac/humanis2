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
    <h1 class="text-center">Toaletni program</h1>

    <br>
    <div class="row">
        <div class="col-md-4 col-md-offset-2 col-xs-9">
            <h4>Toaletni plastični nastavak za wc školjku 10-15cm</h4>
            <img src="images/tprogram1.jpg" class="img img-responsive center-block">
        </div>
        <div class="col-md-4 col-xs-9">
            <h4>Mekani nastavak za wc školjku 10- 15 cm</h4>
            <img src="images/tprogram2.jpg" class="img img-responsive center-block">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-2 col-xs-9">
            <h4>Toaletna stolica</h4>
            <img src="images/tprogram3.jpg" class="img img-responsive center-block">
        </div>
        <div class="col-md-4 col-xs-9">
            <h4>Toaletna kolica</h4>
            <img src="images/tprogram4.jpg" class="img img-responsive center-block">
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