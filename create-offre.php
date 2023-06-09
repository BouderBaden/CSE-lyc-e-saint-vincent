<?php
$page = 'bill-back';
require_once "db.php";
$sql = "SELECT * FROM `partenaire`";
$statement = $pdo->prepare($sql);
$statement->execute();
$partenaires = $statement->fetchAll();

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
        $query = "INSERT INTO `offre` (`Nom_Offre`,`Description_Offre`,`Date_Debut_Offre`,`Date_Fin_Offre`,`Nombre_Place_Min_Offre`,`Id_Partenaire`) VALUES (?,?,?,?,?,?)";

        $query = $pdo->prepare($query);
        $query->execute([$nom, $description, $date, $date2, $nbplace, $partenaire]);
        $id_offre = $pdo->lastInsertId();

        if (count($_FILES['image']['tmp_name']) > 0) {
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
                $sql->bindParam('offre', $id_offre);
                $sql->execute();
            }
            header("Location: billetterie-back.php");
        }
    }
}
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="script.js" defer></script>
</head>

<body>
    <?php include("header-back.php"); ?>
    <main>
        <div class="contenant-creation">
            <h1>Ajouter une offre</h1>
            <form action="#" method="post" enctype="multipart/form-data">
                <label for="exampleFormControlInput100" class="form-label">Partenaire</label>
                <br>
                <select type="text" style="color: #000;" class="nom" id="exampleFormControlInput100 " name="partenaire">
                    <?php
                    foreach ($partenaires as $part) {
                        echo '<option value="' . $part['Id_Partenaire'] . '">' . $part['Nom_Partenaire'] . '</option>';
                    }
                    ?>
                </select>

                <label for="nom" class="form-label">Nom de l'offre</label>
                <input type="text" class="nom" id="nom" name="nom" placeholder="Indiquez le nom de l'offre">
                <label for="description" class="form-label">Description de l'offre</label>
                <textarea class="description" id="description" rows="3" name="description" placeholder="Décrivez votre offre"></textarea>
                <label for="datedebut" class="form-label">Date de début de l'offre</label>
                <input type="date" id="datedebut" name="date">
                <label for="datefin" class="form-label">Date de fin de l'offre</label>
                <input type="date" id="datefin" name="date2">
                <label for="place" class="form-label">Place Min. Offre</label>
                <input type="number" id="place" class="nom" name="nbplace" placeholder="Indiquez le nombre de place minimale">
                <label for="image" class="form-label">Image</label>
                <input multiple type="file" class="image" id="image" name="image[]">
                <div class="placement">
                    <button type="submit" class="button" name="submit">Ajouter</button>
                </div>
            </form>
        </div>
    </main>
    <?php include("footer-back.php"); ?>
</body>