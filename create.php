<?php
	include 'db.php';
	$action = $_GET["action"];
	if ($action == "DELETE") {
		$id = $_GET["Id_Partenaire"];
	} else {
		$id = $_GET["Id_Partenaire"];
		$nom = $_GET["Nom_Partenaire"];
		$description = $_GET["Description_Partenaire"];
		$lien = $_GET["Lien_Partenaire"];
		$image = $_GET["Id_Image"];
		
	}
	

    if ($action == "CREATE") {
        createPartenaire($nom, $description, $lien, $image);
        header('Location: partenaire-back.php?iscreatevalid=oui');
    }
	
    if ($action == "UPDATE") {
        updatePartenaire($id, $nom, $description, $lien, $image);
        header('Location: partenaire-back.php?ismodifvalid=oui');
    }

	if ($action == "DELETE") {
		deletePartenaire($id);
        header('Location: partenaire-back.php?isdeletevalid=oui');
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

