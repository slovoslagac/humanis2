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
    <h1 class="text-center">Potkolena protetika</h1>
    <p>Potkolene proteze uglavnom sadrže individualno izradjeno protetičko ležište, pilon, struktrurne adaptere i stopalo.</p>
    <br>
    <div class="col-md-9 pull-left">
        <h3>Protetičko ležište</h3>
        <p>Ležište je deo proteze koji je u dodiru sa telom. Ovaj deo pomagala verovatno je najvažniji, jer se preko njega težina tela prebacuje na protezu. Razlog zbog koga ovoliko vremena
            posvećujemo ovom delu je kako bismo bili sigurni da je težina raspoređena na bezbedan i udoban način i tako zaštitili preostatak i zglobove.</p>
        <p>Glavne karakteristike ležišta koje mi izrađujemo su laganost, pouzdanost u skladu sa nivoom korisničke aktivnosti, kao i udobnost nošenja. Da bi smo postigli navedene karakteristike,
            kombinujemo nekoliko različitih materijala, kao što su ugljenikovo vlakno za formiranje strukture,fleksibilni umetak, i kompresivne kompozitne pene.</p>
        <p>Na osnovu iskustva, smatramo da je najudobniji i najfunkcionalniji dizajn za izradu ležišta, kombinacija dva principa (konvencionalni i hidrostaički). Mi u svojim ležištima raspoređujemo
            pritisak preko cele površine ostatka, pri čemu nivo opterećenja zavisi od toga koliko su delovi ostatka tolerantni na pritisak. Primera radi, strukture kao što su osetljiva koštana mesta,
            grupe nerava ili izbrazdana koža, biće manje opterećene nego neoštećeni delovi ostatka. </p>
        <p>U cilju daljeg sprovođenja naše ideje o raspoređivanju opterećenja pravilno preko celog ostatka, naš predlog je upotreba protetskih lajnera. Ovi lajneri se kreću od relativno jakih,
            silikonskih, do mnogo makših, gel lajnera. Veći broj ovih lajnera može se koristiti sa mekim savitljivim unutrašnjim ležištem, radi bolje zaštite.</p>
        <h3>Metode fiksirannja</h3>
        <p>Postoji više načina da se proteza održi na ostatku. Za koji način ćemo se mi odlučiti,dosta zavisi od vaših mogućnosti i uslova okruženja.</p>
        <p>Glavni ciljevi koje želimo da postignemo su da proteza bude jednostavna (da se lako namešta i skida), fiziološki ispravna, pouzdana u pružanju bezbednosti i da vam omogući kontrolu nad
            nogom tokom hodanja.</p>
        <p>Trenutno postoje dva pristupa u fiksiranju proteze na ljudsko telo. Prva metoda je konvencionalan pristup usmeren ka održavanju proteze na anatomskim strukturama pomoću traka, kaiševa i
            otisaka u ležištu. Nedostatci ove metode su opterećenje i frikcija na maloj površini mekog tkiva. Vremenom ova opterećenost može prouzrokovati oštećenje kože, probleme sa cirkulacijom i
            lokalnu atrofiju.</p>
        <p>U drugom pristupu, proteza se drži na udu pomoću protetičkih lajnera ili uz asistenciju pasivnog ili dinamičkog vakum sistema. Lajneri mogu biti napravljeni od relativno čvrstog silikona
            ili mekših gelova kako bi se omogućilo fiksiranje i zaštita preostatka. Oni su blago pričvršćeni za kožu i gotovo u potpunosti onemogućuju pokret između kože i lajnera. Nakon toga dodaci
            se mogu staviti na lajner kako bismo ga vezali za protezu u vidu bravica itd.</p>
        <p>Pasivni ili dinamički sistemi koriste negativni pritisak koji se javlja izmedju preostatka i ležišta.Sistemi se mogu koristiti direktno u dodiru preostatka i ležišta ili uz pomoć silikon
            lanera koji povećavaju nivo udobnosti.</p>
        <h3>Privremena proteza</h3>
        <p>Privremena proteza je predvidjena za nove korisnike.Moze se aplikovati prilikom stacionarnog ili ambulatnog lečenja.</p>
        <p>Korišćenje privremene proteze ima mnogo prednosti. Omogućava formiranje preostatka i kompletno zalečivanje , proces može trajati do šest meseci, a ponekad i duže. Protetička čarapa ili
            silikon- gel lajner se nosi između ležišta i tela kako bi se zaštitila osetljiva koža preostatka. Svaki dan, obim preostatka će se smanjivati kako se i otok smanjuje. Kada se to dogodi,
            korisnik može dodati dodatne slojeve čarapa kako bi ostvario čvrst kontakt u ležištu. Ako se doda veliki broj navlaka, izradiće se novo test ležište. </p>
        <p>Privremena proteza obično nema kozmetičku oblogu, tako da je protetičaru lakše prilagoditi poravnanje i koleno. Koisnici obično započinju fizikalnu terapiju i školu hoda sa privremenom
            protezom. Tokom ovog vremena veoma je važno pronaći i definisati bilo kakve pritiske ili abrazije na preostatku. Kada se volumen preostatka stabilizuje i osoba je razvila stabilan nivo
            aktivnosti, obično je vreme da se pređe na definitivnu protezu.</p>
        <h3>Definitivna proteza</h3>
        <p>Nakon formiranja preostatka i dobre obučenosti korisnika u korišćenju proteze izradjuje se definitivno ležite na postojeću konstrukciju uz postavljanje mekane estetske obloge.</p>
    </div>
    <div class="col-md-3">
        <?php for ($i = 1; $i <= 3; $i++) { ?>
            <div class="imagesMain">
                <img src="images/pprotetika<?php echo $i ?>.jpg" class="img img-responsive center-block">
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