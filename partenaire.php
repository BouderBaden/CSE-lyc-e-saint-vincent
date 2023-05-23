<?php
$page = 'part';
include "db.php";
$sql = "SELECT * FROM `partenaire` INNER JOIN `image` ON `partenaire`.`Id_Image` = `image`.`Id_Image`";
$statement = $pdo->prepare($sql);
$statement->execute();
$partenaires = $statement->fetchAll();

?>
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <?php include('header.php'); ?>
    <main>
        <div class="all">
            <?php include('banderole.php'); ?>

            <section class="partenaire">
                <div class="contenant-partenaire">
                    <h1>Nos partenaires</h1>
                    <div class="contenant-les-partenaires">
                        <?php
                        foreach ($partenaires as $partenaire) {
                        ?>
                            <div class="carre-partenaire">
                                <div class="image-partenaire"><img src="images/partenaires/<?= $partenaire['Nom_Image'] ?>" alt="leonidas"></div>
                                <h2><?= $partenaire['Nom_Partenaire'] ?></h2>
                                <div class="texte-partenaire">
                                    <p><?= $partenaire['Description_Partenaire'] ?></p>
                                </div>
                                <a class="redirection" onclick="openModal(<?= $partenaire['Id_Partenaire'] ?>)" href="#" id="myBtn">Découvrir</a>
                                <div id="myModal-<?= $partenaire['Id_Partenaire'] ?>" class="modal">
                                    <div class="modal-content">
                                        <span onclick="closeModal(<?= $partenaire['Id_Partenaire'] ?>)" class="close">×</span>
                                        <div class="header-modal">
                                            <h3><?= $partenaire['Nom_Partenaire'] ?></h3>
                                        </div>
                                        <div class="body-modal">
                                            <div class="photo-partenaire"><img src="images/partenaires/<?= $partenaire['Nom_Image'] ?>" class="photo" alt="leonidas"></div>
                                            <p><?= $partenaire['Description_Partenaire'] ?></p>
                                        </div>
                                        <div class="footer-modal">
                                            <a class="lien-offre" href="<?= $partenaire['Lien_Partenaire'] ?>" target="_blank">Lien vers le partenaire</a>
                                        </div>
                                        <script src="modale.js" defer></script>
                                    </div>
                                </div>

                            </div>
                        <?php
                        }
                        ?>

                    </div>
                </div>
            </section>


        </div>
    </main>
    <?php include("footer.php"); ?>
    <script src="script.js" defer></script>
</body>

</html>