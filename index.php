<?php
$page = 'index';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Projet fin d'année</title>
        <link href="style.css" rel="stylesheet">
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

                <section class="offres">
                    <div class="contenant-offres">
                        <div class="cse">
                            <h4>CSE Lycée Saint-Vincent</h4>
                            <p>Nous vous souhaitons la bienvenue sur le site du comité social et économique du lycée Saint-Vincent à Senlis.<br>Découvrez <span>l'équipe</span> et le <span>rôle</span> et missions de vote CSE.</p>
                        </div>
                        <h5>Dernières offres de la billetterie</h5>
                        <div class="cases-offres">
                            <div class="ligne">
                                <div class="rectangle-offre"><p>OFFRE</p></div>
                                <p class="date">Publié le 11 décembre 2022</p>
                            </div>
                            <div class="texte-offre"><p>Profitez de -20% sur une sélection de parfum, en partenariat avec l’enseigne Nocibé de Senlis.<br>Merci de vous rendre au bureau du CSE pour pouvor passer commande</p></div>
                            <div class="savoir-plus"><a href="billetterie.php">En savoir plus <img src="images/fleche.png" alt="icone fleche vers la droite"></a></div>
                        </div>
                        <div class="cases-offres">
                            <div class="ligne">
                                <div class="rectangle-offre"><p>OFFRE</p></div>
                                <p class="date">Publié le 09 décembre 2022</p>
                            </div>
                            <div class="texte-offre"><p>Achetez dès à présent votre sapin de noël en profitant du partenariat entre le lycée Saint-Vincent
                                et l’association des Scouts De L’oise.<br>Prix commun à tous : 30€ le petit sapin, 40€ le grand.</p></div>
                            <div class="savoir-plus"><a href="billetterie.php">En savoir plus <img src="images/fleche.png" alt="icone fleche vers la droite"></a></div>
                        </div>
                        <div class="cases-offres">
                            <div class="ligne">
                                <div class="rectangle-offre"><p>OFFRE</p></div>
                                <p class="date">Publié le 10 novembre 2022 - Jusqu’au 30/01/2023</p>
                            </div>
                            <div class="texte-offre"><p>Offre négociée au près de Léonidas, profitez de - 10% toute l’année sur l’ensemble des chocolats dans la boutique de Senlis.<br>
                                Famille nombreuse (5 enfants et plus) : -5% supplémentaire</p></div>
                            <div class="savoir-plus"><a href="billetterie.php">En savoir plus <img src="images/fleche.png" alt="icone fleche vers la droite"></a></div>
                        </div>
                        
                        <div class="decouvrir"><a href="billetterie.php">Découvrir toutes nos offres 〉</a></div>
                    </div>
                </section>
            </div>
        </main>

    <?php include "footer.php"; ?>
    <script src="script.js" defer></script>
    </body>
</html>