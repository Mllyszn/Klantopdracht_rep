<?php include ('../header.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/recensieStyle.css">
    <title>Recensies</title>
</head>

<body>
    <div class="recensieInput">
        <form action="recensiespage.php">
            <label for="subject">Schrijf hier je recensie</label>
            <textarea id="subject" name="subject" placeholder="Schrijf hier.." rows="4" cols="50"></textarea>

            <input type="submit" value="Submit">
        </form>
    </div>
    <div class="recensies">
        “Heel erg bedankt voor de efficiënte service, je was heel snel klaar en ik zal je nummer zeker behouden om je
        weer te gebruiken.”
        <hr>
        Hella Hoes
    </div>

</body>

<?php include ('../footer.php') ?>

</html>