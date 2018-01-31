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
    <div class="container container-fluid">
        <h1 class="text-center">Antidekubitalni program</h1>
        <br>
        <div class="row">
            <h3>Pneumatski jastuk</h3>
            <div class="col-md-8">
                <p>Antidekubitni pneumatski jastuk ima komore koje se pune vazduhom čime se rasterećuje sedalni deo i vrši blaga masaža. Napravljen je od posebne gume, mekane za sedenje ali otporne na
                    urin. Pravi se u više dimenzija i dve visine, 6 i 10 cm. Pneumatski jastuk ima najviši IV stepen zaštite od nastanka dekubita, po Nortonovoj skali. Preporučuje se osobama koje
                    stalno sede, kao prevencija nastanka dekubita a posebno osobama kod kojih su se dekubiti već pojavili. </p>
            </div>
            <div class="col-md-3">
                <img src="images/antidekub1.jpg" class="img img-responsive imagesMain">
            </div>
        </div>
        <div class="row">
            <h3>ROHO jastuk</h3>
            <div class="col-md-8">
                <p>ROHO jastuk kombinuje AIR FLOTATION jastuk sa sunđerastom bazom. Kombinacijom ROHO DRY FLOTATION tehnologije sa sunđerastom bazom poboljšava se zaštita kože, pozicioniranje,
                    pokretljivost i udobnost. Zaštita tkiva koncentrisana je na sedalne kvrge, krsnu kost i zglob kuka, dok je stabilnost i pozicioniranje fokusirano na karlicu i butine. dealan je za
                    aktivne i manje aktivne korisnike. Jastuk je lagan, prenosiv i lak za korišćenje. Obezbeđuje dobru stabilnost korisnika, Harnohy jastuk je dizajniran po principu anatomski
                    oblikovane baze koja obezbeđuje individualnu stabilnost pri edenju i pomaže maksimalizaciji korisnikovog funkcionalnog potencijala. </p>
            </div>
            <div class="col-md-3">
                <img src="images/antidekub2.jpg" class="img img-responsive imagesMain">
            </div>
        </div>
        <div class="row">
            <h3>Pneumatski dušek</h3>
            <div class="col-md-8">
                <p>Pneumatski antidekubitalni dušek je preporučen kod prevencije i lečenja dekubita I stepena. Vrlo je lak za postavljanje i upotrebu, što ga čini idealnim za korišćenje u kućnim
                    uslovima. Sam pritisak (napumpanost) dušeka može se prilagoditi shodno težini pacijenta.</p>
                <p>Izrađen je od PVC i napravljen je od 130 zasebnih ćelija. Dizajniran je tako da ga je vrlo lako fiksirati na postojeći dušek na krevetu, a sam kompresor može se okačiti na
                    krevet.</p>

            </div>
            <div class="col-md-3">
                <img src="images/antidekub3.jpg" class="img img-responsive imagesMain">
            </div>
        </div>
        <div class="row">
            <h3>Valjkasti antidekubitalni dušek </h3>
            <div class="col-md-8">
                <p>Valjkasti antidekubitalni dušek je preporučen kod prevencije i lečenja dekubita II stepena. Vrlo je lak za postavljanje i upotrebu, što ga čini idealnim za korišćenje u kućnim
                    uslovima. Sam pritisak (napumpanost) dušeka može se prilagoditi shodno težini pacijenta.</p>
                <p>Izrađene je od kombinacije najlona i PVC-a, i to iz 18 odvojenih ćelija. Dizajniran je tako da ga je vrlo lako fiksirati na postojeći dušek na krevetu, a sam kompresor može se
                    okačiti na krevet.</p>

            </div>
            <div class="col-md-3">
                <img src="images/antidekub4.jpg" class="img img-responsive imagesMain">
            </div>
        </div>
        <br>
        <hr>
        <p class="text-center"><strong>*Pozovite nas u vezi karakteristika i dostupnosti modela za Vaše potrebe.</strong></p>
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