<?php
$page = 'index-back';
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Back-Office</title>
        <link rel="icon" href="images/Logo_parNodevo.png">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <link href="backoffice.css" rel="stylesheet">
        <link href="header-back.css" rel="stylesheet">
        <link href="footer-back.css" rel="stylesheet">
        <script src="script.js" defer></script>
    </head>

    <body>
        <?php include("header-back.php"); ?>
        <main>
            <div class="modif-accueil">
                <h1>Modifiez les informations de contact</h1>
                <form action="#" method="post">
                <label for="phone">Numéro de téléphone :</label>
                <input type="tel" id="phone" name="phone" required>

                <label for="email">Adresse e-mail :</label>
                <input type="email" id="email" name="email" required>

                <label for="adresse">Adresse postale :</label>
                <input type="text" name="address" required></input>

                <label for="title">Titre du message d'accueil :</label>
                <input type="text" name="title" required></input>

                <label for="message">Contenu du message d'accueil :</label>
                <textarea name="message"></textarea>


                <div class="placement">
                <button type="submit">Modifier</button>
                </div>
                </form>
            </div>
        </main>
        <?php include("footer-back.php"); ?>
    </body>
</html>