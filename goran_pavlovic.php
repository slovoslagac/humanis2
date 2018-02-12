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
    <div class="row">
        <div class="col-md-3 col-md-offset-1">
            <img src="images/goran_pavlovic.jpg" class="img img-responsive imagesMain">
        </div>
        <div class="col-md-7">
            <h1>Goran Pavlović</h1>
            <h5>Producent</h5>
            <br>
            <p>Nakon dugotrajnog lecenja i visestrukih operacija kao posledica osteosarkoma 2011. godine amputirana mi je desna noga iznad kolena. Iako radikalna operacija ispostavilo se da ce
                zahvaljujuci Humanis timu, pre svega Marku Lukiću i Aleksandru Lazareviću to zapravo biti put ka komotnijem i kvalitetnijem zivotu. Tada smo se odlucili za hidraulicno koleno i
                dinamicno kompozitno stopalo i nakon samo par nedelja posle dugo vremena da bih se slobodno kretao nisu mi bile potrebne ni stake ni stap. Zahvaljujuci dobroj protezi funkcionisem
                bukvalno 24 sata sedam dana u nedelji. Iako je moja profesija vrlo aktivna u svakodnevnom funkcionisanju ne srecem se ni sa kakvim ogranicenjima. Nakon svih ovih godina Marka i Sasu
                smatram i svojim prijateljima a ceo Humanis tim najtoplije preporucujem svima sa slicnim problemom.</p>

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