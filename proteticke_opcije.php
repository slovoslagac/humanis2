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
    <h1 class="text-center">Protetičke opcije</h1>

    <br>
    <div class="col-md-9 pull-left">
        <h3>Pasivna proteza</h3>
        <p>Pasivna proteza, koju možemo nazvati i kozmetičkom restauracijom, je jedna od opcija za pacijente sa gornjim ekstremitetima. To je odličan izbor za korisnike koji ne zahtevaju aktivnu
            protezu i kontrolu protetičke šake i hvata , ali ipak traže estetski prihvatljivu zamenu za ekstremitet.</p>
        <h3>Konvencionalna ili mehanička radna proteza </h3>
        <p>Konvencionalna ili mehanička radna proteza je izbor koji mnogi korisnici gornjeg ekstremiteta prihvataju. Ova proteza je spojena sa remenikom oko ramena ili gornjeg dela trupa. Kontroliše
            se pokretima gornjeg dela tela koji koristi kablovski priključak na jednom kraju i mehaničku šaku, kuku ili lakat na drugom kraju. Mnogi pacijenti smatraju da im ova vrsta proteze daje
            širok spektar osnovnih funkcija i kontrole.</p>
        <h3>Mioelektrična proteza</h3>
        <p>Jedna od najpopularnijih je mioelektrična kontrola. Korisnik kontroliše protezu kontrakcijom mišića u preostatku, stvarajući EMG signale koji aktiviraju motor u laktu, zglobu ili šaci.
            Neki pacijenti smatraju da mioelektrična proteza omogućava veći spektar kretanja, prirodniji izgled i poboljšanu radnu sposobnost. Takođe je udobnija jer je potreba za spoljnjom
            suspenzijom (remenicima) manja ili se potpuno eliminiše.</p>
        <h3>Hibridna proteza</h3>
        <p>Kombinujući elemente konvencionalne i električne proteze stvara se još jedna opcija - hibrid. Hibridna proteza pruža korisniku jedinstvenu mogućnost da istovremeno upravlja laktom i
            rukom. Ova karakteristika može dramatično povećati potencijal rehabilitacije pojedinaca.</p>
        <p>Konačno, adaptivna proteza je namenjena osobi čiji se specijalizovani zahtevi ne mogu zadovoljiti drugim opcijama. Različiti terminalni nastavci se mogu koristiti u zavisnosti od
            specijalizovanih aktivnosti. Na primer, prilagođeni dodaci mogu se izraditi za fotografisanje, plivanje, košarku, bejzbol, golf, ribolov, bazen i većinu drugih rekreativnih
            aktivnosti. </p>
    </div>
    <div class="col-md-3">
        <?php for ($i = 1; $i <= 3; $i++) { ?>
            <div class="imagesMain">
                <img src="images/popcije<?php echo $i ?>.jpg" class="img img-responsive center-block">
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