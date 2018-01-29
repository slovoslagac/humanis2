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
    <h1 class="text-center">Dezartikulacija kuka</h1>
    <p>Dok se svi protetički korisnici suočavaju sa izazovima, pacijenti sa dezuartikulacijom kuka ili transpelvičnom (hemipelvektomijom) amputacijom suočavaju se možda sa najdužim putem da postanu
        uspješni korisnici donjih ekstremiteta.</p>
    <br>
    <div class="col-md-9 pull-left">
        <h3>Timski rad i konforno ležište su ključni</h3>
        <p>Ako ste imali ili ste suočeni sa ovom vrstom amputacije, važno je razumeti da vaš proces rehabilitacije može biti spor i postepen. Pozitivni ishodi su rezultat jakog radnog odnosa između
            vas, vašeg protetičara i vašeg fizioterapeuta. Još jedan ključni faktor je imati protezu sa udobnim ležištem gde se uglavnom oslanjamo na princip mekanog unutrašnjeg ležišta sa spoljašnjom
            kompozitnom školjkom.</p>
        <p>Izbor strukturnih komponenti i delova za ovaj tip proteze je krajnje individualan za svakog korisnika.</p>
        <p>Pozovite nas i zakažite termin za pregled.</p>
    </div>
    <div class="col-md-3">
        <?php for ($i = 1; $i <= 2; $i++) { ?>
            <div class="imagesMain">
                <img src="images/dkuk<?php echo $i ?>.jpg" class="img img-responsive center-block">
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