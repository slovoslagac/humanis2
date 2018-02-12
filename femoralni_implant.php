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
    <br>
    <div class="row center-block">
        <div class="col-sm-2 col-sm-offset-2">
            <img src="images/femi1.png" class="img img-responsive center-block imagesMain">
        </div>
        <div class="col-sm-2 col-sm-offset-1">
            <img src="images/femi2.png" class="img img-responsive center-block imagesMain">
        </div>
        <div class="col-sm-2 col-sm-offset-1">
            <img src="images/femi3.png" class="img img-responsive center-block imagesMain">
        </div>
    </div>
    <br>
    <p> Keep Walking femoralni implant je razvila kompanija Tequir iz Valensije ,Španija sa kojom u saradnji sprovodimo zajedničku viziju ulažući najbolje napore u razvoj projekata koji pacijentima
        pružaju superiorni kvalitet života. Mi aktivno promovišemo saradnju sa specijalizovanim kliničkim timovima provodeći sve to u delo prema preciznom cilju: Da dovedemo tehniku tehnologiju i
        superiorne proizvode na naše tržište.</p>
    <h3>Femoralni implant </h3>
    <p>Femoralni implant “Keep Walking” predstavlja rešenje za pacijente koji su bili podvrgnuti amputaciji donjeg ekstremiteta na femoralnom nivou i žele da poboljšaju kapacitet svog hoda, povećaju
        propriocepciju i udobnost proteze, čime će umanjiti uobičajene probleme koji utiču na patrljak i izbeći demineralizaciju koja vremenom ostavlja posledice na preostatak femura uz korišćenje
        distalne proteze sa punjenjem.</p>
    <h3>Ciljna grupa</h3>
    <p>Osobe koje su bile ili će biti podvrgnute amputaciji donjeg ekstremiteta na transfemoralnom nivou usled bolesti vaskularnog, traumatskog ili tumorskog porekla.</p>
    <p>Pacijenti čija dužina femoralnog preostatka iznosi više od 14 cm (5,51 inča) u ranoj hirurškoj implantaciji (amputacija i implantacija izvode se tokom iste operacije), ili iznosi 16 cm (6,30
        inča) u odloženoj hirurškoj implantaciji (kada se implant koristi na već amputiranim pacijentima), pri čemu se kao referentna vrednost uzima veliki trohanter.</p>
    <p>Pacijenti kod kojih je očekivana funkcionalnost nakon implantacije na nivou K2-K3.</p>
    <h3>Kontraindikacije</h3>
    <h4>Relativne</h4>
    <ul>
        <li>Jaka osteopenija (kod tehnike pritiska).</li>
        <li>Prethodna infekcija patrljka.</li>
        <li>Deformacija fleksije kuka veća od 30⁰.</li>
        <li>Osteoporoza.</li>
        <li>Dužina preostatka femura između 12 i 14 cm (4,72 i 5,51 inča) mereno od velikog trohantera.</li>
    </ul>
    <h4>Apsolutne</h4>
    <ul>
        <li>Aktivna neoplazija</li>
        <li>Hemioterapijski tretman</li>
        <li>Imunosupresija</li>
        <li>Sepsa ili aktivna infekcija</li>
        <li>Dužina preostatka femura manja od 12 cm (4,72 inča) mereno od velikog trohantera.</li>
        <li>Trudnoća</li>
        <li>Zavisnost od alkohola i droge, itd.</li>
        <li>Promene na centralnom nervnom sistemu</li>
        <li>Nesaradljiv pacijent sa neurološkim ili psihijatrijskim poremećajem, koji nije u stanju da prati pravila rehabilitacije.</li>
        <li>Alergija na neku od komponenti implanta.</li>
    </ul>
    <br>
    <h4>Ako želite da saznate više o Keep Walking implantu , molimo pozovite nas na kontakt telefone dostupne na kontakt stranici. </h4>
    <br>
    <div class="row">
        <div class="col-sm-6">
            <img src="images/femi101.jpg" class="img img-responsive center-block imagesMain">
        </div>
        <div class="col-sm-6">
            <img src="images/femi102.jpg" class="img img-responsive center-block imagesMain">
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