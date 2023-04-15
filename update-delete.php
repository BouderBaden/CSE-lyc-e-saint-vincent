<?php
	include 'db.php';
	
	$id = $_GET["id"];
	if ($id == null) {
		$user = getNewPartenaire();
		$action = "CREATE";
		$libelle = "Créer";
	} else {
		$user = readPartenaire($id);
		$action = "UPDATE";
		$libelle = "Mettre à jour";
	}
?>



<!DOCTYPE html>
<html>
	<header>
		<meta charset="UTF-8">
		<title>Page partenaire</title>
		<link rel="icon" href="images/Logo_parNodevo.png">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
		<link href="update-delete.css" rel="stylesheet">
		<link href="header.css" rel="stylesheet">
		<link href="footer.css" rel="stylesheet">
		<script src="script.js" defer></script>
	</header>
	<body>

		<?php include ('header.php');?>
		<main>
			<div class="contenant-tout">
				<h1><a href="partenaire-back.php">Retourner à la liste des partenaires</a></h1>

				<form class="modif" action="create.php" method="get">
					<input type="hidden" name="Id_Partenaire" value="<?php echo $user['Id_Partenaire'];  ?>"/>
					<input type="hidden" name="action" value="<?php echo $action;  ?>"/>
					<label for="name">Nom du partenaire :</label>
					<input type="text" id="Nom_Partenaire" name="Nom_Partenaire" value="<?php echo $user['Nom_Partenaire'];  ?>"/>
					<label for="Description_Partenaire">Description du partenaire :</label>
					<input type="text" id="Description_Partenaire" name="Description_Partenaire" value="<?php echo $user['Description_Partenaire'];  ?>">
					<label for="Lien_Partenaire">Lien du partenaire :</label>
					<input type="text" id="Lien_Partenaire" name="Lien_Partenaire" value="<?php echo $user['Lien_Partenaire'];  ?>">
					<label for="Id_Image">Id de l'image :</label>
					<input id="Id_Image" name="Id_Image" value="<?php echo $user['Id_Image'];  ?>"></textarea>
					<div class="button">
						<button class="button-update" type="submit"><?php echo $libelle;  ?></button>
					</div>
				</form>

				<?php if ($action!="CREATE") { ?>
				<form action="create.php" method="get">
					<input type="hidden" name="action" value="DELETE"/>
					<input type="hidden" name="Id_Partenaire" value="<?php echo $user['Id_Partenaire'];  ?>"/>
					<p>
					<div>
						<button class="button-delete" type="submit">Supprimer</button>
					</div>
					</p>
				</form>
			</div>
			<?php } ?>
		</main>
		<?php include('footer.php'); ?>

	</body>
</html>