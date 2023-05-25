<?php
$page = 'part-back';
require_once "db.php";

if (isset($_POST['submit'])) {
    $nom = $_POST["nom"];
    $description = $_POST["description"];
    $lien = $_POST["lien"];
    $nom_image = $_FILES['image']['name'];
    $type_image = $_FILES['image']['tmp_name'];
    echo $nom_image;

    if (empty($nom) || empty($description) || empty($lien) || empty($nom_image)) {
?>
        <script>
            alert("Veuillez remplir tous les champs")
        </script>
<?php
    } else {
        move_uploaded_file($_FILES['image']['tmp_name'], "images/partenaires/" . $nom_image);
        $sql = "INSERT INTO `image` (`Nom_Image`) VALUES (:image)";
        $sql = $pdo->prepare($sql);
        $sql->bindParam('image', $nom_image);
        $sql->execute();

        $sql = $pdo->prepare("SELECT Id_Image FROM image WHERE Nom_Image = :nom ");
        $sql->bindParam('nom', $nom_image);
        $sql->execute();
        $image = $sql->fetch();

        echo $image["Id_Image"];

        $sql = "INSERT INTO partenaire (Nom_partenaire, Description_partenaire, Lien_partenaire, Id_image) VALUES (:nom, :description, :lien, :image)";
        $sql = $pdo->prepare($sql);
        $sql->bindParam(':nom', $nom);
        $sql->bindParam(':description', $description);
        $sql->bindParam(':lien', $lien);
        $sql->bindParam(':image', $image["Id_Image"]);
        header("Location: partenaire-back.php");
        $sql->execute();
        echo "L'image a été uploadée avec succès";
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
    <link href="header-back.css" rel="stylesheet">
    <link href="footer-back.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="script.js" defer></script>
</head>

<body>
    <?php include("header-back.php"); ?>
    <main>
        <div class="contenant-creation">
            <h1>Ajouter un partenaire</h1>
            <form action="create.php" method="post" enctype="multipart/form-data">
                <label for="nom">Nom</label>
                <input type="text" class="nom" id="nom" name="nom" placeholder="Indiquez le nom du partenaire">
                <label for="description">Description</label>
                <textarea id="description" name="description" placeholder="Décrivez le partenaire"></textarea>
                <label for="lien">Lien</label>
                <input type="url" id="lien" placeholder="https://liendusite.fr" name="lien">
                <label for="image">Image</label>
                <input type="file" id="image" name="image">
                <div class="placement">
                    <button type="submit" name="submit" class="button">Ajouter</button>
                </div>
            </form>
        </div>
    </main>
    <?php include("footer-back.php"); ?>
</body>