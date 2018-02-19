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
    <h1 class="text-center">Dečija ortotika</h1>
    <br>
    <div class="col-md-9 pull-left">
        <h3>Šta su ortoze?</h3>
        <p>Ortoze su pomagala za spoljnu aplIkaciju dizajnirana tako da se anatomski prilagođavaju telu. Ortoze se prepisuju i koriste da bi se određeni delovi tela tretirali sa ciljem korekcije
            deformiteta, stabilizacije, pružanje podrške kroz kretanje, smanjenje bola ili zaštite nakon povrede ili operacije.</p>
        <h3>Ortoze u pedijatriji – kome su potrebne?</h3>
        <p>Ortoze imaju važnu ulogu u podršci razvoja beba i dece i u primeni terapijskog zbrinjavanja na polju patologija u pedijatriji. Npr: oroze za abdukciju kukova kod beba radi pravilnog
            formiranja zbloba kuka, mideri za pravilan razvoj i korekciju deformiteta kičmenog stuba, proprioceptivne dinamičke ortoze za donje ekstremitete za stabinost tokom hoda i inhibiciju
            spazma.</p>
        <h3>Dinamičke ortoze za donje ekstremitete za decu sa cerebralnom paralizom</h3>
        <h4>Kako dinamičke ortoze za donje ekstremitete funkcionišu?</h4>
        <p>Zajednički naziv za tip ortoza koje se najčešće koriste kao pomagala za decu sa cerebralnom paralizom je - ankle foot orthosis (AFO). AFO ortoza se individualno izrađuje i u potpunosti
            prilagođava stopalu i skočnom zglobu. AFO dizajn i namena se razlikuju jer se prilagođava potrebama i ciljevima korisnika što često uključuje stabilizaciju i podršku ekstremitetu,
            korekciju deformiteta, prevenciju deformiteta, omogućava stabilnu bazu za sedenje i stajanje i facilitira sigurniji i stabilniji hod.</p>
        <p>AFO se koristi i kod dece koja imaju spinu bifidu, razvojne deformitete stopala. Rad ortotičara sa detetom (korisnikom), porodicom i članovima medicinskog tima omogućava da se na najbolji
            mogući način izvrši selekcija i izabere adekvatna AFO ortoza u svrhu postizanja boljeg funkcionisanja u svakodnevnim aktivnostima kao i u održavanju i postizanju trajnijeg terapijskog
            efekta.</p>
        <h3>Spinalne ortoze za decu i adolescente sa skoliozom i kifozom</h3>
        <h4>Kako spinalne ortoze funkcionišu?</h4>
        <p>
            Spinalne ortoze vrše korekciju položaja kičmenog stuba da bi se omogućio adekvatan i efikasniji (simetričniji) položaj kod dece i adolescenata kod kojih su narušene prirodne krivine
            kičmenog stuba i koje teže sve većem odstupanju.Primenjuju se kod kongenitalnih mana,zapaljenskih procesa mišićno-koštanih sistema,povreda nervno- mišićno- koštanog sitema i kod
            adolescenata koji imaju srednje strukturalne krivine (skolioza 25-45 stepeni i kifoza 55-80 stepeni) koji se nalaze jos u fazi rasta i razvoja.</p>
        <p>Ortotičar koristi znanje anatomije i biomehanike da dizajnira i izradi ortozu (mider izrađen od čvrste plastike) na kojoj se izrađuju zone pritiska da bi se popravio nepoželjan položaj i
            korigovao deformitet kičmenog stuba.
            Sa razvojem novih materijala, tehnologija i kliničkog pristupa u zbrinjavanju dizajn spinalnih ortoza se konstantno menja.
        </p>
        <h3>Ortoze za bebe sa razvojnom displazijom kukova</h3>
        <h4>Kako ortoze za kukove funkcionišu?</h4>
        <p>Bebe sa razvojnom displazijom kukova mogu biti uspešno lečene sa abdukcionim ortozama. Postoji više vrsta ortoza za kukove: Pavlikov pojas, Denis Braun aparat...
            Iako variraju u dizajnu ove ortoze pozicioniraju kuk u maksimalno stabilnom položaju pri čemu je gornji femoralni deo ekstremiteta podignut i rotiran u polje tako da ligamenti ostanu
            zategnuti što omogućava da se kuk pravilno formira. Ortotičar sarađuje sa medicinskim timom i porodicom kako bi odredio najadekvatniji dizajn ortoze ,koji najbolje odgovara zahtevima
            pozicije kuka individualno kod svake bebe.</p>
        <h3>Abdukcione Ortoze za stopala za decu sa kongenitalnim ekvinovarusom</h3>
        <p>Kongenitalni ekvinovarus (Congenital Talipes Equinovarus) je najzastupjeniji kongenitalni deformitet stopala koji pogađa 1 od 1000 novorođenih beba.</p>
        <p>Kako ortoze za stopala funkcionišu? </p>
        <p>Ovaj tip ortoza je koncipiran tako što se prvo stopalo dovede u maksimalno korigovan položaj, a zatim se postavi ortoza i na taj način se zadržava stopalo u položaju koji omogućava pravilan
            dalji razvoj, koriguje deformitet i sprečava povratak stopala u neadekvatnu poziciju. Potrebno je dobro odabrati dizajn i vrstu ortoze u skladu sa svim terapijskim postupcima uz
            konsultaciju sa porodicom i članovima medicinskog tima. Postoji više tipova dinamičkih abdukcionih ortoza koje se primenjuju u ovom slučaju neki od njih su; Dobbs Dynamic Abduction Brace,
            Markell Abduction Brace</p>
    </div>
    <div class="col-md-3">
        <?php for ($i = 1; $i <= 4; $i++) { ?>
            <div class="imagesMain">
                <img src="images/dortoze<?php echo $i ?>.jpg" class="img img-responsive center-block">
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