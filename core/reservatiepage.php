<?php
include('../database/db_connect.php');
if(!isset($_POST['add'])) {
    header('location: contactpage.php');
}
if(isset($_POST['add'])) {
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
    <header>

    </header>
</body>
</html>