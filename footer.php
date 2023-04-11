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
                        <?php } else if ($_SERVER['PHP_SELF'] == "/Projet fin d'année/backoffice.php") { ?>
                            <li class="liste-footer"><a href="partenaire-back.php" class="lien-footer">> Partenariats</a></li>
                            <li class="liste-footer"><a href="billetterie-back.php" class="lien-footer">> Billetterie</a></li>
                            <li class="liste-footer"><a href="contact-back.php" class="lien-footer">> Contact</a></li>
                        <?php } else if ($_SERVER['PHP_SELF'] == "/Projet fin d'année/partenaire-back.php") { ?>
                            <li class="liste-footer"><a href="backoffice.php" class="lien-footer">> Accueil</a></li>
                            <li class="liste-footer"><a href="billetterie-back.php" class="lien-footer">> Billetterie</a></li>
                            <li class="liste-footer"><a href="contact-back.php" class="lien-footer">> Contact</a></li>
                        <?php } else if ($_SERVER['PHP_SELF'] == "/Projet fin d'année/billetterie-back.php") { ?>
                            <li class="liste-footer"><a href="backoffice.php" class="lien-footer">> Accueil</a></li>
                            <li class="liste-footer"><a href="partenaire-back.php" class="lien-footer">> Partenariats</a></li>
                            <li class="liste-footer"><a href="contact-back.php" class="lien-footer">> Contact</a></li>
                        <?php } else if ($_SERVER['PHP_SELF'] == "/Projet fin d'année/contact-back.php") { ?>
                            <li class="liste-footer"><a href="backoffice.php" class="lien-footer">> Accueil</a></li>
                            <li class="liste-footer"><a href="partenaire-back.php" class="lien-footer">> Partenariats</a></li>
                            <li class="liste-footer"><a href="billetterie-back.php" class="lien-footer">> Billetterie</a></li>
                        <?php } else { ?>
                            <li class="liste-footer"><a href="partenaire.php" class="lien-footer">> Partenariats</a></li>
                            <li class="liste-footer"><a href="billetterie.php" class="lien-footer">> Billetterie</a></li>
                            <li class="liste-footer"><a href="contact.php" class="lien-footer">> Contact</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
    </footer>