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
    <h1 class="text-center">Protetička stopala</h1>
    <p>Ako ste imali amputaciju, u Humanis klinici vam pružamo najnapredniju i klinički odgovarajuću protetsku tehnologiju donjih ekstremiteta koja će vam pomoći da postignete svoje ciljeve i ponovo
        osvojite nezavisnost.</p>
    <br>
    <div class="col-md-9 pull-left">
        <h3>Tipovi protetičkih stopala</h3>
        <p>Svaka tehnologija ima svoje prednosti i benefite za protetske korisnike. Vaš protetičar će proceniti vaše specifične potrebe i aktivnosti svakodnevnog života kako
            biste utvrdili koji tip proteze će omogućiti optimalnu vašu nezavisnost, stabilnost, sigurnost i povjerenje.</p>

        <h4>Postoje mnogobrojna protetička stopala koja nude mnoge različite funkcije i prednosti. Primeri uključuju:</h4>
        <ul>
            <li>(SACH) Čvrsti zglob - mekana peta je osnovno stopalo koja se sastoji od drvenog jezgra sa spoljnom školjkom od uretana.</li>
            <li>Jednoosovinska stopala imaju pokret u zglobu stopala ,nude određeno podešavanje otpora i čvrstine uključivanjem izabranih umetaka od gume.</li>
            <li>Multiaksijalna stopala omogućavaju okretanje stopala uz povećavajući stabilnosti i udobnosti na neravnim površinama.</li>
            <li>Stopala sa dinamičkim odrazom čuvaju i vraćaju energiju dok korisnik šeta, što rezultira prirodnim hodom.Ova stopala se obično aplikuju na aktivnije pacijente.</li>
            <li>Stopala sa podešavajućom visinom potpetice idealna su za ljude koji žele da menjaju cipele sa različitim visinama pete,takodje su korisna za hod po nagibu ili nagnutom terenu.</li>
            <li>Stopala sa mikroprocesorom pružaju varijabilni otpor.Taj momenat kontroliše integrisani računar koji kontinuirano obrađuje informacije kao što su brzina hodanja, nagibi i neravne
                površine. Neka stopala imaju mogućnost podesivosti visine pete. Ona su predodredjena za umereno aktivne pacijente.
            </li>
        </ul>

    </div>
    <div class="col-md-3">
        <?php for ($i = 1; $i <= 2; $i++) { ?>
            <div class="imagesMain">
                <img src="images/pstopalo<?php echo $i ?>.jpg" class="img img-responsive center-block">
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