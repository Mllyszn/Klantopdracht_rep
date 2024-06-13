<?php
define("BASEURL", "http://localhost/");
include ('../database/db_connect.php');
if (isset($_POST['add'])) {
    $huidigeDatumTijd = date('Y-m-d H:i:s');
    $naam = $_POST['naam'];
    $bericht = $_POST['bericht'];
    $sqli_prepare = $con->prepare("INSERT INTO recensies(datum, naam, bericht) VALUES(?, ?, ?)");
    $sqli_prepare->bind_param('sss', $huidigeDatumTijd, $naam, $bericht);
    $sqli_prepare->execute();
    $sqli_prepare->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEURL; ?>/assets/css/headerStyle.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/assets/css/recensieStyle.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/assets/css/footerStyle.css">
    <title>Recensies</title>
</head>

<body>
    <?php include ('../header.php') ?>

    <div class="recensie">

        <form method="post">
            <label for="subject">
                <H2>Schrijf hier je recensie</H2>

                <input type="text" id="naam" name="naam" placeholder="Schrijf hier uw naam.." required>
            </label>
            <textarea id="subject" name="bericht" placeholder="Schrijf hier uw recensie.." rows="4" cols="50"></textarea>  </textarea>
            <input type="submit" name="add">
        </form>
    </div>
</body>
<br>
<?php include ('../footer.php') ?>