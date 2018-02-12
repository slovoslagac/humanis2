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
    <h1 class="text-center">Pomoćna sredstva za kretanje</h1>

    <br>
    <div class="row">
        <div class="col-md-3">
            <h4>Štap na rasklapanje</h4>
            <img src="images/staprasklapanje.jpg" class="img img-responsive center-block">
        </div>
        <div class="col-md-3">
            <h4>Štap sa tri ili šetri tačke oslonca</h4>
            <img src="images/staptrioslonca.jpg" class="img img-responsive center-block">
        </div>
        <div class="col-md-3">
            <h4>Drvene potpazušne štake</h4>
            <img src="images/stakedrvenepazuh.jpg" class="img img-responsive center-block">
        </div>
        <div class="col-md-3">
            <h4>Aluminujumske potpazušne štake</h4>
            <img src="images/stakealuminijumskepazuh.jpg" class="img img-responsive center-block">
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <h4>Podlakatne štake</h4>
            <img src="images/stakelakat.jpg" class="img img-responsive center-block">
        </div>
        <div class="col-md-3">
            <h4>Recipročna hodalica fiksna/zglobna</h4>
            <img src="images/hodalicareciprocna.jpg" class="img img-responsive center-block">
        </div>
        <div class="col-md-3">
            <h4>Hodalica sa prednjim točkovima</h4>
            <img src="images/hodalicaprednjitockovic.jpg" class="img img-responsive center-block">
        </div>
        <div class="col-md-3">
            <h4>Hodalica sa četiri točka i sedištem za odmor</h4>
            <img src="images/hodalicacetiritocka.jpg" class="img img-responsive center-block">
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