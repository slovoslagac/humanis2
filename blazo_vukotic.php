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
            <img src="images/blazo_vukotic.jpg" class="img img-responsive imagesMain">
        </div>
        <div class="col-md-7">
            <h1>Blažo Bata Vukotić</h1>
            <h5>Inženjer iz Nikšića</h5>
            <br>
            <p>Nakon ozbiljne frakture desne potkolenice i infekcije koja me je zadesila u Francuskoj pored svih pokusaja lekara da se sanira nije bilo drugog resenja od amputacije u natkolenom
                delu.</p>
            <p>Nastupio je veoma delikatan i tezak period za mene i moju porodicu.Prebacen sam za Beograd i primljen u Specijalnu bolnicu za rehabilitaciju gde je tim na celu sa dr Igorom Simanjicem
                odmah pristupio preprotetickoj rehabilitaciji spremajuci me za mojiu prvu protezu.</p>
            <p>Nakon konsultacija izabrao sam kucu i tehnicara koji ce mi izraditi pomagalo...sada vidim da posle obavezne rehabilitacije je to na moju veliku srecu bio pravi izbor.Tada sam se upoznao
                sa Markom Lukicem i zapoceli smo nasu saradnju.</p>
            <p>Prva proteza bila je preko naloga RFZO ...standardno leziste klasican sistem ..napravio sam svoje prve korake bilo je naporno ali posle cetiri duga meseca ponovo sam se uspravio na
                svoje noge i napravio svoje prve korake.Usledile su stalne vezbe u zavodu uz terapeuta i proteticara...
                Kako sam napredovao tako sam i uvideo da ovaj tip pomagala zapravo uskracuje veliki deo kofora i funkcije.Poceli smo konsultacije o mogucim tehnickim resenjima koji bi unapredili
                kvalitet i funkciju u svakodnevnim aktivnostima.</p>
            <p>Nakon dugo vremena provedenog u trazenju sta bi bilo najadekvatnije za mene, u dogovoru sa svojim ortopedskim tehnicarem dosli smo do idealne kombinacije razlicitih tehnika i brendova
                sublimiranih u individualno resenje koje meni danas omogucava punu pokretljivost i samostalnost. Pored silikonskog linera i vakuumskog lezista, veliku ulogu ima i preporuka za
                mikroprocesorsko koleno koje je postalo moj pravi partner u svakodnevnim aktivnostima.</p>
            <p>Danas protezu koristim u toku celog dana bez ogranicenja pruza mi punu stabilnost i funkciju da nenapominjem komfor koji pruza proteticko leziste sa silikonskim umetkom.
                U nadi da cemo i dalje zajedno unapređivati moje mogucnosti, pozdravljam Vas.</p>

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