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
    <h1 class="text-center">Mobilnost</h1>
    <br>
    <div class="row">
        <h3>Laka aktivna kolica</h3>
        <div class="col-md-8">
            <p>Ručna lagana invalidska kolica dizajnirana da odgovaraju vašem aktivnom životnom stilu! </p>
            <p>Lagana invalidska kolica su tvoj produžetak, savršena usklađenost sa aktivnim načinom života i izrazom vaše ličnosti!</p>
            <p>Naša ponuda invalidskih kolica sastoji se od čvrstih i laganih invalidskih kolica, preklopnih invalidskih kolica sa mogućnošću pozicioniranja nagiba,koja su dizajnirana tako da
                obezbede vrhunsku kontrolu, odlične vozne performanse i visoko podesiva kako bi odgovarali vama i vašim potrebama.</p>
            <p>Sva kolica se izradjuju individualno po mernom listu u zavisnosti od Vaših potreba.</p>
            <p>Svaka invalidska kolica ima svoju osobenu ličnost, koja se slaže sa vašim? </p>
        </div>
        <div class="col-md-3 col-md-offset-1">
            <img src="images/kolica1.jpg" class="img img-responsive imagesMain">
        </div>
    </div>
    <div class="row">
        <h3>Standardna mehanička kolica</h3>
        <div class="col-md-8">
            <p>Standardna mehanička invalidska kolica su izrađena od trajnih čeličnih ili aluminijumskih ramova. Oni su visokokvalitetni, pouzdani i uključuju opcije za udobnost korisnika i
                negovatelja.</p>
        </div>
        <div class="col-md-3 col-md-offset-1">
            <img src="images/kolica2.jpg" class="img img-responsive imagesMain">
        </div>
    </div>
    <div class="row">
        <h3>Neurološka kolica</h3>
        <div class="col-md-8">
            <p>Neurološka invalidska kolica ili multifunkcionalna kolica su namenjena osobama potpuno zavisnim od drugih lica.</p>
            <p>U zavisnosti od indikacija i potrebe korisnika dostupni su različiti modeli .</p>
            <p>Osnovne karakteristike obuhvataju sklopivu konstrukciju ,uklonjiv i podesiv naslon za noge, podesivi i skidajući naslon za ruke, podesiv naslon za glavu, bočne pelote za
                stabilizaciju trupa, jastučnicom i anti-roll sistemom. </p>

        </div>
        <div class="col-md-3 col-md-offset-1">
            <img src="images/kolica3.jpg" class="img img-responsive imagesMain">
        </div>
    </div>
    <div class="row">
        <h3>Dečija kolica</h3>
        <div class="col-md-8">
            <p>Pedijatrijska kolica su idealna ukoliko vaše dete ima promenljive potrebe ili vam je za porodicu potrebna izuzetno prenosiva opcija za čuvanje u tesnim prostorima ili prevoz u vašem
                vozilu. </p>
            <p>Dizajnirane specijalno za decu, ona su jednostavna za upotrebu, pouzdana i uključuju ugrađene opcije kako bi držala korak sa detetom dok raste! </p>

        </div>
        <div class="col-md-3 col-md-offset-1">
            <img src="images/kolica4.jpg" class="img img-responsive imagesMain">
        </div>
    </div>
    <div class="row">
        <h3>Elektromotorna kolica</h3>
        <div class="col-md-8">
            <p>Startna i laka za manevrisanje, kolica sa srednjim ili zadnjim pogonom za vaš samostalni život .</p>
            <p> Dodjite da izaberemo kolica sa kojima će te imati superiorno pozicioniranje uz maksimalni konfor. Sofisticirani sistemi oslanjanja, širok spektar sistema za sedenje i brojne opcije
                kontrole pogona postvljaju vašu nezavisnost na sledeći nivo.</p>
            <p>Individualna izrada po mernom listu. </p>

        </div>
        <div class="col-md-3 col-md-offset-1">
            <img src="images/kolica5.jpg" class="img img-responsive imagesMain">
        </div>
    </div>
    <br>
    <hr>
    <p class="text-center"><strong>*Pozovite nas u vezi karakteristika i dostupnosti modela za Vaše potrebe.</strong></p>
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