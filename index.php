<?php define("BASEURL", "http://localhost/"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= BASEURL; ?>/assets/css/headerStyle.css">
  <link rel="stylesheet" href="<?= BASEURL; ?>/assets/css/indexStyle.css">
  <link rel="stylesheet" href="<?= BASEURL; ?>/assets/css/footerStyle.css">

  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: Verdana, sans-serif;
    }

    .mySlides {
      display: none;
    }

    img {
      vertical-align: middle;
    }

    .slideshow-container {
      max-width: 1000px;
      position: relative;
      margin: auto;
    }

    .dot {
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }

    .active {
      background-color: #717171;
    }

    .fade {
      animation-name: fade;
      animation-duration: 1.5s;
    }

    @keyframes fade {
      from {
        opacity: .4
      }

      to {
        opacity: 1
      }
    }

    @media only screen and (max-width: 300px) {
      .text {
        font-size: 11px
      }
    }
  </style>
</head>

<body>

  <?php include ('header.php') ?>

  <main>
    <div class="welkom">
      <H1>Welkom bij de website van Hendrik Hogendijk, hovenier in de regio Utrecht, Zeist en de Bilt. </H1>
      <br>
      <div class="inleiding">
        <div class="portret">
          <img src="/assets/img/Hendrik_foto.png" alt="portret van Hendrik Hogendijk">
        </div>
        <p>De tuin is een belangrijke plek van de woning, waar je het liefst zoveel mogelijk tijd in doorbrengt. Bij
          Hendrik Hogendijk Hoveniers vinden wij het daarom belangrijk dat iedereen zich thuis voelt in zijn of haar
          tuin.
          Ik maak de tuin onderdeel van jouw ‘thuis’, door hem volledig op jouw wensen af te stemmen.

          Met behulp van mooie, natuurlijke en duurzame producten en materialen creëer ik een tuin, die garant staat
          voor
          een jarenlang plezierig buitenleven. Van een knusse veranda en een mooie vijver, tot een gezellig terras en
          een
          kleurrijke bloemenborder: ik stop al mijn energie erin.
        </p>
      </div>
    </div>

    <?php
    include ('core/slideshow.php');
    ?>

    <div class="uitleg">
      <div class="ontwerp">
        <H5>Ontwerp</H5>
        <p>
          Wat jouw wensen ook zijn, ik maak een goed doordacht ontwerp voor de tuin van je dromen.
          Met mijn ontwerp krijg je een duidelijk beeld van jouw toekomstige tuin.
        </p>
      </div>
      <div class="aanleg">
        <h5>Aanleg</h5>
        <p>
          Van tuinontwerp naar jouw gewenste tuin.
          Wij verzorgen de aanleg met een goed voorbereid plan.
          Met een kritisch oog en precisie leg ik de tuin voor je aan.
        </p>
      </div>
      <div class="onderhoud">
        <H5>Onderhoud</H5>
        <p>
          Om het hele jaar door optimaal te genieten van jouw tuin is het belangrijk dat deze goed onderhouden wordt.
          Ik neem je graag deze zorg uit handen.
        </p>
      </div>
    </div>
  </main>
  <?php include ('footer.php'); ?>