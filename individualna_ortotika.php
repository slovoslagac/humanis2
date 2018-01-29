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
    <h1 class="text-center">Individualna ortotika</h1>
    <br>
    <div class="col-md-9 pull-left">
        <h3>Šta su ortoze?</h3>
        <p class="text-justify">Ortoze su pomagala za spoljnju aplikaciju dizajnirana tako da se anaomski prilagodjavaju telu. Ortoze se prepisiju i koriste da bi se odredjeni delovi tela tretirali sa
            ciljem korekcije deformiteta, stabilizacije, pružanja podrške kroz kretanje, smanjenje bola ili zaštite nakon povrede ili operacije.</p>
        <p class="text-justify">Ortotička pomagala mogu da variraju od imobilizatora i splitera za prste, pa do kompletnog egzoskeleta. Mogu se proizvoditi od različitih materijala, uključujući gumu,
            kožu, platno, gumenu sintetiku i termoplastiku.</p>
        <p class="text-justify">U zavisnosti od kliničke slike, potreba svakodnevnih aktivnosti, deformiteta ortoze se mogu izraditi individualno i time u potpunosti prilagoditi korisniku. </p>
        <hr>
        <h3>Podela ortoza prema regiji zbrinjavanja: </h3>
        <br>
        <h4>Ortoze gornjih ekstremiteta:</h4>
        <ul>
            <li>WO - (wristorthosis) Ortoze za ručni zglob</li>
            <li>WHO (wrist-handorthosis) Ortoze za šaku i ručni zglob</li>
            <li>EO (elboworthosis) Ortoze za lakat</li>
            <li>EWHO (elbow- wrist-handorthosis) Ortoze za lakat,ručni zglob i šaku</li>
            <li>SEWHO (shoulder-elbow- wrist-handorthosis) Ortoze za rame, lakat, ručni zglob i šaku</li>
        </ul>
        <h4>Ortoze donjih ekstremiteta: </h4>
        <ul>
            <li>FO (footorthosis) Ortoze za stopalo</li>
            <li>AFO (anklefootorthosis) Ortoze za stopalo i skočni zglob</li>
            <li>KO (kneeorthosis) Ortoze za koleno</li>
            <li>KAFO(knee -anklefootorthosis) Ortoze za koleno, skočni zglob i stopalo</li>
            <li>HKAFO (hip -knee -anklefootorthosis) Ortoze za kuk, koleno,skočni zglob i stopalo</li>
        </ul>
        <h4>Ortoze za kičmeni stub (mideri i korseti): </h4>
        <ul>
            <li>LSO Lumbalno -sakralna ortoza</li>
            <li>TLSO Torako-lumbalno-sakralna ortoza</li>
            <li>CO cervikalne ortoze (kragne)</li>
        </ul>
    </div>
    <div class="col-md-3">
        <?php for ($i = 1; $i <= 5; $i++) { ?>
            <div class="imagesMain">
                <img src="images/ortoze<?php echo $i ?>.jpg" class="img img-responsive center-block">
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