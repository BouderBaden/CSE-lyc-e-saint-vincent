<?php
$page = 'part-back';
require 'db.php';


if (isset($_GET['id']) || isset($_POST['id'])) {
	$id = $_GET['id'];

	$query = "SELECT * FROM partenaire WHERE Id_Partenaire = :id LIMIT 1";

	$stmt = $pdo->prepare($query);
	$stmt->bindParam("id", $id);
	$stmt->execute();

	$data = $stmt->fetch(PDO::FETCH_ASSOC);



	if (isset($_POST['submit'])) {
		$nom = $_POST['nom'];
		$description = $_POST['description'];
		$lien = $_POST['lien'];
		$nom_Image = !empty($_FILES['image']['name']) ?? null;

		if (!empty($nom_Image) && !empty($nom)  && !empty($lien)  && !empty($description)) {
			$sql = "INSERT INTO `image` (`Nom_Image`) VALUES (:image)";
			$sql = $pdo->prepare($sql);
			$sql->bindParam('image', $nom_Image);
			$sql->execute();
			$last_id = $pdo->lastInsertId();
			try {
				move_uploaded_file($_FILES['image']['tmp_name'], 'images/partenaires/' . $nom_Image);
				$query = "UPDATE partenaire SET Nom_Partenaire =:nom, Description_Partenaire =:description, Lien_Partenaire =:lien, Id_Image =:image WHERE Id_Partenaire =:id";
				$stmt = $pdo->prepare($query);
				$stmt->bindParam(':nom', $nom);
				$stmt->bindParam(':description', $description);
				$stmt->bindParam(':lien', $nom);
				$stmt->bindParam(':image', $last_id);
				$stmt->bindParam(':id', $id);
				$query_execute = $stmt->execute();
				header("Location: partenaire-back.php");
			} catch (PDOException $e) {
				echo $e->getMessage();
			}
		} else { ?>
			<script>
				alert("Champs vide")
			</script>
			<?php }
	}
	if (isset($_POST['delete'])) {
		$id = $_GET['id'];
		//if id exist
		if (isset($id)) {
			//delete data
			$sql = "SELECT * FROM `partenaire` WHERE `Id_Partenaire` = :id";
			$part = $pdo->prepare($sql);
			$part->execute([':id' => $id]);
			$partenaire = $part->fetch(PDO::FETCH_OBJ);
			if ($partenaire) {
				try {
					$sql2 = "DELETE FROM `offre_image` WHERE `Id_Offre` = ?";
            		$statement = $pdo->prepare($sql2);
           			$statement->execute([(int)$id]);

					$sql = "DELETE FROM offre WHERE Id_Offre = ?";
					$statement = $pdo->prepare($sql2);
					$statement->execute([(int)$id]);

					$sql = "DELETE FROM `partenaire` WHERE `Id_Partenaire` = :id";
					$statement = $pdo->prepare($sql);
					$statement->bindParam('id', $id);
					$statement->execute();
					header("Location: partenaire-back.php");
				} catch (Exception $e) {
					echo $e;
				}
			} else {
			?>
				<script>
					alert("Partenaire introuvable")
				</script>
<?php
			}
		}
	}
}
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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="script.js" defer></script>
</head>

<body>

	<?php include('header-back.php'); ?>
	<main>
		<div class="contenant-tout">
			<h1><a href="partenaire-back.php">Retourner à la liste des partenaires</a></h1>

			<form method="POST" class="modif" action="#" enctype="multipart/form-data">
				<input type="hidden" value="<?= $_GET['id'] ?? null ?>" name="id">

					<label for="nom">Nom</label>
					<input type="text" id="nom" value="<?= $data['Nom_Partenaire']; ?>" name="nom">
					<label for="description">Description</label>
					<textarea id="description" name="description"><?php echo $data['Description_Partenaire']; ?></textarea>
					<label for="lien">Lien</label>
					<input type="url" value="<?= $data['Lien_Partenaire']; ?>" id="lien" placeholder="https://" name="lien">
					<label for="image">Image</label>
					<input type="file" value="<?php echo $nom_Image['Nom_Image']; ?>" id="image" name="image">
				<div class="button">
					<button name="submit" class="button-update" type="submit">Mettre à jour</button>
				</div>
			</form>
			<form method="POST" class="modiff" action="#">
				<div class="button">
					<button name="delete" class="button-delete" type="submit">Supprimer</button>
				</div>
			</form>
		</div>
	</main>
	<?php include('footer-back.php'); ?>

</body>

</html>