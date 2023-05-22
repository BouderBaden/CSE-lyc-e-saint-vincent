<footer>
    <div class="contenant-footer">
        <div class="contenant-logo-footer">
            <img src="images/logolsv.png" alt="">
        </div>
        <div class="contenant-texte-footer">
            <h5>CSE Lycée Saint-Vincent</h5>
            <ul class="contenant-liste-footer">
                <?php
                if ($page != 'index-back') {
                ?>
                    <li class="liste-footer"><a href="backoffice.php" class="lien-footer">> Accueil</a></li>
                <?php
                }
                if ($page != 'part-back') {
                ?>
                    <li class="liste-footer"><a href="partenaire-back.php" class="lien-footer">> Partenaires</a></li>
                <?php
                }
                ?>
                <?php
                if ($page != 'bill-back') { ?>
                    <li class="liste-footer"><a href="billetterie-back.php" class="lien-footer">> Offres</a></li>
                <?php }
                if ($page != 'cont-back') {
                ?>
                    <li class="liste-footer"><a href="contact-back.php" class="lien-footer">> Messagerie</a></li>
                <?php }
                ?>
            </ul>
        </div>
    </div>
</footer>