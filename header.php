<?php
$base_url = "/Projet fin d'année/";

if ($_SERVER['PHP_SELF'] == $base_url . "backoffice.php"
    || $_SERVER['PHP_SELF'] == $base_url . "partenaire-back.php"
    || $_SERVER['PHP_SELF'] == $base_url . "billetterie-back.php"
    || $_SERVER['PHP_SELF'] == $base_url . "contact-back.php"
    || $_SERVER['PHP_SELF'] == $base_url . "create.php"
) {
    $accueil_url = "backoffice.php";
    $partenariat_url = "partenaire-back.php";
    $billetterie_url = "billetterie-back.php";
    $contact_url = "contact-back.php";
} else {
    $accueil_url = "index.php";
    $partenariat_url = "partenaire.php";
    $billetterie_url = "billetterie.php";
    $contact_url = "contact.php";
}
?>

<header>
            <div class="hautnav"></div>
            <nav class="navbar">
                <div class="contenant-logo">
                    <img src="images/logolsv.png" alt="logo saint vincent" class="logo-non-responsive">
                    <img src="images/Logo_parNodevo.png" alt="logo saint vincent" class="logo-responsive">
                </div>
                <div class="nav-links">
                    <ul class="contenant-liste">
                        <div id="accueil" class="fond-nav"><li class="boutons-liste"><a class="liennav" href="<?php echo $accueil_url; ?>">Accueil</a></li></div>
                        <div id="partenariat" class="fond-nav"><li class="boutons-liste"><a class="liennav" href="<?php echo $partenariat_url; ?>">Partenariats</a></li></div>
                        <div id="billetterie" class="fond-nav"><li class="boutons-liste"><a class="liennav" href="<?php echo $billetterie_url; ?>">Billetterie</a></li></div>
                        <div id="contact" class="fond-nav"><li class="boutons-liste"><a class="liennav" href="<?php echo $contact_url; ?>">Contact</a></li></div>
                    </ul>
                </div>
                <div class="dropdown_menu">
                    <ul class="contenant-liste">
                        <div id="accueil" class="fond-nav"><li class="boutons-liste"><a class="liennav" href="<?php echo $accueil_url; ?>">Accueil</a></li></div>
                        <div id="partenariat" class="fond-nav"><li class="boutons-liste"><a class="liennav" href="<?php echo $partenariat_url; ?>">Partenariats</a></li></div>
                        <div id="billetterie" class="fond-nav"><li class="boutons-liste"><a class="liennav" href="<?php echo $billetterie_url; ?>">Billetterie</a></li></div>
                        <div id="contact" class="fond-nav"><li class="boutons-liste"><a class="liennav" href="<?php echo $contact_url; ?>">Contact</a></li></div>
                    </ul>
                </div>
                <img src="images/menu-btn.png" alt="menu hamburger" class="menu-hamburger">
              </nav>
        </header>