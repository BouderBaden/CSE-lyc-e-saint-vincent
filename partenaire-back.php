

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Page partenaire</title>
        <link rel="icon" href="images/Logo_parNodevo.png">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <link href="partenaire-back.css" rel="stylesheet">
        <link href="header.css" rel="stylesheet">
        <link href="footer.css" rel="stylesheet">
        <script src="script.js" defer></script>
    </head>

    <body>
        
        <?php
        include("db.php");
        include("header.php");
        ?>
        <main>
            <div class="contenant-tableau">
                <h1>Liste des partenaires</h1>
            <?php
            $rows = getAllPartenaire();
            afficherTableau($rows, getHeaderTable());
            ?>
            </div>
        </main>
        <?php include("footer.php"); ?>
    </body>
</html>

<?php

if (isset($_GET['ismodifvalid']) && $_GET['ismodifvalid'] == "oui") {
    // Ajouter le code JavaScript pour afficher une alerte de confirmation
    ?>
    <script>alert('La modification a été effectuée avec succès.');</script>
    <?php
}

if (isset($_GET['isdeletevalid']) && $_GET['isdeletevalid'] == "oui") {
    // Ajouter le code JavaScript pour afficher une alerte de confirmation
    ?>
    <script>alert('La suppression a été effectuée avec succès.');</script>
    <?php
}

if (isset($_GET['iscreatevalid']) && $_GET['iscreatevalid'] == "oui") {
    // Ajouter le code JavaScript pour afficher une alerte de confirmation
    ?>
    <script>alert('La création a été effectuée avec succès.');</script>
    <?php
}

?>