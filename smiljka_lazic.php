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
            <img src="images/smiljka_lazic.jpg" class="img img-responsive imagesMain">
        </div>
        <div class="col-md-7">
            <h1>Smiljka Lazić</h1>
            <h5>Diplomirani ekonomista u penziji</h5>
            <br>
            <p>Nakon velikih zdravstvenih problema amputacija natkolenice je bilo jedino rešenje. Pored velike podrške porodice i dragih prijatelja perspektiva mi je bila prilicno obeshrabrujuća. Prvi
                susreti sa ljudima iz Humanis-a doneli su i prve pozitivne pomake..ustala sam i posle dugo vremena oslonila se na svoju nogu kakav fantastičan i emotivan trenutak.</p>
            <p>Njihovom posvesćenošću i istrajnošću dosli smo do najfunkcionalnijeg rešenja za koje mogu slobodno da kazem da mi je povratilo kvalitet zivota na maksimalni nivo.
                Mogu reci samo jedno veliko hvala...</p>
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