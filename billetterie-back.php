<?php
$page = 'bill-back';
require_once "db.php";
$sql = "SELECT * FROM `offre`";
$statement = $pdo->prepare($sql);
$statement->execute();
$offres = $statement->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Page billetterie</title>
    <link rel="icon" href="images/Logo_parNodevo.png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="billetterie-back.css" rel="stylesheet">
    <link href="header-back.css" rel="stylesheet">
    <link href="footer-back.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="script.js" defer></script>
</head>

<body>
    <?php include("header-back.php"); ?>
    <main>
        <div class="contenant-tableau">
            <h1>Liste des offres</h1>
            <div class="contenant-ajout"><a href="create-offre.php">+ Ajouter une offre</a></div>
            <table>
                <thead>
                    <tr>
                        <th>Nom de l'offre</th>
                        <th>Description de l'offre</th>
                        <th>Date du début de l'offre</th>
                        <th>Date de la fin de l'offre</th>
                        <th>Nombre de place minimum de l'offre</th>
                        <th>Image(s) de l'offre</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php
                foreach ($offres as $offre) {
                    $query = "SELECT * FROM `offre_image` INNER JOIN `image` ON  `offre_image`.Id_Image = `image`.Id_Image  WHERE `offre_image`.Id_Offre = ?";
                    $get_all_image = $pdo->prepare($query);
                    $get_all_image->execute([$offre['Id_Offre']]);
                    $images = $get_all_image->fetchAll();
                ?>
                                <tr class="tr-body">
                    <td>
                        <div class="centrer"><?= $offre['Nom_Offre']; ?></div>
                    </td>
                    <td>
                        <div class="centrer"><?= $offre['Description_Offre']; ?></div>
                    </td>
                    <td>
                        <div class="centrer"><?= $offre['Date_Debut_Offre']; ?></div>
                    </td>
                    <td>
                        <div class="centrer"><?= $offre['Date_Fin_Offre']; ?></div>
                    </td>
                    <td>
                        <div class="centrer"><?= $offre['Nombre_Place_Min_Offre']; ?></div>
                    </td>
                    <td>
                    <?php
                        if (!empty($images)) {
                            foreach ($images as $img) {
                                ?>
                                <div class="centrer"><img src="images/offres/<?php echo $img['Nom_Image']; ?>"></div>
                                <?php
                            }
                        }
                        ?>
                
                    </td>
                    <td>
                        <div class="centrer">
                            <div class="contenant-boutons">
                                <a href="update-delete-offre.php?id=<?= $offre['Id_Offre'] ?>">Modifier/Supprimer</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </main>
    <?php include("footer-back.php"); ?>
</body>