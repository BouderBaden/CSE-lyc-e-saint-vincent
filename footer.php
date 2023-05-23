<footer>
    <div class="contenant-footer">
        <div class="contenant-logo-footer">
            <img src="images/logolsv.png" alt="">
        </div>
        <div class="contenant-texte-footer">
            <h5>CSE Lycée Saint-Vincent</h5>
            <ul class="contenant-liste-footer">
                <?php
                if ($page != 'index') {
                ?>
                    <li class="liste-footer"><a href="index.php" class="lien-footer">> Accueil</a></li>
                <?php

                }

                if ($page != 'part') {
                ?>
                    <li class="liste-footer"><a href="partenaire.php" class="lien-footer">> Partenaire</a></li>
                <?php
                }
                ?>

                <?php

                if ($page != 'bill') { ?>

                    <li class="liste-footer"><a href="billetterie.php" class="lien-footer">> Billetterie</a></li>
                <?php }
                if ($page != 'cont') {
                ?>
                    <li class="liste-footer"><a href="contact.php" class="lien-footer">> Contact</a></li>
                <?php }
                ?>
            </ul>
        </div>
    </div>
</footer>