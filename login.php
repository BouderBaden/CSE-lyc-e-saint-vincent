<?php
//login page get data from database users
require_once "db.php";
$user = "admin";
$pass = "admin";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == $user && $password == $pass) {
        session_start();
        $_SESSION['username'] = $username;
        header("Location: backoffice.php");
    } else {
        ?>
        <script>
            alert("Nom d'utilisateur ou mot de passe incorrect")
        </script>
        <?php
    }
}
?>


<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Connexion</title>
        <link rel="icon" href="images/Logo_parNodevo.png">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <link href="login.css" rel="stylesheet">
        <link href="header.css" rel="stylesheet">
        <link href="footer.css" rel="stylesheet">
        <script src="script.js" defer></script>
    </head>

    <body>
        <?php include("header.php"); ?>
        <main>
            <div class="connexion">
                <h1>Connexion</h1>
                <form action="login.php" method="post">
                        <label for="username">Nom d'utilisateur</label>
                        <input type="text" name="username">

                        <label for="password">Mot de passe</label>
                        <input type="password" name="password">

                    <div class="placement">
                        <button type="submit">Se connecter</button>
                    </div>
                </form>
            </div>
        </main>
        <?php include("footer.php"); ?>
    </body>