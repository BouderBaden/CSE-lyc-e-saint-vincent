<?php
$page = 'part-back';
require_once "db.php";
$sql = "SELECT * FROM `partenaire`";
$statement = $pdo->prepare($sql);
$statement->execute();
$partenaires = $statement->fetchAll();



?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Page partenaire</title>
    <link rel="icon" href="images/Logo_parNodevo.png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="partenaire-back.css" rel="stylesheet">
    <link href="header-back.css" rel="stylesheet">
    <link href="footer-back.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="script.js" defer></script>
</head>

<body>

    <?php include("header-back.php"); ?>
    <main>
        <div class="contenant-tableau">
            <h1>Liste des partenaires</h1>
            <div class="contenant-ajout"><a href="create.php">+ Ajouter un partenaire</a></div>
            <table>
                <thead>
                    <tr>
                        <th>Nom du partenaire</th>
                        <th>Description du partenaire</th>
                        <th>Lien du partenaire</th>
                        <th>Image du Partenaire</th>
                        <th>Action</th>
                    </tr>
                </thead>


                <?php
                foreach ($partenaires as $partenaire) {
                    $id_image = $partenaire['Id_Image'];
                    $sql2 = $pdo->prepare("SELECT * FROM `image` WHERE `Id_Image` = ?");
                    $sql2->execute([$id_image]);
                    $data = $sql2->fetch();
                ?>
                    <tr class="tr-body">
                        <td>
                            <div class="centrer"><?= $partenaire['Nom_Partenaire']; ?></div>
                        </td>
                        <td class="description">
                            <div class="centrer"><?= $partenaire['Description_Partenaire']; ?></div>
                        </td>
                        <td>
                            <div class="centrer"><a href="<?= $partenaire['Lien_Partenaire']; ?>" class="lien-partenaire">Découvrir leur site</a></div>
                        </td>
                        <td>
                            <div class="centrer"><img src="images/partenaires/<?php echo $data['Nom_Image']; ?>"></div>
                        </td>
                        <td>
                            <div class="centrer">
                                <div class="contenant-boutons">
                                    <a href="update-delete.php?id=<?= $partenaire['Id_Partenaire'] ?>">Modifier/Supprimer</a>
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

</html>