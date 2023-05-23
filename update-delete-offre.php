<?php
require_once "db.php";
$page = 'bill-back';
$sql = "SELECT * FROM `partenaire`";
$statement = $pdo->prepare($sql);
$statement->execute();
$partenaires = $statement->fetchAll();
$id = $_GET['id'] ?? $_POST['id'];
if ($id) {
	$sql = "SELECT * FROM `offre` WHERE `Id_Offre` = ?";
	$statement = $pdo->prepare($sql);
	$statement->execute([$id]);
	$offres = $statement->fetch();
}
if (isset($_POST['submit'])) {

	$nom = $_POST["nom"];
	$description = $_POST["description"];
	$nbplace = $_POST["nbplace"];
	$partenaire = $_POST['partenaire'];
	$date = $_POST['date'];
	$date2 = $_POST['date2'];
	$type_image = $_FILES['image']['tmp_name'];


	if (empty($nom) || empty($description) || empty($nbplace) || empty($date) || empty($date2) || empty($_FILES['image']) || empty($partenaire)) {
?>
		<script>
			alert("Veuillez remplir tous les champs")
		</script>
		<?php
	} else {
		$query = "UPDATE `offre` SET `Nom_Offre` = ?,`Description_Offre` = ?,`Date_Debut_Offre` = ? ,`Date_Fin_Offre` = ?,`Nombre_Place_Min_Offre` = ?,`Id_Partenaire` = ? WHERE `Id_Offre` = ?";

		$query = $pdo->prepare($query);
		$query->execute([$nom, $description, $date, $date2, $nbplace, $partenaire, $id]);


		if (count($_FILES['image']['tmp_name']) > 0) {
			$delete_sql = "DELETE FROM `offre_image` WHERE `Id_Offre` = ?";
			$delete_sql = $pdo->prepare($delete_sql);
			$delete_sql->execute([$id]);

			foreach ($_FILES['image']['tmp_name'] as $key => $img) {
				if ($key === 4) {
					break;
				}

				$nom_image = $_FILES['image']['name'][$key];
				move_uploaded_file($img, "images/offres/" . $nom_image);
				$sql = "INSERT INTO `image` (`Nom_Image`) VALUES (:image)";
				$sql = $pdo->prepare($sql);
				$sql->bindParam('image', $nom_image);
				$sql->execute();
				$last_id_img = $pdo->lastInsertId();


				$sql = "INSERT INTO `offre_image` (`Id_Image`,`Id_Offre`) VALUES (:image, :offre)";
				$sql = $pdo->prepare($sql);
				$sql->bindParam('image', $last_id_img);
				$sql->bindParam('offre', $id);
				$sql->execute();
			}
			header("Location: billetterie.php");
		}
	}
}
if (isset($_POST['delete'])) {
	$id = $_GET['id'];
	//if id exist
	if (isset($id)) {
		//delete data
		$sql = "SELECT * FROM `offre` WHERE `Id_Offre` = :id";
		$part = $pdo->prepare($sql);
		$part->execute([':id' => $id]);
		$offre = $part->fetch(PDO::FETCH_OBJ);
		
		if ($offre) {
			try {
	
				$sql = "DELETE o, i FROM offre i INNER JOIN offre_image o ON o.Id_Offre = i.Id_Offre WHERE o.Id_Offre = ?";
				$statement = $pdo->prepare($sql);
				$statement->execute([(int)$id]);
				header("Location: billetterie-back.php");
			}catch(Exception $e){
			
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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="script.js" defer></script>
</head>

<body>

	<?php include('header-back.php'); ?>
	<main>
		<div class="contenant-tout">
			<h1><a href="billetterie-back.php">Retourner à la liste des offres</a></h1>
			<form class="modif" action="#" method="post" enctype="multipart/form-data">
				<label for="exampleFormControlInput100" class="form-label">Partenaire</label>
				<br>
				<select type="text" style="color: #000;" class="nom" id="exampleFormControlInput100 " name="partenaire">
					<?php
					foreach ($partenaires as $part) {
					?>
						<option <?= $offres['Id_Partenaire'] == $part['Id_Partenaire'] ? 'selected' : '' ?> value="<?= $part['Id_Partenaire'] ?>"><?= $part['Nom_Partenaire'] ?></option>
					<?php
					}
					?>
				</select>
				<label for="exampleFormControlInput1" class="form-label">Nom de l'offre</label>
				<br>
				<input type="text" class="nom" id="exampleFormControlInput1 " value="<?= $offres['Nom_Offre'] ?>" name="nom">
				<label for="exampleFormControlTextarea1" class="form-label">Description de l'offre</label> <br>
				<textarea class="description" id="exampleFormControlTextarea1" rows="3" name="description"><?= $offres['Description_Offre'] ?></textarea>
				<label for="exampleFormControlTextarea1" class="form-label">Date de début de l'offre</label> <br>
				<input type="date" name="date" value="<?= $offres['Date_Debut_Offre'] ?>">
				<label for="exampleFormControlTextarea1" class="form-label">Date de fin de l'offre</label> <br>
				<input type="date" name="date2" value="<?= $offres['Date_Fin_Offre'] ?>">
				<label for="exampleFormControlTextarea1" class="form-label">Place Min. Offre</label> <br>
				<input type="number" class="nom" name="nbplace" value="<?= $offres['Nombre_Place_Min_Offre'] ?>">
				<input type="hidden" name="id" value="<?= $id ?>">
				<label for="exampleFormControlInput1" class="form-label">Image</label> <br>
				<input multiple type="file" class="image" id="exampleFormControlInput1" name="image[]"><br>
				<button type="submit" class="button-update" name="submit">Ajouter</button>
			</form>
			<form method="POST" class="modif" action="#">
				<button name="delete" class="button-delete" type="submit">Supprimer</button>
			</form>

		</div>
	</main>
	<?php include('footer-back.php'); ?>

</body>

</html>