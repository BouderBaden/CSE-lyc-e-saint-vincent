<?php
$page = 'index-back';
require_once "db.php";
$sql = "SELECT * FROM `info_accueil`";
$statement = $pdo->prepare($sql);
$statement->execute();
$infos = $statement->fetch();

if (isset($_POST['submit'])) {
    $id = (int)$_POST['id'];
    $phone = (int)$_POST['phone'];
    $email = $_POST['email'];
    $adresse = $_POST['address'];
    $title = $_POST['title'];
    $message = $_POST['message'];
    if (isset($phone) && isset($email) && isset($adresse) && isset($title) && isset($message)) {
        $sql = "UPDATE info_accueil SET Num_Tel_Info_Accueil=:phone, Email_Info_Accueil=:email, Emplacement_Bureau_Info_Accueil=:adresse, Titre_Info_Accueil=:title, Texte_Info_Accueil=:message WHERE Id_Info_Accueil=:id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['phone' => $phone, 'email' => $email, 'adresse' => $adresse, 'title' => $title, 'message' => $message, 'id' => $id]);
         header("Location: backoffice.php");
       
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Back-Office</title>
    <link rel="icon" href="images/Logo_parNodevo.png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="backoffice.css" rel="stylesheet">
    <link href="header-back.css" rel="stylesheet">
    <link href="footer-back.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="script.js" defer></script>
</head>

<body>
    <?php include("header-back.php"); ?>
    <main>
        <div class="modif-accueil">
            <h1>Modifiez les informations de contact</h1>
            <form action="#" method="post">
                <input type="hidden" value="<?= $infos['Id_Info_Accueil'] ?>" name="id">
                <label for="phone">Numéro de téléphone :</label>
                <input type="tel" id="phone" name="phone" value="<?= $infos['Num_Tel_Info_Accueil'] ?>" required>

                <label for="email">Adresse e-mail :</label>
                <input type="email" id="email" name="email" value="<?= $infos['Email_Info_Accueil'] ?>" required>

                <label for="adresse">Adresse postale :</label>
                <input type="text" id="adresse" name="address" value="<?= $infos['Emplacement_Bureau_Info_Accueil'] ?>" required></input>

                <label for="title">Titre du message d'accueil :</label>
                <input type="text" id="title" name="title" value="<?= $infos['Titre_Info_Accueil'] ?>" required></input>

                <label for="message">Contenu du message d'accueil :</label>
                <textarea id="message" name="message"><?= $infos['Texte_Info_Accueil'] ?></textarea>


                <div class="placement">
                    <button name="submit" type="submit">Modifier</button>
                </div>
            </form>
        </div>
    </main>
    <?php include("footer-back.php"); ?>
</body>

</html>