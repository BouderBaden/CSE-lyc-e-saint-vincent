<?php
$page = 'bill';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Nos offres</title>
    <link href="billetterie.css" rel="stylesheet">
    <link rel="icon" href="images/Logo_parNodevo.png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="header.css" rel="stylesheet">
    <link href="banderole.css" rel="stylesheet">
    <link href="footer.css" rel="stylesheet">
</head>

<body>
    <?php include('header.php'); ?>
    <main>
        <div class="all">
            <?php include('banderole.php'); ?>


            <section class="offres">
                <div class="contenant-offres">
                    <h5>Les offres de la billetterie</h5>
                    <div class="cases-offres">
                        <div class="ligne">
                            <div class="rectangle-offre">
                                <p>OFFRE</p>
                            </div>
                            <p class="date">Publié le 11 décembre 2022</p>
                        </div>
                        <div class="texte-offre">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo vel nostrum voluptate, officia est nisi quo magni consectetur non quos sunt tenetur tempora commodi maxime repudiandae veritatis voluptates eos deleniti!</p>
                        </div>
                        <div class="savoir-plus"><a href="#" id="myBtn">Voir l'offre<img src="images/fleche.png" alt="icone fleche vers la droite"></a></div>
                        <div id="myModal" class="modal">
                            <!-- Modal content -->
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <div class="header-modal">
                                    <h1>Titre de l'offre</h1>
                                    <p>Publiée le date</p>
                                </div>
                                <div class="contenant-slider2">
                                    <div class="slider2">
                                        <div class="fleche-gauche2"><img src="images/fleche.png"></div>
                                        <div class="contenant-image-slider2">
                                            <img src="teste.jpg" class="slide-image leonidas1" alt="">
                                            <img src="franprix.jpg" class="slide-image leonidas2" alt="">
                                            <img src="images/partenaires/leonidas1.png" class="slide-image leonidas3" alt="">
                                        </div>
                                        <div class="fleche-droite2"><img src="images/fleche.png"></div>
                                    </div>

                                    <div class="cont-btn">
                                        <div class="btn-nav2" data-index="1"></div>
                                        <div class="btn-nav2" data-index="2"></div>
                                        <div class="btn-nav2" data-index="3"></div>
                                    </div>
                                </div>
                                <div class="body-modal">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim ut officia repellendus ratione voluptas odio praesentium dicta sapiente quisquam tempore qui eos ab aspernatur minima exercitationem necessitatibus atque, nemo magnam.</p>
                                </div>
                                <div class="footer-modal">
                                    <a class="lien-offre" href="#">Lien vers l'offre</a>
                                </div>
                                <script src="modale.js" defer></script>
                            </div>
                        </div>
                    </div>
                    <div class="cases-offres">
                        <div class="ligne">
                            <div class="rectangle-offre">
                                <p>OFFRE</p>
                            </div>
                            <p class="date">Publié le 11 décembre 2022</p>
                        </div>
                        <div class="texte-offre">
                            <p>Profitez de -20% sur une sélection de parfum, en partenariat avec l’enseigne Nocibé de Senlis.<br>Merci de vous rendre au bureau du CSE pour pouvor passer commande</p>
                        </div>
                        <div class="savoir-plus"><a href="#" id="myBtn">Voir l'offre<img src="images/fleche.png" alt="icone fleche vers la droite"></a></div>
                        <div id="myModal" class="modal">
                            <!-- Modal content -->
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <div class="header-modal">
                                    <h1>Titre de l'offre</h1>
                                    <p>Publiée le date</p>
                                </div>
                                <div class="contenant-slider2">
                                    <div class="slider2">
                                        <div class="fleche-gauche2"><img src="images/fleche.png"></div>
                                        <div class="contenant-image-slider2">
                                            <img src="images/partenaires/leonidas.png" class="slide-image leonidas1" alt="">
                                            <img src="images/partenaires/leonidas2.png" class="slide-image leonidas2" alt="">
                                            <img src="images/partenaires/leonidas1.png" class="slide-image leonidas3" alt="">
                                        </div>
                                        <div class="fleche-droite2"><img src="images/fleche.png"></div>
                                    </div>

                                    <div class="cont-btn">
                                        <div class="btn-nav2" data-index="1"></div>
                                        <div class="btn-nav2" data-index="2"></div>
                                        <div class="btn-nav2" data-index="3"></div>
                                    </div>
                                </div>
                                <div class="body-modal">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim ut officia repellendus ratione voluptas odio praesentium dicta sapiente quisquam tempore qui eos ab aspernatur minima exercitationem necessitatibus atque, nemo magnam.</p>
                                </div>
                                <div class="footer-modal">
                                    <a class="lien-offre" href="#">Lien vers l'offre</a>
                                </div>
                                <script src="modale.js" defer></script>
                            </div>
                        </div>
                    </div>
                    <div class="cases-offres">
                        <div class="ligne">
                            <div class="rectangle-offre">
                                <p>OFFRE</p>
                            </div>
                            <p class="date">Publié le 11 décembre 2022</p>
                        </div>
                        <div class="texte-offre">
                            <p>Profitez de -20% sur une sélection de parfum, en partenariat avec l’enseigne Nocibé de Senlis.<br>Merci de vous rendre au bureau du CSE pour pouvor passer commande</p>
                        </div>
                        <div class="savoir-plus"><a href="#" id="myBtn">Voir l'offre<img src="images/fleche.png" alt="icone fleche vers la droite"></a></div>
                        <div id="myModal" class="modal">
                            <!-- Modal content -->
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <div class="header-modal">
                                    <h1>Titre de l'offre</h1>
                                    <p>Publiée le date</p>
                                </div>
                                <div class="contenant-slider2">
                                    <div class="slider2">
                                        <div class="fleche-gauche2"><img src="images/fleche.png"></div>
                                        <div class="contenant-image-slider2">
                                            <img src="images/partenaires/leonidas.png" class="slide-image leonidas1" alt="">
                                            <img src="images/partenaires/leonidas2.png" class="slide-image leonidas2" alt="">
                                            <img src="images/partenaires/leonidas1.png" class="slide-image leonidas3" alt="">
                                        </div>
                                        <div class="fleche-droite2"><img src="images/fleche.png"></div>
                                    </div>

                                    <div class="cont-btn">
                                        <div class="btn-nav2" data-index="1"></div>
                                        <div class="btn-nav2" data-index="2"></div>
                                        <div class="btn-nav2" data-index="3"></div>
                                    </div>
                                </div>
                                <div class="body-modal">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim ut officia repellendus ratione voluptas odio praesentium dicta sapiente quisquam tempore qui eos ab aspernatur minima exercitationem necessitatibus atque, nemo magnam.</p>
                                </div>
                                <div class="footer-modal">
                                    <a class="lien-offre" href="#">Lien vers l'offre</a>
                                </div>
                                <script src="modale.js" defer></script>
                            </div>
                        </div>
                    </div>
                    <div class="cases-offres">
                        <div class="ligne">
                            <div class="rectangle-offre">
                                <p>OFFRE</p>
                            </div>
                            <p class="date">Publié le 11 décembre 2022</p>
                        </div>
                        <div class="texte-offre">
                            <p>Profitez de -20% sur une sélection de parfum, en partenariat avec l’enseigne Nocibé de Senlis.<br>Merci de vous rendre au bureau du CSE pour pouvor passer commande</p>
                        </div>
                        <div class="savoir-plus"><a href="#" id="myBtn">Voir l'offre<img src="images/fleche.png" alt="icone fleche vers la droite"></a></div>
                        <div id="myModal" class="modal">
                            <!-- Modal content -->
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <div class="header-modal">
                                    <h1>Titre de l'offre</h1>
                                    <p>Publiée le date</p>
                                </div>
                                <div class="contenant-slider2">
                                    <div class="slider2">
                                        <div class="fleche-gauche2"><img src="images/fleche.png"></div>
                                        <div class="contenant-image-slider2">
                                            <img src="images/partenaires/leonidas.png" class="slide-image leonidas1" alt="">
                                            <img src="images/partenaires/leonidas2.png" class="slide-image leonidas2" alt="">
                                            <img src="images/partenaires/leonidas1.png" class="slide-image leonidas3" alt="">
                                        </div>
                                        <div class="fleche-droite2"><img src="images/fleche.png"></div>
                                    </div>

                                    <div class="cont-btn">
                                        <div class="btn-nav2" data-index="1"></div>
                                        <div class="btn-nav2" data-index="2"></div>
                                        <div class="btn-nav2" data-index="3"></div>
                                    </div>
                                </div>
                                <div class="body-modal">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim ut officia repellendus ratione voluptas odio praesentium dicta sapiente quisquam tempore qui eos ab aspernatur minima exercitationem necessitatibus atque, nemo magnam.</p>
                                </div>
                                <div class="footer-modal">
                                    <a class="lien-offre" href="#">Lien vers l'offre</a>
                                </div>
                                <script src="modale.js" defer></script>
                            </div>
                        </div>
                    </div>
                    <div class="cases-offres">
                        <div class="ligne">
                            <div class="rectangle-offre">
                                <p>OFFRE</p>
                            </div>
                            <p class="date">Publié le 11 décembre 2022</p>
                        </div>
                        <div class="texte-offre">
                            <p>Profitez de -20% sur une sélection de parfum, en partenariat avec l’enseigne Nocibé de Senlis.<br>Merci de vous rendre au bureau du CSE pour pouvor passer commande</p>
                        </div>
                        <div class="savoir-plus"><a href="#" id="myBtn">Voir l'offre<img src="images/fleche.png" alt="icone fleche vers la droite"></a></div>
                        <div id="myModal" class="modal">
                            <!-- Modal content -->
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <div class="header-modal">
                                    <h1>Titre de l'offre</h1>
                                    <p>Publiée le date</p>
                                </div>
                                <div class="contenant-slider2">
                                    <div class="slider2">
                                        <div class="fleche-gauche2"><img src="images/fleche.png"></div>
                                        <div class="contenant-image-slider2">
                                            <img src="images/partenaires/leonidas.png" class="slide-image leonidas1" alt="">
                                            <img src="images/partenaires/leonidas2.png" class="slide-image leonidas2" alt="">
                                            <img src="images/partenaires/leonidas1.png" class="slide-image leonidas3" alt="">
                                        </div>
                                        <div class="fleche-droite2"><img src="images/fleche.png"></div>
                                    </div>

                                    <div class="cont-btn">
                                        <div class="btn-nav2" data-index="1"></div>
                                        <div class="btn-nav2" data-index="2"></div>
                                        <div class="btn-nav2" data-index="3"></div>
                                    </div>
                                </div>
                                <div class="body-modal">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim ut officia repellendus ratione voluptas odio praesentium dicta sapiente quisquam tempore qui eos ab aspernatur minima exercitationem necessitatibus atque, nemo magnam.</p>
                                </div>
                                <div class="footer-modal">
                                    <a class="lien-offre" href="#">Lien vers l'offre</a>
                                </div>
                                <script src="modale.js" defer></script>
                            </div>
                        </div>
                    </div>
                    <div class="cases-offres">
                        <div class="ligne">
                            <div class="rectangle-offre">
                                <p>OFFRE</p>
                            </div>
                            <p class="date">Publié le 11 décembre 2022</p>
                        </div>
                        <div class="texte-offre">
                            <p>Profitez de -20% sur une sélection de parfum, en partenariat avec l’enseigne Nocibé de Senlis.<br>Merci de vous rendre au bureau du CSE pour pouvor passer commande</p>
                        </div>
                        <div class="savoir-plus"><a href="#" id="myBtn">Voir l'offre<img src="images/fleche.png" alt="icone fleche vers la droite"></a></div>
                        <div id="myModal" class="modal">
                            <!-- Modal content -->
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <div class="header-modal">
                                    <h1>Titre de l'offre</h1>
                                    <p>Publiée le date</p>
                                </div>
                                <div class="contenant-slider2">
                                    <div class="slider2">
                                        <div class="fleche-gauche2"><img src="images/fleche.png"></div>
                                        <div class="contenant-image-slider2">
                                            <img src="images/partenaires/leonidas.png" class="slide-image leonidas1" alt="">
                                            <img src="images/partenaires/leonidas2.png" class="slide-image leonidas2" alt="">
                                            <img src="images/partenaires/leonidas1.png" class="slide-image leonidas3" alt="">
                                        </div>
                                        <div class="fleche-droite2"><img src="images/fleche.png"></div>
                                    </div>

                                    <div class="cont-btn">
                                        <div class="btn-nav2" data-index="1"></div>
                                        <div class="btn-nav2" data-index="2"></div>
                                        <div class="btn-nav2" data-index="3"></div>
                                    </div>
                                </div>
                                <div class="body-modal">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim ut officia repellendus ratione voluptas odio praesentium dicta sapiente quisquam tempore qui eos ab aspernatur minima exercitationem necessitatibus atque, nemo magnam.</p>
                                </div>
                                <div class="footer-modal">
                                    <a class="lien-offre" href="#">Lien vers l'offre</a>
                                </div>
                                <script src="modale.js" defer></script>
                            </div>
                        </div>
                    </div>
                    <div class="cases-offres">
                        <div class="ligne">
                            <div class="rectangle-offre">
                                <p>OFFRE</p>
                            </div>
                            <p class="date">Publié le 11 décembre 2022</p>
                        </div>
                        <div class="texte-offre">
                            <p>Profitez de -20% sur une sélection de parfum, en partenariat avec l’enseigne Nocibé de Senlis.<br>Merci de vous rendre au bureau du CSE pour pouvor passer commande</p>
                        </div>
                        <div class="savoir-plus"><a href="#" id="myBtn">Voir l'offre<img src="images/fleche.png" alt="icone fleche vers la droite"></a></div>
                        <div id="myModal" class="modal">
                            <!-- Modal content -->
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <div class="header-modal">
                                    <h1>Titre de l'offre</h1>
                                    <p>Publiée le date</p>
                                </div>
                                <div class="contenant-slider2">
                                    <div class="slider2">
                                        <div class="fleche-gauche2"><img src="images/fleche.png"></div>
                                        <div class="contenant-image-slider2">
                                            <img src="images/partenaires/leonidas.png" class="slide-image leonidas1" alt="">
                                            <img src="images/partenaires/leonidas2.png" class="slide-image leonidas2" alt="">
                                            <img src="images/partenaires/leonidas1.png" class="slide-image leonidas3" alt="">
                                        </div>
                                        <div class="fleche-droite2"><img src="images/fleche.png"></div>
                                    </div>

                                    <div class="cont-btn">
                                        <div class="btn-nav2" data-index="1"></div>
                                        <div class="btn-nav2" data-index="2"></div>
                                        <div class="btn-nav2" data-index="3"></div>
                                    </div>
                                </div>
                                <div class="body-modal">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim ut officia repellendus ratione voluptas odio praesentium dicta sapiente quisquam tempore qui eos ab aspernatur minima exercitationem necessitatibus atque, nemo magnam.</p>
                                </div>
                                <div class="footer-modal">
                                    <a class="lien-offre" href="#">Lien vers l'offre</a>
                                </div>
                                <script src="modale.js" defer></script>
                            </div>
                        </div>
                    </div>
                    <div class="cases-offres">
                        <div class="ligne">
                            <div class="rectangle-offre">
                                <p>OFFRE</p>
                            </div>
                            <p class="date">Publié le 11 décembre 2022</p>
                        </div>
                        <div class="texte-offre">
                            <p>Profitez de -20% sur une sélection de parfum, en partenariat avec l’enseigne Nocibé de Senlis.<br>Merci de vous rendre au bureau du CSE pour pouvor passer commande</p>
                        </div>
                        <div class="savoir-plus"><a href="#" id="myBtn">Voir l'offre<img src="images/fleche.png" alt="icone fleche vers la droite"></a></div>
                        <div id="myModal" class="modal">
                            <!-- Modal content -->
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <div class="header-modal">
                                    <h1>Titre de l'offre</h1>
                                    <p>Publiée le date</p>
                                </div>
                                <div class="contenant-slider2">
                                    <div class="slider2">
                                        <div class="fleche-gauche2"><img src="images/fleche.png"></div>
                                        <div class="contenant-image-slider2">
                                            <img src="images/partenaires/leonidas.png" class="slide-image leonidas1" alt="">
                                            <img src="images/partenaires/leonidas2.png" class="slide-image leonidas2" alt="">
                                            <img src="images/partenaires/leonidas1.png" class="slide-image leonidas3" alt="">
                                        </div>
                                        <div class="fleche-droite2"><img src="images/fleche.png"></div>
                                    </div>

                                    <div class="cont-btn">
                                        <div class="btn-nav2" data-index="1"></div>
                                        <div class="btn-nav2" data-index="2"></div>
                                        <div class="btn-nav2" data-index="3"></div>
                                    </div>
                                </div>
                                <div class="body-modal">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim ut officia repellendus ratione voluptas odio praesentium dicta sapiente quisquam tempore qui eos ab aspernatur minima exercitationem necessitatibus atque, nemo magnam.</p>
                                </div>
                                <div class="footer-modal">
                                    <a class="lien-offre" href="#">Lien vers l'offre</a>
                                </div>
                                <script src="modale.js" defer></script>
                            </div>
                        </div>
                    </div>
                    <div class="cases-offres">
                        <div class="ligne">
                            <div class="rectangle-offre">
                                <p>OFFRE</p>
                            </div>
                            <p class="date">Publié le 11 décembre 2022</p>
                        </div>
                        <div class="texte-offre">
                            <p>Profitez de -20% sur une sélection de parfum, en partenariat avec l’enseigne Nocibé de Senlis.<br>Merci de vous rendre au bureau du CSE pour pouvor passer commande</p>
                        </div>
                        <div class="savoir-plus"><a href="#" id="myBtn">Voir l'offre<img src="images/fleche.png" alt="icone fleche vers la droite"></a></div>
                        <div id="myModal" class="modal">
                            <!-- Modal content -->
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <div class="header-modal">
                                    <h1>Titre de l'offre</h1>
                                    <p>Publiée le date</p>
                                </div>
                                <div class="contenant-slider2">
                                    <div class="slider2">
                                        <div class="fleche-gauche2"><img src="images/fleche.png"></div>
                                        <div class="contenant-image-slider2">
                                            <img src="images/partenaires/leonidas.png" class="slide-image leonidas1" alt="">
                                            <img src="images/partenaires/leonidas2.png" class="slide-image leonidas2" alt="">
                                            <img src="images/partenaires/leonidas1.png" class="slide-image leonidas3" alt="">
                                        </div>
                                        <div class="fleche-droite2"><img src="images/fleche.png"></div>
                                    </div>

                                    <div class="cont-btn">
                                        <div class="btn-nav2" data-index="1"></div>
                                        <div class="btn-nav2" data-index="2"></div>
                                        <div class="btn-nav2" data-index="3"></div>
                                    </div>
                                </div>
                                <div class="body-modal">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim ut officia repellendus ratione voluptas odio praesentium dicta sapiente quisquam tempore qui eos ab aspernatur minima exercitationem necessitatibus atque, nemo magnam.</p>
                                </div>
                                <div class="footer-modal">
                                    <a class="lien-offre" href="#">Lien vers l'offre</a>
                                </div>
                                <script src="modale.js" defer></script>
                            </div>
                        </div>
                    </div>
                    <div class="cases-offres">
                        <div class="ligne">
                            <div class="rectangle-offre">
                                <p>OFFRE</p>
                            </div>
                            <p class="date">Publié le 11 décembre 2022</p>
                        </div>
                        <div class="texte-offre">
                            <p>Profitez de -20% sur une sélection de parfum, en partenariat avec l’enseigne Nocibé de Senlis.<br>Merci de vous rendre au bureau du CSE pour pouvor passer commande</p>
                        </div>
                        <div class="savoir-plus"><a href="#" id="myBtn">Voir l'offre<img src="images/fleche.png" alt="icone fleche vers la droite"></a></div>
                        <div id="myModal" class="modal">
                            <!-- Modal content -->
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <div class="header-modal">
                                    <h1>Titre de l'offre</h1>
                                    <p>Publiée le date</p>
                                </div>
                                <div class="contenant-slider2">
                                    <div class="slider2">
                                        <div class="fleche-gauche2"><img src="images/fleche.png"></div>
                                        <div class="contenant-image-slider2">
                                            <img src="images/partenaires/leonidas.png" class="slide-image leonidas1" alt="">
                                            <img src="images/partenaires/leonidas2.png" class="slide-image leonidas2" alt="">
                                            <img src="images/partenaires/leonidas1.png" class="slide-image leonidas3" alt="">
                                        </div>
                                        <div class="fleche-droite2"><img src="images/fleche.png"></div>
                                    </div>

                                    <div class="cont-btn">
                                        <div class="btn-nav2" data-index="1"></div>
                                        <div class="btn-nav2" data-index="2"></div>
                                        <div class="btn-nav2" data-index="3"></div>
                                    </div>
                                </div>
                                <div class="body-modal">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim ut officia repellendus ratione voluptas odio praesentium dicta sapiente quisquam tempore qui eos ab aspernatur minima exercitationem necessitatibus atque, nemo magnam.</p>
                                </div>
                                <div class="footer-modal">
                                    <a class="lien-offre" href="#">Lien vers l'offre</a>
                                </div>
                                <script src="modale.js" defer></script>
                            </div>
                        </div>
                    </div>
                    <div class="cases-offres">
                        <div class="ligne">
                            <div class="rectangle-offre">
                                <p>OFFRE</p>
                            </div>
                            <p class="date">Publié le 11 décembre 2022</p>
                        </div>
                        <div class="texte-offre">
                            <p>Profitez de -20% sur une sélection de parfum, en partenariat avec l’enseigne Nocibé de Senlis.<br>Merci de vous rendre au bureau du CSE pour pouvor passer commande</p>
                        </div>
                        <div class="savoir-plus"><a href="#" id="myBtn">Voir l'offre<img src="images/fleche.png" alt="icone fleche vers la droite"></a></div>
                        <div id="myModal" class="modal">
                            <!-- Modal content -->
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <div class="header-modal">
                                    <h1>Titre de l'offre</h1>
                                    <p>Publiée le date</p>
                                </div>
                                <div class="contenant-slider2">
                                    <div class="slider2">
                                        <div class="fleche-gauche2"><img src="images/fleche.png"></div>
                                        <div class="contenant-image-slider2">
                                            <img src="images/partenaires/leonidas.png" class="slide-image leonidas1" alt="">
                                            <img src="images/partenaires/leonidas2.png" class="slide-image leonidas2" alt="">
                                            <img src="images/partenaires/leonidas1.png" class="slide-image leonidas3" alt="">
                                        </div>
                                        <div class="fleche-droite2"><img src="images/fleche.png"></div>
                                    </div>

                                    <div class="cont-btn">
                                        <div class="btn-nav2" data-index="1"></div>
                                        <div class="btn-nav2" data-index="2"></div>
                                        <div class="btn-nav2" data-index="3"></div>
                                    </div>
                                </div>
                                <div class="body-modal">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim ut officia repellendus ratione voluptas odio praesentium dicta sapiente quisquam tempore qui eos ab aspernatur minima exercitationem necessitatibus atque, nemo magnam.</p>
                                </div>
                                <div class="footer-modal">
                                    <a class="lien-offre" href="#">Lien vers l'offre</a>
                                </div>
                                <script src="modale.js" defer></script>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <?php include("footer.php"); ?>
    <script src="script.js" defer></script>
    <script src="modale.js" defer></script>

</body>

</html>