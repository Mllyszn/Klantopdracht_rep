<?php define("BASEURL","http://localhost/");?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tuinman Hogendijk</title>
    <link rel="stylesheet" href="<?=BASEURL;?>assets/css/header.css">
    <link rel="stylesheet" href="<?=BASEURL;?>assets/css/style.css" />
    <link rel="stylesheet" href="<?=BASEURL;?>assets/css/footer.css">
    <link rel="icon" href="favicon.ico" />
</head>

<body>
    <div id="container">
        <header id="header">
            <div id="weblogo-container">
                <a href="index.php">
                    <img id="weblogo" src="assets/img/logo_ko.png" alt="weblogo">
                </a>
            </div>
            <div id="headerbuttons">

                <a class="headerbutton" href="core/dienstenpage.php">Diensten</a>
                <a class="headerbutton" href="core/recensiespage.php">Recensies</a>
                <a class="headerbutton" href="core/overmijpage.php">Over mij</a>
                <a class="headerbutton" href="core/contactpage.php">Contact</a>

            </div>
        </header>