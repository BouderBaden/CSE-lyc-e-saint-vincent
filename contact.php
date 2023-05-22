<?php
$page = 'cont';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Contactez-nous</title>
        <link href="contact.css" rel="stylesheet">
        <link rel="icon" href="images/Logo_parNodevo.png">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <link href="header.css" rel="stylesheet">
        <link href="banderole.css" rel="stylesheet">
        <link href="footer.css" rel="stylesheet">
    </head>
    <body>
        <?php include ('header.php'); ?>



        <main>
            <div class="all">
                <?php include ('banderole.php'); ?>
                
                <section class="contact">
                    <div class="contenant-contact">
                        <h1>Contactez-nous !</h1>
                        <div class="contenant-formulaire">
                            <form action="#" method="post">
                                <input type="text" name="nom" placeholder="Nom" required>
                                    
                                <input type="text" name="prenom" placeholder="Prénom" required>
                                    
                                <input type="email" name="email" placeholder="E-mail" required>

                                <select name="choix" id="choix" required>
                                    <option value="" hidden>Choisissez en quoi concerne votre message</option>
                                    <option value="offre">Une offre</option>
                                    <option value="partenaire">Un partenaire </option>
                                    <option value="aucun">Aucune des propositions</option>
                                </select>

                                    
                                <textarea name="message" placeholder="Entrez votre message." required></textarea>
                                    
                                <button type="submit">Envoyer</button>
                            </form> 
                        </div>
                    </div>
                </section>
            </div>
        </main>
        <?php include ("footer.php"); ?>
        <script src="script.js" defer></script>
    </body>
</html>