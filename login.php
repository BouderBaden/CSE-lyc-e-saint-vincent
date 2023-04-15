
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
                <form action="backoffice.php" method="POST">
                        <label for="email">Email</label>
                        <input type="email" name="email">

                        <label for="password">Mot de passe</label>
                        <input type="password" name="password">

                    <div class="placement">
                        <button type="submit" name="submit">Se connecter</button>
                    </div>
                </form>
            </div>
        </main>
        <?php include("footer.php"); ?>
    </body>