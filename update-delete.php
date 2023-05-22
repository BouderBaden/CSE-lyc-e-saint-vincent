<?php 
$page = 'part-back';
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Modifier / Supprimer un partenaire</title>
		<link rel="icon" href="images/Logo_parNodevo.png">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
		<link href="update-delete.css" rel="stylesheet">
		<link href="header-back.css" rel="stylesheet">
		<link href="footer-back.css" rel="stylesheet">
		<script src="script.js" defer></script>
	</head>
	<body>

		<?php include ('header-back.php');?>
		<main>
			<div class="contenant-tout">
				<h1><a href="partenaire-back.php">Retourner à la liste des partenaires</a></h1>

				<form class="modif" action="#">
					<label for="">Nom du partenaire :</label>
					<input type="text" id="Nom_Partenaire" name="Nom_Partenaire" value="Nom du partenaire"/>
					<label for="">Description du partenaire :</label>
					<input type="text" id="Description_Partenaire" name="Description_Partenaire" value="Description du partenaire">
					<label for="">Image :</label>
					<input type="file" id="Image" class="image" name="Image" value="Image">
					<label for="">Lien du partenaire :</label>
					<input type="text" id="Lien_Partenaire" name="Lien_Partenaire" value="Lien du partenaire">

					<div class="button">
						<button class="button-update" type="submit">Mettre à jour</button>
						<button class="button-delete" type="submit">Supprimer</button>
					</div>
				</form>
			</div>
		</main>
		<?php include('footer-back.php'); ?>

	</body>
</html>