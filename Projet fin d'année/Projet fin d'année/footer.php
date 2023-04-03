<head>
    <link href="style.css" rel="stylesheet">
</head>

<footer>
            <div class="contenant-footer">
                <div class="contenant-logo-footer">
                    <img src="images/logolsv.png" alt="">
                </div>
                <div class="contenant-texte-footer">
                    <h5>CSE Lycée Saint-Vincent</h5>
                    <ul class="contenant-liste-footer">
                        
                        <?php if ($_SERVER['PHP_SELF'] == "/Projet fin d'année/partenaire.php") { ?>
                            <li class="liste-footer"><a href="index.php" class="lien-footer">> Accueil</a></li>
                            <li class="liste-footer"><a href="billetterie.php" class="lien-footer">> Billetterie</a></li>
                            <li class="liste-footer"><a href="contact.php" class="lien-footer">> Contact</a></li>
                        <?php } else if ($_SERVER['PHP_SELF'] == "/Projet fin d'année/billetterie.php") { ?>
                            <li class="liste-footer"><a href="index.php" class="lien-footer">> Accueil</a></li>
                            <li class="liste-footer"><a href="partenaire.php" class="lien-footer">> Partenariats</a></li>
                            <li class="liste-footer"><a href="contact.php" class="lien-footer">> Contact</a></li>
                        <?php } else if ($_SERVER['PHP_SELF'] == "/Projet fin d'année/contact.php") { ?>
                            <li class="liste-footer"><a href="index.php" class="lien-footer">> Accueil</a></li>
                            <li class="liste-footer"><a href="partenaire.php" class="lien-footer">> Partenariats</a></li>
                            <li class="liste-footer"><a href="billetterie.php" class="lien-footer">> Billetterie</a></li>
                        <?php } else { ?>
                            <li class="liste-footer"><a href="partenaire.php" class="lien-footer">> Partenariats</a></li>
                            <li class="liste-footer"><a href="billetterie.php" class="lien-footer">> Billetterie</a></li>
                            <li class="liste-footer"><a href="contact.php" class="lien-footer">> Contact</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
    </footer>