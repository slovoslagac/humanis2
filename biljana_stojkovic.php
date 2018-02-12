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
    <div class="col-md-3 col-md-offset-1">
        <img src="images/biljana_stojkovic_1.jpg" class="img img-responsive imagesMain">
        <img src="images/biljana_stojkovic_2.jpg" class="img img-responsive imagesMain">
        <img src="images/biljana_stojkovic_3.jpg" class="img img-responsive imagesMain">
    </div>
    <div class="col-md-7">
        <h1>Biljana Stojković - Bilja</h1>
        <h5>učenica</h5>
        <br>
        <p>Hej Hay! Zovem se Biljana Stojković, mada više volim kada me zovu Bilja. Imam 13 godina i ispričaću vam ukratko poglavlje svog života koje je ostavilo duboki trag u mom životu.</p>
        <p>Da li je taj trag pozitivan ili ne procenite sami. Dakle... Sve je počelo 3.6.2012. godine kad mi je konstantovan kancer leve potkolenice. Narvno, to je bio znak da je potrebno da primam
            hemioterapije i da imam transplataciju kosti a tako je i bilo. Nakon transplatacije sam primila još par hemioterapija i svi smo mislili da se ta faza u mom životu završila, no međutim...
            Nakon nekoliko meseci nađen je recidiv na istoj nozi koji je takođe trebao da se leči. Zbog tadašnjih okolnosti to nije bilo moguće, tako da su mi doktori izvršili amputaciju, i eto! Evo
            me sad ovde posle 3 godine od amputacije pišem vam ukratko svoju životnu priču.</p>
        <p>Priču svog života koju ne bih menjala ni da mogu. Zašto? Hm... Jer sam zbog te iste priče dobila mogućnost da pričam pred 50, 100, 500 hiljada ljudi i pokažem im koliko život može biti lep
            samo ako se malo potrudimo... Jer mi stvaramo svoj život!</p>
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