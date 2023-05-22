<?php 
$page = 'part-back';
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
        <script src="script.js" defer></script>
    </head>

    <body>
        <?php include("header-back.php"); ?>
        <main>
            <div class="contenant-creation">
                <h1>Ajouter un partenaire</h1>
                <form action="create.php" method="post" enctype="multipart/form-data">
                        <label for="nom" >Nom</label>
                        <input type="text" class="input" name="nom">
                        <label for="description">Description</label>
                        <textarea name="description"></textarea>
                        <label for="image">Insérez le lien d'une image</label>
                        <input type="file" class="images"name="image">
                        <label for="lien">Lien</label>
                        <input type="text" class="input" placeholder="https://votrresite.com/" name="lien">
                        <div class="placement">
                            <button type="submit" name="submit">Ajouter</button>
                        </div>
                </form>
            </div>
        </main>
        <?php include("footer-back.php"); ?>
    </body>

