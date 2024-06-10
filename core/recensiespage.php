<?php include('../header.php')?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/recensieStyle.css">
    <title>Recensies</title>
</head>

<body>
    <div class="recensie">
        <form action="recensiespage.php">
            <label for="subject">Schrijf hier je recensie</label>
            <textarea id="subject" name="subject" placeholder="Schrijf hier.." rows="4" cols="50"></textarea>

            <input type="submit" value="Submit">
        </form>
    </div>


</body>

<?php include('../footer.php')?>
</html>