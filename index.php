<?php
$page = 'index';
require_once "db.php";
$sql = "SELECT * FROM `info_accueil`";
$statement = $pdo->prepare($sql);
$statement->execute();
$infos = $statement->fetch();

$sql = "SELECT * FROM `offre` INNER JOIN `partenaire` ON  `partenaire`.Id_Partenaire = `offre`.Id_Partenaire ORDER BY  Id_Offre DESC LIMIT 3";
$statement = $pdo->prepare($sql);
$statement->execute();
$offres = $statement->fetchAll();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Projet fin d'année</title>
    <link href="style.css" rel="stylesheet">
    <link rel="icon" href="images/Logo_parNodevo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="header.css" rel="stylesheet">
    <link href="banderole.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap" rel="stylesheet">
    <link href="footer.css" rel="stylesheet">
</head>

<body>
    <?php include('header.php'); ?>

    <main>
        <div class="all">
            <?php include('banderole.php'); ?>

            <section class="offres">
                <div class="contenant-offres">
                    <div class="cse">
                        <h1><?= $infos['Titre_Info_Accueil'] ?></h1>
                        <p><?= $infos['Texte_Info_Accueil'] ?></p>
                    </div>
                    <h5>Dernières offres de la billetterie</h5>
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
                        <div class="savoir-plus"><a href="billetterie.php">En savoir plus <img src="images/fleche.png" alt="icone fleche vers la droite"></a></div>
                    </div>
                    <?php
                    }
                    ?>
                    <div class="decouvrir"><a href="billetterie.php">Découvrir toutes nos offres 〉</a></div>
                </div>
            </section>
        </div>
    </main>

    <?php include "footer.php"; ?>
    <script src="script.js" defer></script>
</body>

</html>