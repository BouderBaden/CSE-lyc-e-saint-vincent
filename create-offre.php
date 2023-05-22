<?php
$page = 'bill-back';
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Ajouter une offre</title>
        <link rel="icon" href="images/Logo_parNodevo.png">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <link href="create-offre.css" rel="stylesheet">
        <link href="header-back.css" rel="stylesheet">
        <link href="footer-back.css" rel="stylesheet">
        <script src="script.js" defer></script>
    </head>

    <body>
        <?php include("header-back.php"); ?>
        <main>
            <div class="contenant-creation">
                <h1>Ajouter une offre</h1>
                <form action="#">
                        <label for="nom" >Nom de l'offre</label>
                        <input type="text" class="input" name="nom" required>
                        <label for="description">Description de l'offre</label>
                        <textarea name="description" required></textarea>
                        <label for="date-deb">Date du début de l'offre</label>
                        <input type="date" class="input" name="date-deb" required>
                        <label for="date-deb">Date de fin de l'offre</label>
                        <input type="date" class="input" name="date-deb" required>
                        <select name="choix" id="choix" required>
                            <option value="" hidden>Selectionnez le nombre de place pour cette offre</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                            <option value="">5</option>
                            <option value="">6</option>
                            <option value="">7</option>
                            <option value="">8</option>
                            <option value="">9</option>
                            <option value="">10</option>
                        </select>

                        <label for="image">Insérez le lien d'une (ou plusieurs) image(s)</label>
                        <input type="file" class="images"name="image" multiple required>
                        <div class="placement">
                            <button type="submit" name="submit">Ajouter</button>
                        </div>
                </form>
            </div>
        </main>
        <?php include("footer-back.php"); ?>
    </body>
