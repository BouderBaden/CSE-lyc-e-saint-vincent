<?php
//pdo connection
require_once "db.php";

if (isset($_POST['submit'])) {
    $nom = $_POST['nom'];
    $description = $_POST['description'];
    $lien = $_POST['lien'];
    if (empty($nom) || empty($description) || empty($lien)) {
        ?>
        <script>
            alert("Veuillez remplir tous les champs")
        </script>
        <?php
    } else {


        $sql = "INSERT INTO `partenaire` (`Nom_Partenaire`, `Description_Partenaire`, `Lien_Partenaire`) VALUES (:nom, :description, :lien)";
        $sql = $pdo->prepare($sql);
        $sql->bindParam(':nom', $nom);
        $sql->bindParam(':description', $description);
        $sql->bindParam(':lien', $lien);
        $sql->bindParam(':image', $img);
        $sql->execute();
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Ajouter un partenaire</title>
        <link rel="icon" href="images/Logo_parNodevo.png">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <link href="create.css" rel="stylesheet">
        <link href="header.css" rel="stylesheet">
        <link href="footer.css" rel="stylesheet">
        <script src="script.js" defer></script>
    </head>

    <body>
        <?php include("header.php"); ?>
        <main>
            <div class="contenant-creation">
                <h1>Ajouter un partenaire</h1>
                <form action="create.php" method="post" enctype="multipart/form-data">
                        <label for="nom" >Nom</label>
                        <input type="text" class="input" name="nom">
                        <label for="description">Description</label>
                        <textarea name="description"></textarea>
                        <label for="image">Insérez une image</label>
                        <input type="file" class="fichier" name="image">
                        <label for="lien">Lien</label>
                        <input type="text" class="input" placeholder="https://" name="lien">
                        <div class="placement">
                            <button type="submit" name="submit">Ajouter</button>
                        </div>
                </form>
            </div>
        </main>
        <?php include("footer.php"); ?>
    </body>

