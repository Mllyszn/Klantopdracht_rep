<?php define("BASEURL", "http://localhost/"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= BASEURL; ?>assets/css/headerStyle.css">
  <link rel="stylesheet" href="<?= BASEURL; ?>assets/css/contactStyle.css">
  <link rel="stylesheet" href="<?= BASEURL; ?>assets/css/recensieStyle.css">
</head>

<nav>
  <div id="nav-bar">
    <header id="header">
      <div id="weblogo-container">
        <a href="../index.php">
          <img id="weblogo" src="<?= BASEURL; ?>assets/img/logo_ko.png" alt="weblogo">
        </a>
      </div>
      <div id="headerbuttons">
        <a class="headerbutton" href="/core/dienstenpage.php">Diensten</a>
        <a class="headerbutton" href="/core/recensiespage.php">Recensies</a>
        <a class="headerbutton" href="/core/overmijpage.php">Over mij</a>
        <a class="headerbutton" href="/core/contactpage.php">Contact</a>
      </div>
    </header>
  </div>
</nav>

</html>