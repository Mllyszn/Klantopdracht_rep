<?php
include ('../header.php')
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/contactStyle.css">
    <link rel="icon" href="../favicon.ico">
    <title>Contact</title>
</head>

<body>
    <header>
        <h1>Contact formulier</h1>
    </header>

    <div class="contactform">
        <form action="reservatiepage.php">

            <label for="vnaam">Voornaam</label>
            <input type="text" id="vnaam" name="voornaam" placeholder="Uw voornaam.." required>

            <label for="anaam">Achternaam</label>
            <input type="text" id="anaam" name="achternaam" placeholder="Uw achternaam.." required>

            <label for="adres">Adres</label>
            <input type="text" id="adres" name="plaatadres" placeholder="Uw adres.." required>

            <label for="telnummer">Telefoon nummer</label>
            <input type="text" id="telnummer" name="telefoon nummer" placeholder="Uw telefoon nummer.." required>

            <label for="email">E-mail</label>
            <input type="text" id="email" name="e-mail" placeholder="Uw e-mail.." required>

            <label for="subject">Vraag/Opmerking</label>
            <textarea id="subject" name="subject" placeholder="Schrijf hier.." rows="4" cols="50"></textarea>

            <input type="submit" value="Submit">
        </form>
    </div>
    <br>
    <div class="footertxt">
        <h4>
            We streven ernaar om constant in contact te staan met onze klanten totdat de klus geklaard is. Als u
            vragen
            of speciale verzoeken heeft, stuur ons dan een bericht. Voor een vrijblijvende offerte kunt u contact
            met
            ons opnemen wanneer het u uitkomt. Wij zijn u graag van dienst!
        </h4>
    </div>
    <?php include ('../footer.php') ?>
</body>

</html>