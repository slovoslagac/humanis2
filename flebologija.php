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
    <h1 class="text-center">Flebologija / kompresivne čarape</h1>
    <br>
    <div class="greypart">
        <h3>Proizvodi:</h3>
        <div class="row">
            <div class="col-sm-3">
                <img src="images/tubuculus.png" class="center-block">
            </div>
            <div class="col-sm-3">
                <img src="images/actys.png" class="center-block">
            </div>
            <div class="col-sm-3">
                <img src="images/legger.png" class="center-block">
            </div>
        </div>
        <br>
        <h3>Specifičnosti proizvoda:</h3>
        <div class="row imagesMain">
            <div class="col-md-3">
                <img src="images/fip.jpg" class="img img-responsive">
            </div>
            <div class="col-md-9">
                <h4>Velika lakoća navlačenja</h4>
                <p>Profil pritiska specifično prilagođen području stopala za olakšano navlačenje.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <img src="images/3up.jpg" class="img img-responsive">
            </div>
            <div class="col-md-9">
                <h4>Čarape ne spadaju prilikom nošenja</h4>
                <p>Patentirana tehnologija izrade koja obezbeđuje da čarape i dokolenice ne spadaju prilikom nošenja.</p>
            </div>
        </div>
    </div>
    <div class="lightgreenpart">
        <h3>Tubulcus:</h3>
        <div class="row">
            <div class="col-md-3">
                <img src="images/tubulcus1.jpg" class="center-block">
            </div>
            <div class="col-md-9">
                <p>Tubulcus ® je kompresivna tubularna ortoza bez umetnute pete sa otvorenim prstima i dvostrukim elastičnim tkanjem. Izrađena je od Pamuka 27%, Poliamida 39% i Elastana 34%.</p>
                <p>Pakovanje: Kutija sa 2 Tubulcus ®-a i jednim pozicionerom (pomagalo za jednostavno postavljanje čarapa)</p>
                <p>Tubulcus ® je dostupan u apotekama i specijalizovanom prodavnicama za prodaju medicinskih sredstava.</p>
            </div>
        </div>
    </div>
    <div class="greypart">
        <h3>Actys:</h3>
        <div class="row">
            <img src="images/actys1.jpg">
        </div>
        <h4>Indikacije</h4>
        <ul>
            <li>proširene vene više od 3 mm širine,</li>
            <li>nakon hirurškog lečenja ili skleroterapije proširenih vena, koje su šire od 3mm, tokom 4 do 6 nedelja,</li>
            <li>hronični venski edem,</li>
            <li>trofičke promene kože (hiperpigmentacija, ekcem) zbog poremećaja venske cirkulacije,</li>
            <li>hronični trofički poremećaji (lipodermatoskleroza ili inflamacija hipoderma, bela atrofija) zbog poremećaja venske cirkulacije,</li>
            <li>trofičke promene zbog poremećaja venske cirkulacije sa ulkusom koji je zarastao ožiljkom</li>
            <li>lečenje tromboze površinskih vena donjih ekstremiteta, što je ranije moguće nakon dijagnoze (zajedno sa terapijom protiv tromba ukoliko je indikovana ili bez),</li>
            <li>lečenje tromboze dubokih vena donjih ekstremiteta, u akutnoj fazi, što je ranije moguće nakon dijagnoze (zajedno sa terapijom protiv tromba ukoliko nije kontraindikovana),</li>
            <li>prevencija posttrombotskog sindroma nakon tromboze dubokih vena u proksimalnom delu, tokom 2 godine,</li>
            <li>limfedem,</li>
            <li>tokom trudnoće ili post-partuma u slučaju pojave hroničnih oboljenja vena,</li>
            <li>za superponiranje da bi se postigli veći pritisci.</li>

        </ul>
    </div>
    <div class="lightgreenpart">
        <h3>Legger Classic:</h3>
        <div class="row">
            <div class="col-md-3">
                <img src="images/legger1.jpg">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-9">
                <p>Muškarci nisu izuzetak! Činjenica koja se suviše često zaboravlja je da muškarci takođe pate od problema sa venskom cirkulacijom. </p>
                <p>Za njih smo izradili čarapu Legger Classic 25. Visoka finoća vlakana postiže se kombinacijom mikrofiber vlakana i mekog i paperjastog egipatskog pamuka.</p>
                <p>Vrlo elegante, prilagođena morfologiji muške noge. Legger je prefinjen, dostupan u klasi III, u tri boje: crna, pepeljasto siva i bež.</p>
                <p>Nosite ih svaki dan jer Vas oslobađaju simptoma venske insuficijencije. Pritisak koje one vrše na skočni zglob sprečava zastoj krvi u venama nogu i na taj način pospešuje vensku
                    cirkulaciju.</p>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="imagesMain">
            <img src="images/carape1.png" class="img img-responsive center-block">
        </div>
    </div>
    <div class="row">
        <div class="imagesMain">
            <img src="images/carape2.png" class="img img-responsive center-block">
        </div>
    </div>
    <div class="row">
        <div class="imagesMain">
            <img src="images/carape3.png" class="img img-responsive center-block">
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