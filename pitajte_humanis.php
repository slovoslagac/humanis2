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
    <h1 class="text-center">Pitajte doktora</h1>
    <p>Dobrodošli na stranicu na kojoj možete zatražiti stručni savet i posavetovati se sa našim stručnjacima i stručnim saradnicima iz oblasti,ortopedske protetike i ortotike,rehabilitacije,
        flebologije,rehabilitacionih i pomoćnih medicinskih sredstava. </p>
    <p>Vaše pitanje možete postaviti na stranici KONTAKT sa naznakom oblasti ili stučnjaka odredjene oblasti.</p>
    <br>
    <div class="col-md-12 pull-left">
        <h4>Za HUMANIS</h4>
        <div class="row">
            <div class="col-md-3">
                <h3>dr. Zorica Minić</h3>
                <p>Rehabilitacija, koordinator zbrinjavanja protetika</p>
            </div>
            <div class="col-md-3">
                <img src="images/zorica.png" class="img img-responsive imagesMain">
            </div>
            <div class="col-md-3">
                <h3>c.p.o Aleksandar Filipović</h3>
                <p>Protetika i ortotika</p>
            </div>
            <div class="col-md-3">
                <img src="images/aleksandar.png" class="img img-responsive imagesMain">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>vft Miloš Janković</h3>
                <p>Rehabilitacija, dečija ortotika</p>
            </div>
            <div class="col-md-3">
                <img src="images/milos.png" class="img img-responsive imagesMain">
            </div>
            <div class="col-md-3">
                <h3>Danijela Jović Matijašević</h3>
                <p>Reha i pomoćna medicinska sredstva</p>
            </div>
            <div class="col-md-3">
                <img src="images/danijela.png" class="img img-responsive imagesMain">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>c.p.o Marko Lukić</h3>
                <p>Protetika i ortotika</p>
            </div>
            <div class="col-md-3">
                <img src="images/marko.png" class="img img-responsive imagesMain">
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