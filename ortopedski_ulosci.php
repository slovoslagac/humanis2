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
    <h1 class="text-center">Ortopedski ulošci</h1>
    <br>
    <div class="col-md-9 pull-left">
        <p>Ortopedski ulošci su posebno dizajnirani umetci za cipele, koji pomažu da se povrati prirodni položaj stopala. Tip ortopedskih uložaka koji je potreban za vase stopalo zavisi od fizioloških
            karakteristika stopala,od načina na koji prenosimo silu preko njega i od obuće koju nosimo. Pažljivim odabirom i dizajnom ortopedskog uloška stopalo se može vratiti u svoj prirodni položaj
            i funkciju. Ovo će sprečiti štetne promene u drugim zglobovima, mišićima i ligamentima i smanjiti bolove u stopalu.
        </p>
        <h3>Simptomi</h3>
        <p>Mnogi simptomi koji se javljaju na našem stopalu i koji se kreću od opštih bolova do bolnih problema na kostima i stopalima kao što su bolovi na peti, čukljevi, žuljevi i čekićasti prsti
            su prouzrokovani spuštenim i urušenim svodovima stopala. Ortopedski uložak pomaže u poravnavanju zglobova unutar stopala kako bi se ti simptomi ublažili. Ortopedski ulošci mogu se takođe
            koristiti kao alternativa operaciji, ili nakon operacije kako bi se održao pravilan balans.</p>
        <h3>Dečiji ortopedski ulošci</h3>
        <p>Ortopedski ulošci za decu mogu biti od velike koristi u slučajevima kada je dijagnostikovano ravno stopalo ili prekomerna pronacija stopala (spusteni svodovi i unutrašnja rotacija iznad
            zglobnog zgloba) ili ako postoji bol prilikom hoda koji je prouzrokovan raznim uzročnicima , kao što je bol u peti (Severov sindrom) ili bol u kolenu (Osgood Schlatters.).Jako je bitno što
            ranije jasno dijagnostikovati problem i uz izradu individualnih ortopedkih uložaka vratiti telu dobru biomehaničku potporu radi ubaživanja simptoma i daljeg pravilnog razvoja.U nekim
            slučajevima kada zbog stanja ili patologija nije moguće tretirati deformitet ortopedskim ulošcima stopalo se tretira ortotskim pomagalima(ortozama za stopalo).</p>
        <h3>Ulošci za dijabetično stopalo</h3>
        <p>Šetnja nije samo odlična aktivnost, takođe veoma korisna za naše zdravlje. Ipak, za ljude sa dijabetesom, to bi moglo doneti niz rizika. Usled smanjene senzacije stopala može nastati veliki
            broj povreda. Shodno tome, morate obratiti veliku pažnju kada je u pitanju sprečavanje rana ili ulcera na stopalima.
            Dobra stvar je što možete sprečiti veliki broj povreda stopala samo brigom o stopalima.Adekavtno individualno izrađeni ulošci će ravnomerno rasporediti pritisak preko cele površine
            stopala rasterećujući tako prominentne tačke i dajući potporom bolju prokrvljenost stopala.Kombinacijom mekanog materijala i čvrste potpore stopalu dajemo dve osnovne potrebe absorpciju
            mehaničkog pritiska i podršku koštano zglobnog sistema.</p>
        <h3>Sportski ulošci</h3>
        <p>Bavljenje sportom od rekrativnog do profesionalnog iziskuje pojačan napor i pojačanu dinamiku i naprezanja koja u zavisnosti od vrste sporta kojom se bavimo povećavaju opterećenje i stres
            za naša stopala.
            Kompijuterskom analizom stopala u mirovanju i dinamici jasno se utvrđuje način na koji ostvarujemo balans ,prenoseći sile i opterećenje preko stopala.Te informacije zajedno sa
            kombinacijom materijala će nam poslužiti za krajnje individualan pristup u izradi ortopedskih uložaka , koji će za cilj imati dobru absorpciju sila prilikom naprezanja, dinamičku potporu
            koštano zglobnog sistema ,stabilizaciju stopala prilikom promene kretanja kao i elastičan odraz.</p>
    </div>
    <div class="col-md-3">
        <?php for ($i = 1; $i <= 6; $i++) { ?>
            <div class="imagesMain">
                <img src="images/ulosci<?php echo $i ?>.jpg" class="img img-responsive center-block">
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