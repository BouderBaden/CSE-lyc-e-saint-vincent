<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Projet fin d'année</title>
        <link href="style.css" rel="stylesheet">
        <link rel="icon" href="images/Logo_parNodevo.png">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <script src="script.js" defer></script>
    </head>
    <body>
        <header>
            <div class="hautnav"></div>
            <nav class="navbar">
                <div class="contenant-logo">
                    <img src="images/logolsv.png" alt="logo saint vincent" class="logo-non-responsive">
                    <img src="images/Logo_parNodevo.png" alt="logo saint vincent" class="logo-responsive">
                </div>
                <div class="nav-links">
                    <ul class="contenant-liste">
                        <div id="accueil" class="fond-nav"><li class="boutons-liste"><a class="liennav" href="index.php">Accueil</a></li></div>
                        <div id="partenariat" class="fond-nav"><li class="boutons-liste"><a class="liennav" href="partenaire.php">Partenariats</a></li></div>
                        <div id="billetterie" class="fond-nav"><li class="boutons-liste"><a class="liennav" href="billetterie.php">Billeterie</a></li></div>
                        <div id="contact" class="fond-nav"><li class="boutons-liste"><a class="liennav" href="contact.php">Contact</a></li></div>
                    </ul>
                </div>
                <div class="dropdown_menu">
                    <ul class="contenant-liste">
                        <div id="accueil" class="fond-nav"><li class="boutons-liste"><a class="liennav" href="index.php">Accueil</a></li></div>
                        <div id="partenariat" class="fond-nav"><li class="boutons-liste"><a class="liennav" href="partenaire.php">Partenariats</a></li></div>
                        <div id="billetterie" class="fond-nav"><li class="boutons-liste"><a class="liennav" href="billetterie.php">Billeterie</a></li></div>
                        <div id="contact" class="fond-nav"><li class="boutons-liste"><a class="liennav" href="contact.php">Contact</a></li></div>
                    </ul>
                </div>
                <img src="images/menu-btn.png" alt="menu hamburger" class="menu-hamburger">
              </nav>
        </header>
        <main>
            <div class="all">
                <section class="banderole">
                    <div class="contenant-banderole">
                        <div class="accueil">
                            <img class="maison" src="images/maison.png" alt="icone maison">
                            <img class="fleche" src="images/fleche.png" alt="icone fleche vers la droite">
                            <a class="lien-banderole" href="index.php">Accueil</a>
                        </div>
                        <div class="acces-rapide">
                            <h1>Accès rapide</h1>
                            <ul class="contenant-liste-acces">
                                <li class="liste-acces"><img src="images/fleche.png" class="fleche-acces" alt="icone fleche vers la droite"><a class="lien-acces" href="billetterie.php">Offres</a> / <a class="lien-acces" href="billetterie.php">Billetterie</a></li>
                                <li class="liste-acces"><img src="images/fleche.png" class="fleche-acces" alt="icone fleche vers la droite"><a class="lien-acces" href="contact.php">Nous contacter</a></li>
                            </ul>
                        </div>
                        <div class="infos">
                            <h2>Informations de contact</h2>
                            <ul class="contenant-liste-infos">
                                <li class="liste-infos"><img src="images/fleche.png" class="fleche-acces" alt="icone fleche vers la droite">Par téléphone : <a class="num" href="tel:+33303030303">+33303030303</a></li>
                                <li class="liste-infos"><img src="images/fleche.png" class="fleche-acces" alt="icone fleche vers la droite">Par email : <a class="num" href="mailto:cse@lyceestvincent.fr">cse@lyceestvincent.fr</a></li>
                                <li class="liste-infos"><img src="images/fleche.png" class="fleche-acces" alt="icone fleche vers la droite" style="margin-right: 6px;">Au lycée : <a class="num" target="_blank" href="https://www.google.fr/maps/place/Lyc%C3%A9e+Priv%C3%A9+Saint+Vincent+de+Senlis/@49.2033091,2.5888014,21z/data=!4m10!1m2!2m1!1sBureau+du+CSE+(1er+%C3%A9tage+b%C3%A2timent+Saint-Vincent)+senlis!3m6!1s0x47e630cfeb73f31d:0x48c819ca44bf7503!8m2!3d49.2032959!4d2.5887978!15sCjlCdXJlYXUgZHUgQ1NFICgxZXIgw6l0YWdlIGLDonRpbWVudCBTYWludC1WaW5jZW50KSBzZW5saXOSAQtoaWdoX3NjaG9vbOABAA!16s%2Fg%2F1thcrn4z">Bureau du CSE<br> (1er étage bâtiment Saint-Vincent)</a></li>
                            </ul>
                        </div>
                        <div class="partenaires">
                            <h3>Nos partenaires</h3>

                            <div class="contenant-slider">
                                <div class="slider">
                                    <div class="fleche-gauche"><img src="images/fleche.png" alt="icone fleche vers la gauche"></div>
                                    <div class="contenant-image-slider">
                                        <img src="images/partenaires/leonidas.png" class="slide-image leonidas1" alt="image d'un partenaire">
                                        <img src="images/partenaires/leonidas2.png" class="slide-image leonidas2" alt="image d'un partenaire">
                                        <img src="images/partenaires/leonidas1.png" class="slide-image leonidas3" alt="image d'un partenaire">
                                    </div>
                                    <div class="fleche-droite"><img src="images/fleche.png" alt="icone fleche vers la droite"></div>
                                </div>

                                <div class="cont-btn">
                                    <div class="btn-nav gauche" data-index="1"></div>
                                    <div class="btn-nav milieu" data-index="2"></div>
                                    <div class="btn-nav droite" data-index="3"></div>
                                </div>
                            </div>
                            <a class="liens-partenaires" href="partenaire.php">Découvrir tous nos partenaires</a>
                        </div>
                    </div>
                </section>

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
                            <div class="savoir-plus"><a href="#">En savoir plus <img src="images/fleche.png" alt="icone fleche vers la droite"></a></div>
                        </div>
                        <div class="cases-offres">
                            <div class="ligne">
                                <div class="rectangle-offre"><p>OFFRE</p></div>
                                <p class="date">Publié le 09 décembre 2022</p>
                            </div>
                            <div class="texte-offre"><p>Achetez dès à présent votre sapin de noël en profitant du partenariat entre le lycée Saint-Vincent
                                et l’association des Scouts De L’oise.<br>Prix commun à tous : 30€ le petit sapin, 40€ le grand.</p></div>
                            <div class="savoir-plus"><a href="#">En savoir plus <img src="images/fleche.png" alt="icone fleche vers la droite"></a></div>
                        </div>
                        <div class="cases-offres">
                            <div class="ligne">
                                <div class="rectangle-offre"><p>OFFRE</p></div>
                                <p class="date">Publié le 10 novembre 2022 - Jusqu’au 30/01/2023</p>
                            </div>
                            <div class="texte-offre"><p>Offre négociée au près de Léonidas, profitez de - 10% toute l’année sur l’ensemble des chocolats dans la boutique de Senlis.<br>
                                Famille nombreuse (5 enfants et plus) : -5% supplémentaire</p></div>
                            <div class="savoir-plus"><a href="#">En savoir plus <img src="images/fleche.png" alt="icone fleche vers la droite"></a></div>
                        </div>
                        
                        <div class="decouvrir"><a href="billetterie.php">Découvrir toutes nos offres 〉</a></div>
                    </div>
                </section>
            </div>
        </main>
        <footer>
            <div class="contenant-footer">
                <div class="contenant-logo-footer">
                    <img src="images/logolsv.png" alt="image logo saint vincent">
                </div>
                <div class="contenant-texte-footer">
                    <h5>CSE Lycée Saint-Vincent</h5>
                    <ul class="contenant-liste-footer">
                        <li class="liste-footer"><a href="partenaire.php" class="lien-footer">> Partenariats</a></li>
                        <li class="liste-footer"><a href="billetterie.php" class="lien-footer">> Billetterie</a></li>
                        <li class="liste-footer"><a href="contact.php" class="lien-footer">> Contact</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </body>
</html>