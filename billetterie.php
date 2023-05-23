<?php
require_once 'db.php';
$sql = "SELECT * FROM `offre` INNER JOIN `partenaire` ON  `partenaire`.Id_Partenaire = `offre`.Id_Partenaire";
$statement = $pdo->prepare($sql);
$statement->execute();
$offres = $statement->fetchAll();
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <?php include('header.php'); ?>
    <main>
        <div class="all">
            <?php include('banderole.php'); ?>
            <section class="offres">
                <div class="contenant-offres">
                    <h5>Les offres de la billetterie</h5>
                    <?php
                    foreach ($offres as $offre) {
                        $query = "SELECT * FROM `offre_image` INNER JOIN `image` ON  `offre_image`.Id_Image = `image`.Id_Image  WHERE `offre_image`.Id_Offre = ?";
                        $get_all_image = $pdo->prepare($query);
                        $get_all_image->execute([$offre['Id_Offre']]);
                        $images = $get_all_image->fetchAll();
                    ?>
                        <div class="cases-offres">
                            <div class="ligne">
                                <div class="rectangle-offre">
                                    <p>OFFRE</p>
                                </div>
                                <p class="date">Publié le <?= $offre['Date_Debut_Offre'] ?></p>
                            </div>
                            <div class="texte-offre">
                                <p><?= $offre['Description_Offre'] ?></p>
                            </div>
                            <div class="savoir-plus"><a onclick="openModalOffre(<?= $offre['Id_Offre'] ?>)" href="#" id="myBtn">Voir l'offre<img src="images/fleche.png" alt="icone fleche vers la droite"></a></div>
                            <div id="myModalOffre-<?= $offre['Id_Offre'] ?>" class="modal">
                                <!-- Modal content -->
                                <div class="modal-content">
                                    <span onclick="closeModalOffre(<?= $offre['Id_Offre'] ?>)" class="close">&times;</span>
                                    <div class="header-modal">
                                        <h1><?= $offre['Nom_Offre'] ?></h1>
                                        <p>Publiée le <?= $offre['Date_Debut_Offre']; ?></p>
                                    </div>
                                    <div class="contenant-slider2">
                                        <div class="slider2">
                                            <div class="fleche-gauche2"><img src="images/fleche.png"></div>
                                            <div class="contenant-image-slider2">
                                                <?php foreach ($images as $img) { ?>
                                                    <img src="images/offres/<?= $img['Nom_Image']; ?>" class="slide-image leonidas1" alt="">
                                                <?php
                                                } ?>

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
                                        <p><?= $offre['Description_Offre'] ?></p>
                                    </div>
                                    <div class="footer-modal">
                                        <a class="lien-offre" href="<?= $offre['Lien_Partenaire'] ?>">Lien vers l'offre</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    <?php }
                    ?>

                </div>
            </section>
        </div>
    </main>
    <?php include("footer.php"); ?>
    <script src="modale.js" defer></script>
    <script src="script.js" defer></script>


</body>

</html>