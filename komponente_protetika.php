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
    <h1 class="text-center">Komponente za proteze donjih ekstremiteta</h1>
    <p>Komponente kao što su stopala ,adapteri stopala, piloni, protetička kolena i zglobovi kuka preporučuju lekari specijalisti fizikalne medicine na preskripciji pomagala ili klinički specijalisti
        firme Humanis na osnovu korisničkog funkcionalnog nivoa koji je definisao pravilnik RFZO-a ili drugog osiguranja po kom korisnik ostvaruje pravo.</p>
    <br>
    <div class="col-md-9 pull-left">
        <h3>Dva pristupa</h3>
        <p>Postoje dva osnovna pristupa u izradi proteze donjeg ekstremiteta: egzoskeletni ili endoskeletni. Egzoskeletne proteze imaju tvrdu spoljnu plastičnu laminiranu školjku ili kožu sa
            unutrašnjom drvenom osnovom ili uretanskom penom. U egzoskeletnoj protezi, jačina je obezbeđena spoljnom laminacijom, a oblik ili kozmetika je integralni deo proteze. Ovaj dizajn proteze
            je veoma izdržljiv, međutim, izbor komponenenti je ograničen i težina proteze je obično teža od endoskeletnog dizajna. Može biti pogodna za osobu koja će dugi niz godina koristiti istu
            protezu.</p>
        <p>Endoskeletne proteze imaju unutrašnji oslonac koji se sastoji od lakšeg materijala, kao što su aluminijum, titan i grafit. Ovi modeli imaju zamenjive spojeve i druge komponente kao što su
            kolena i stopala. Oblik ili kozmetska obloga napravljena je od mekanog materijala koji se može ukloniti, koji je završen pomoću najlonskog creva ili drugog fleksibilnog materijala. Ovaj
            stil proteze je generalno prilagodljiviji i pogodan za ljude sa aktivnim načinom života. Endoskeletne proteze nude više komponentnih opcija sa više prilagodljivosti, kozmetska obloga je
            manje izdržljiva.</p>
        <p>Klinički protetičar će vam pomoći da odlučite koji dizajn je najbolji izbor za vas i vaš životni stil.</p>
        <h3>Piloni/Cev sa adapterom</h3>
        <p>Pilon je deo proteze koji prenosi težinu između ležišta i protetičkog stopala. Mnogi ljudi više vole dinamične pilone koji pomažu u amorizaciji sile koja se prenosi do preostatka svaki put
            kada peta udari u zemlju. Ovo je naročito važno za ljude koji redovno učestvuju u aktivnostima kao što su trčanje ili drugi sportovi. Neki piloni imaju apsorpciju momenta koji omogućavaju
            rotaciju stopala do 45 stepeni u bilo kom pravcu; količina otpora može se podesiti u zavisnosti od aktivnosti. Apsorpcija momenta može biti važna osobina za ljude koji igraju golf ili
            tenis.Mogu biti izradjeni od kompozita, inoxa, titana ili aluminijuma.</p>
        <h3>Protetička kolena</h3>
        <p>Kao i kod proetičkih stopala, na tržištu danas postoje mnogi različiti modeli protetskih kolena, možemo ih svrstati pod dve široke kategorije: mehanička i kompjuterizovana.</p>
        <p>Mehanička koljena mogu biti jednoosovinska ili policentrična (višeosovinska). Koleno sa jednim osovinom funkcioniše po principu šarke izdržljivo je, lagano i jeftino. Koristi klizno trenje
            kako bi se sprečilo brzo kretanje potkolenog dela i omogućilo jednu optimalnu brzinu hoda. Neka jednoosovinska kolena imaju mehaničku bravu koja zaključava koleno i pruža stabilnost
            prilikom hodanja, posebno kod slaboaktivnih pacijenata ili kod prvih zbrinjavanja.</p>
        <p>Policentrična koljena su dobra za aktivne ljude koji bi voleli veću stabilnost prilokom hoda.Osim mehaničkih postoje opcije koje imaju asistiranu pneumatsku ili hidrauličnu podršku koja
            omogućavaju korisniku udoban i siguran hodi pri različitim brzinama i različitim terenima.</p>
        <p>Kompjuterizovana ili mikroprocesorsko kontrolisana kolena su najnovija rešenja u tehnologiji kolena i korisnicima pružaju najveću stabilnost i maksimalno prirodni hod u odnosu na sve ostale
            tipove kolena. Mikroprocesor na ploči očitava parametre hoda 50 puta u sekundi, automatski prilagođavajući odgovor kolena površini za hodanje. Kolena kontrolisana mikroprocesorom su
            skuplja, ali mogu biti od velike koristi za svakog korisnika, naročito onih sa visokim nivoom aktivnosti ili višestrukim amputacijama ekstremiteta.</p>
        <h3>Zglobovi kuka</h3>
        <p>Stadardni zglob kuka deluje kao šarka, omogućavajući zglobu da se savije, a zatim da se blago ispruži. Zglob kuka sa kočnicom i graničnikom koraka nudi više stabilnosti.Dostupna su
            različita tehnička rešenja , anatomski ispravno pozicioniranje zgloba kuka je ono što osigurava sposobnost osobe da hoda. </p>
    </div>
    <div class="col-md-3">
        <?php for ($i = 1; $i <= 2; $i++) { ?>
            <div class="imagesMain">
                <img src="images/kprotetika<?php echo $i ?>.jpg" class="img img-responsive center-block">
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