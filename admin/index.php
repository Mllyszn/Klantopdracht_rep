<?php include('../database/db_connect.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div id="login-container">
        <header>
            <h1 id="login-title">Log in</h1>
        </header>
        <main>
            <div id="login-logo-container">
                <img id="login-logo" src="assets/img/weblogo.png" alt="">
            </div>
            <div id="input-container">
                <form id="login-form" method="post">
                    <input class="login-input" type="text" name="gebruikersnaam" placeholder="Gebruikersnaam...">
                    <input class="login-input" type="text" name="wachtwoord" placeholder="Wachtwoord...">
                    <input id="login-submit" type="submit">
                </form>
            </div>
        </main>
        <footer>

        </footer>
    </div>
</body>

</html>