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
    <h1 class="text-center">Parcijalne proteze stopala</h1>
    <p>Parcijalne amputacije stopala u zavisnosti od nivoa amputacije uglavnom možemo podeliti na amputaciju prstiju,amputaciju prednjeg delastopala(metatarosphalangeal, transmetatarsal) , Lisfranc amputacija; i amputacija po Chopart-u. </p>
    <br>
    <div class="col-md-9 pull-left">
        <h3>Dostupne opcije</h3>
        <p>U zavisnosti od karakteristika amputiranog stopala i količine potrebne restauracije, protetička rešenja sežu od individualno izrađenog uloška sa nadgradnjom do visokog kompozitnog.</p>
        <p>Ležišta sa dinamičkom karbonskom tabanicom.</p>
        <p>Napredna rešenja obuhvataju maksimalnu kozmetičku i funkcionalnu restauraciju sa  individualno izrađenim silikonskim protezama.</p>
    </div>
    <div class="col-md-3">
        <?php for ($i = 1; $i <= 3; $i++) { ?>
            <div class="imagesMain">
                <img src="images/parstopala<?php echo $i ?>.jpg" class="img img-responsive center-block">
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