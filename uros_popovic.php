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
            <img src="images/uros_popovic.jpg" class="img img-responsive imagesMain">
        </div>
        <div class="col-md-7">
            <h1>Uroš Popović</h1>
            <h5>student iz Kosovske Mitrovice</h5>
            <br>
            <p>Već nekoliko godina koristim endoskeletnu potkolenu protezu bez ikakvih ograničenja i prepreka. Slobodno mogu da kažem da sve što mi je bilo dostupno pre amputacije, jeste mi dostupno i
                danas nakon dobijanja adekvatnog pomagala i odgovarajuće rehabilitacije.</p>
            <p>Ono sto me posebno ovih dana čini zadovoljnim je moja nova proteza za vodu, koju sam dobio nekoliko dana pred odlazak na more. Pored pune funkcionalnosti, ona je i veoma atraktivna.
                Veliko hvala tehničkom timu Humanis-a na pokazanoj kreativnosti i strpljenju.</p>
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