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
    <div class="col-md-12">
        <div class="col-md-2 col-md-offset-2">
            <img src="images/logoorthoservice.jpg" class="img img-responsive imagesMain center-block">
        </div>
        <div class="col-md-6">
            <p><strong>ORTHOSERVICE</strong>je dinamična i inovativna švajcarska kompanija čiji spektar visokokvalitetnih ortopedskih rešenja za traume, rehabilitaciju i sportske povrede zastupamo na
                nažem tržištu.</p>
        </div>
    </div>
    <br>
    <div class="col-md-12 pull-left">
        <div class="col-md-4">
            <h4><strong>Shouldfix </strong>open (Imobilizator ruke i ramena) </h4>
            <p>
                M.8410<br>
                <strong>Indikacije: </strong>prelom humerusa, glenohumeralna luksacija, distorzija ramena, postoperativno zbrinjavanje nakon preloma humerusa i intervencije usled dislokacije ramena,
                postoperativno zbrinjavanje usled rupture duge glave bicepsa. <br>
                <strong>Velicina: </strong>Regular <120, Large >120
            </p>
        </div>
        <div class="col-md-2">
            <img src="images/shouldfixopen.jpg" class="img img-responsive center-block imagesMain">
        </div>
        <div class="col-md-4">
            <h4><strong>Epifit 32 </strong>(Elastični steznik za lakat)</h4>
            <p>
                M.90132<br>
                <strong>Indikacije: </strong>teniski lakat (lateral epicondylitis), golferski lakat (medial epicondylitis), hronični bol usled tendinitisa ili burzitisa. <br>
                <strong>Velicina: </strong>XS,S,M,L,XL
            </p>
        </div>
        <div class="col-md-2">
            <img src="images/epifit32.jpg" class="img img-responsive center-block imagesMain">
        </div>
    </div>
    <div class="col-md-12 pull-left">
        <div class="col-md-4">
            <h4><strong>Sling-up </strong>(Poveska za ruku)</h4>
            <p>
                M.8402<br>
                <strong>Indikacije: </strong>podrška za podlakticu i ručni zglob, podrška u slučaju flakcidne ruke, može se koristiti kao pomagalo za odmor u slučaju blaže subluksacije
                akromioklavikularnog ili glenohumeralnog zgloba, može se koristiti kao imobilizator nadlaktice sa pozicioniranim laktom u fleksiji. <br>
                <strong>Velicina: </strong>S, M, L, XL
            </p>
        </div>
        <div class="col-md-2">
            <img src="images/slingup.jpg" class="img img-responsive center-block imagesMain">
        </div>
        <div class="col-md-4">
            <h4><strong>Object 82320 </strong>(Ortoza za epikondylitis sa umetkom)</h4>
            <p>
                M.4320<br>
                <strong>Indikacije: </strong> distorzija ručnog zgloba, tendinitis, artritis i artroza, zbrinjavanje usled preloma ručnog zgloba nakon uklanjanja gipsane poveske, artroza
                trapezio-metacarpalnog zgloba i metacarpofalangealnog zbloba palca, povreda ulnarnog predela ručnog zgloba i povreda metacarpofalangealnog zgloba palca. <br>
                <strong>Velicina: </strong>S (<27), L (>27)
            </p>
        </div>
        <div class="col-md-2">
            <img src="images/object82320.jpg" class="img img-responsive center-block imagesMain">
        </div>
    </div>
    <div class="col-md-12 pull-left">
        <div class="col-md-4">
            <h4><strong>Polfit 17 </strong>(Ortoza za ručni zglob sa podrškom palca)</h4>
            <p>
                M.P1117<br>
                <strong>Indikacije: </strong> distorzija ručnog zgloba, tendinitis, artritis i artroza, zbrinjavanje usled preloma ručnog zgloba nakon uklanjanja gipsane poveske, artroza
                trapezio-metacarpalnog zgloba i metacarpofalangealnog zbloba palca, povreda ulnarnog predela ručnog zgloba i povreda metacarpofalangealnog zgloba palca. <br>
                <strong>Velicina: </strong>S, M, L, XL
            </p>
        </div>
        <div class="col-md-2">
            <img src="images/polfit17.jpg" class="img img-responsive center-block imagesMain">
        </div>
        <div class="col-md-4">
            <h4><strong>Polfit 19 </strong>(Ortoza za ručni zglob sa podrškom palca)</h4>
            <p>
                M.P1119<br>
                <strong>Indikacije: </strong>distorzija ručnog zgloba, prelom podlaktice (radijusa i ulne), tendinitis u nivou ručnog zgloba, artritis i artroza, zbrinjavanje nakon preloma ručnog zgloba po uklanjanju gipsane poveske.<br>
                <strong>Velicina: </strong>S, M, L, XL
            </p>
        </div>
        <div class="col-md-2">
            <img src="images/polfit19.jpg" class="img img-responsive center-block imagesMain">
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