<?php
$page = 'bill-back';
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Modifier / Supprimer une offre</title>
		<link rel="icon" href="images/Logo_parNodevo.png">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
		<link href="update-delete-offre.css" rel="stylesheet">
		<link href="header-back.css" rel="stylesheet">
		<link href="footer-back.css" rel="stylesheet">
		<script src="script.js" defer></script>
	</head>
	<body>

		<?php include ('header-back.php');?>
		<main>
			<div class="contenant-tout">
				<h1><a href="billetterie-back.php">Retourner à la liste des offres</a></h1>

				<form class="modif" action="#">

					<label for="">Nom de l'offre :</label>
					<input type="text" id="Nom_Partenaire" name="Nom_Partenaire" value="Nom de l'offre" required>
					<label for="">Description de l'offre :</label>
					<input type="text" id="Description_Partenaire" name="Description_Partenaire" value="Description de l'offre" required>

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
					<label for="">Image(s) :</label>
					<input type="file" id="Image" class="image" name="Image" value="Image" multiple required>

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