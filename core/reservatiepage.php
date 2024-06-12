<?php
include ('../database/db_connect.php');
if (!isset($_POST['add'])) {
    header('location: contactpage.php');
}
if (isset($_POST['add'])) {
    $huidigeDatum = date('Y-m-d');
    $vnaam = $_POST['vnaam'];
    $anaam = $_POST['anaam'];
    $adres = $_POST['adres'];
    $telnum = $_POST['telnum'];
    $email = $_POST['email'];
    $opmrk = $_POST['opmrk'];
    $sqli_prepare = $con->prepare("INSERT INTO opdrachten(datum, voornaam, achternaam, adres, telefoonnummer, email, opmerking) VALUES(?, ?, ?, ?, ?, ?, ?)");
    $sqli_prepare->bind_param('ssssiss', $huidigeDatum, $vnaam, $anaam, $adres, $telnum, $email, $opmrk);
    $sqli_prepare->execute();
    $sqli_prepare->close();
}
include ('../header.php')
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservatie</title>
</head>

<body>
    <H2>Ons adres</H2>
    <H4>Harmonielaan 19, Zeist, Utrecht</H4>
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2451.3894545487915!2d5.221697376506937!3d52.09084337195179!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c668113a41a8eb%3A0xd5e345afcd240e67!2sHarmonielaan%2019%2C%203704%20HG%20Zeist!5e0!3m2!1snl!2snl!4v1718186137812!5m2!1snl!2snl"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>

    <H2>Openings tijden</H2>
    <H4>Maandag t/m vrijdag: 07.00 - 17.00 uur </H4>
    <H4>Zaterdag: Op afspraak</H4>
    <H4>Zondag: Gesloten</H4>
</body>

</html>