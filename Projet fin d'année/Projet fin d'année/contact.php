<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Contactez-nous</title>
        <link href="contact.css" rel="stylesheet">
        <link rel="icon" href="images/Logo_parNodevo.png">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <script src="script.js" defer></script>
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
                                    
                                <textarea name="message" placeholder="Entrez votre message." required></textarea>
                                    
                                <button type="submit">Envoyer</button>
                            </form> 
                        </div>
                    </div>
                </section>
            </div>
        </main>
        <?php include ("footer.php"); ?>
    </body>
</html>