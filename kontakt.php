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

if (isset($_POST["savequestion"])) {
    $person = $_POST['person'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $question = $_POST['question'];
    $date = new DateTime();
    $filename = date_format($date, "Ymd");
    $questiontime = date_format($date,"d.m.Y H:i:s");

//    echo "$filename : $person - $name - $email";
    $tmpfile = fopen("questions/$filename", "a");
    fwrite($tmpfile, "-------------------------\n");
    fwrite($tmpfile, "vreme: $questiontime\n");
    fwrite($tmpfile, "kome: $person\n");
    fwrite($tmpfile, "ime: $name\n");
    fwrite($tmpfile, "email: $email\n");
    fwrite($tmpfile, "pitanje: $question\n");
    fclose($tmpfile);

    echo '<script language="javascript">';
    echo 'alert("Uspešno ste postavili pitanje. Očekujte odgovor u najkraćem roku!")';
    echo '</script>';

}


?>


<!-- Carousel -->

<br>
<!-- Novosti -->
<div class="container container-fluid">
    <h1 class="text-left">Kontakt</h1>
    <br>
    <div class="col-md-12">
        <div class="col-md-9">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1364.7496952029476!2d20.520368118030564!3d44.783025997215375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDTCsDQ2JzU4LjkiTiAyMMKwMzEnMTYuMiJF!5e1!3m2!1sen!2srs!4v1518526099198"
                width="100%" height="450" frameborder="0" style="border:0" allowfullscreen aria-label="Humanis"></iframe>
        </div>
        <div class="col-md-3 text-center">
            <h3><strong>Radno vreme</strong></h3>
            <div class="col-xs-12">
                <div class="col-xs-6 text-left">Ponedeljak</div>
                <div class="col-xs-6 text-left">08:00-16:00</div>
            </div>
            <div class="col-xs-12">
                <div class="col-xs-6 text-left">Utorak</div>
                <div class="col-xs-6 text-left">08:00-16:00</div>
            </div>
            <div class="col-xs-12">
                <div class="col-xs-6 text-left">Sreda</div>
                <div class="col-xs-6 text-left">08:00-16:00</div>
            </div>
            <div class="col-xs-12">
                <div class="col-xs-6 text-left">Četvrtak</div>
                <div class="col-xs-6 text-left">08:00-16:00</div>
            </div>
            <div class="col-xs-12">
                <div class="col-xs-6 text-left">Petak</div>
                <div class="col-xs-6 text-left">08:00-16:00</div>
            </div>

        </div>
    </div>

    <div class="col-md-9 topMarginKontakt" id="contactform">
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            <h3>Pitajte Humanis!</h3>

            <div class="col-md-4 form-group">
                <label for="person">Koga želite da pitate&nbsp&nbsp</label>
                <select class="form-control" id="person" name="person">
                    <option name="Humanis">Humanis</option>
                    <option name="Zorica Minić">Zorica Minić</option>
                    <option name="Aleksandar Filipović">Aleksandar Filipović</option>
                    <option name="Miloš Jnković">Miloš Jnković</option>
                    <option name="Danijela Jović Matijašvić">Danijela Jović Matijašvić</option>
                    <option name="Marko Lukić">Marko Lukić</option>
                    <option name="Milinko Jokić">Milinko Jokić</option>
                </select>
            </div>
            <div class="col-md-4 form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Upišite email" name="email" required>
            </div>
            <div class="col-md-4 form-group">
                <label for="name">Ime i Prezime:</label>
                <input type="text" class="form-control" id="name" placeholder="Upišite ime i prezime" name="name" required>
            </div>

            <div class="col-md-12 form-group">
                <label for="question">Pitanje:</label>
                <textarea class="form-control" rows="5" id="question" name="question" required></textarea>
            </div>
            <div class="col-md-12 topMarginKontakt">
                <div class="col-md-3 form-group">
                    <button class="btn btn-default" name="savequestion" type="submit" onsubmit="thanks()">Postavi pitanje</button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-9" id="contactHello" style="display: none">
        <p style="color: red;">Uspešno ste postavili pitanje. Očekujte odgovor u najkraćem roku!</p>
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

<script>
    function thanks(){
        document.getElementById("contactform").setAttribute.display = "none";
        document.getElementById("contactHello").setAttribute.display = "block";
    }
</script>

</body>
</html>