<html>
    <head>
        <meta charset="UTF-8">
        <title>Contactez-nous</title>
        <link href="contact.css" rel="stylesheet">
        <link rel="icon" href="">
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
                        <div id="accueil"class="fond-nav"><li class="boutons-liste"><a class="liennav" href="index.html">Accueil</a></li></div>
                        <div id="partenariat"class="fond-nav"><li class="boutons-liste"><a class="liennav" href="partenaire.html">Partenariats</a></li></div>
                        <div id="billetterie"class="fond-nav"><li class="boutons-liste"><a class="liennav" href="billetterie.html">Billeterie</a></li></div>
                        <div id="contact"class="fond-nav"><li class="boutons-liste"><a class="liennav" href="contact.html">Contact</a></li></div>
                    </ul>
                </div>
                <div class="dropdown_menu">
                    <ul class="contenant-liste">
                        <div id="accueil"class="fond-nav"><li class="boutons-liste"><a class="liennav" href="index.html">Accueil</a></li></div>
                        <div id="partenariat"class="fond-nav"><li class="boutons-liste"><a class="liennav" href="partenaire.html">Partenariats</a></li></div>
                        <div id="billetterie"class="fond-nav"><li class="boutons-liste"><a class="liennav" href="billetterie.html">Billeterie</a></li></div>
                        <div id="contact"class="fond-nav"><li class="boutons-liste"><a class="liennav" href="contact.html">Contact</a></li></div>
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
                            <img class="maison" src="images/maison.png" alt="">
                            <img class="fleche" src="images/fleche.png" alt="">
                            <a class="lien-banderole" href="index.html">Accueil</a>
                        </div>
                        <div class="acces-rapide">
                            <h1>Accès rapide</h1>
                            <ul class="contenant-liste-acces">
                                <li class="liste-acces"><img src="images/fleche.png" class="fleche-acces" alt=""><a class="lien-acces" href="billetterie.html">Offres</a> / <a class="lien-acces" href="billetterie.html">Billetterie</a></li>
                                <li class="liste-acces"><img src="images/fleche.png" class="fleche-acces" alt=""><a class="lien-acces" href="contact.html">Nous contacter</a></li>
                            </ul>
                        </div>
                        <div class="infos">
                            <h2>Informations de contact</h2>
                            <ul class="contenant-liste-infos">
                                <li class="liste-infos"><img src="images/fleche.png" class="fleche-acces" alt="">Par téléphone : <a class="num" href="tel:+33303030303">+33303030303</a></li>
                                <li class="liste-infos"><img src="images/fleche.png" class="fleche-acces" alt="">Par email : <a class="num" href="mailto:cse@lyceestvincent.fr">cse@lyceestvincent.fr</a></li>
                                <li class="liste-infos"><img src="images/fleche.png" class="fleche-acces" alt="" style="margin-right: 6px;">Au lycée : <a class="num" target="_blank" href="https://www.google.fr/maps/place/Lyc%C3%A9e+Priv%C3%A9+Saint+Vincent+de+Senlis/@49.2033091,2.5888014,21z/data=!4m10!1m2!2m1!1sBureau+du+CSE+(1er+%C3%A9tage+b%C3%A2timent+Saint-Vincent)+senlis!3m6!1s0x47e630cfeb73f31d:0x48c819ca44bf7503!8m2!3d49.2032959!4d2.5887978!15sCjlCdXJlYXUgZHUgQ1NFICgxZXIgw6l0YWdlIGLDonRpbWVudCBTYWludC1WaW5jZW50KSBzZW5saXOSAQtoaWdoX3NjaG9vbOABAA!16s%2Fg%2F1thcrn4z">Bureau du CSE<br> (1er étage bâtiment Saint-Vincent)</a></li>
                            </ul>
                            </div>
                        <div class="partenaires">
                            <h3>Nos partenaires</h3>
                            <div class="contenant-slider">
                                <div class="slider">
                                    <div class="fleche-gauche"><img src="images/fleche.png"></div>
                                    <div class="contenant-image-slider">
                                        <img src="images/partenaires/leonidas.png" class="slide-image leonidas1" alt="">
                                        <img src="images/partenaires/leonidas2.png" class="slide-image leonidas2" alt="">
                                        <img src="images/partenaires/leonidas1.png" class="slide-image leonidas3" alt="">
                                    </div>
                                    <div class="fleche-droite"><img src="images/fleche.png"></div>
                                </div>
                                <div class="cont-btn">
                                    <div class="btn-nav gauche" data-index="1"></div>
                                    <div class="btn-nav milieu" data-index="2"></div>
                                    <div class="btn-nav droite" data-index="3"></div>
                                </div>
                            </div>
                            <a class="liens-partenaires" href="partenaire.html">Découvrir tous nos partenaires</a>
                        </div>
                    </div>
                </section>
                
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

        <footer>
            <div class="contenant-footer">
                <div class="contenant-logo-footer">
                    <img src="images/logolsv.png" alt="">
                </div>
                <div class="contenant-texte-footer">
                    <h5>CSE Lycée Saint-Vincent</h5>
                    <ul class="contenant-liste-footer">
                        <li class="liste-footer"><a href="index.html" class="lien-footer">> Accueil</a></li>
                        <li class="liste-footer"><a href="partenaire.html" class="lien-footer">> Partenariats</a></li>
                        <li class="liste-footer"><a href="billetterie.html" class="lien-footer">> Billetterie</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </body>
</html>