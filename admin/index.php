<?php 
include ('../database/db_connect.php');
$sqli_prepare = $con->prepare("SELECT gebruikersnaam, wachtwoord FROM admin;");
$sqli_prepare->bind_result($gebruikersnaam, $wachtwoord);
$sqli_prepare->execute();
$sqli_prepare->fetch();
$sqli_prepare->close();

$wronglogin = false;

if(isset($_POST['login'])) {
    if($gebruikersnaam == $_POST['gebruikersnaam'] && $wachtwoord == $_POST['wachtwoord']) {
        $_SESSION['login'] = true;
    } else {
        $wronglogin = true;
    }
}

if ($_SESSION['login'] == true) {
    header('location: overzicht.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
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
                 <!-- gb = Hendrik en ww = Hogendijk -->
                <form id="login-form" method="post">
                    <input class="login-input" type="text" name="gebruikersnaam" placeholder="Gebruikersnaam..." required>
                    <input class="login-input" type="password" name="wachtwoord" placeholder="Wachtwoord..." required>
                    <?php if($wronglogin == true) {
                        echo "<p id='login-text'>Onjuiste gegevens</p>";
                    }
                    ?>
                    <input id="login-submit" type="submit" name="login">
                </form>
            </div>
        </main>
        <footer>

        </footer>
    </div>
</body>

</html>