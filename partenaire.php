<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Nos Partenaires</title>
        <link href="partenaire.css" rel="stylesheet">
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

                <section class="partenaire">
                    <div class="contenant-partenaire">
                        <h1>Nos partenaires</h1>
                        <div class="contenant-ligne-partenaire">
                            <ul class="contenant-liste-partenaire">
                                <div class="carre-partenaire">
                                    <li class="liste-partenaire">
                                        <div class="image-partenaire">
                                            <img src="images/partenaires/leonidas.png">
                                        </div>
                                        <h2>Partenaire 1</h2>
                                        <div class="texte-partenaire">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem id autem eius voluptatum consequuntur eveniet! Voluptatem, corporis ab voluptate minus fuga officia obcaecati eos hic architecto quidem beatae. Ad, illum?</p>
                                        </div>
                                        <a class="redirection" href="#" id="myBtn">Découvrir</a>
                                    </li>
                                    <div id="myModal" class="modal">
                                <!-- Modal content -->
                                <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <div class="header-modal">
                                        <h3>Nom du partenaire</h3>
                                    </div>
                                    <div class="body-modal">
                                        <div class="photo-partenaire">
                                            <img src="images/partenaires/leonidas.png" class="photo">
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim ut officia repellendus ratione voluptas odio praesentium dicta sapiente quisquam tempore qui eos ab aspernatur minima exercitationem necessitatibus atque, nemo magnam.</p>
                                    </div>
                                    <div class="footer-modal">
                                        <a class="lien-offre" href="#">Lien vers le partenaire</a>
                                    </div>
                                    <script src="modale.js" defer></script>
                                </div>
                                </div>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
        </main>
        <?php include ("footer.php"); ?>
        <script src="script.js" defer></script>
    </body>
</html>