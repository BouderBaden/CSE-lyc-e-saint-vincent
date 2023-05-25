<?php
$page = 'register';
include "db.php";
//register
if (isset($_POST['email']) && isset($_POST['password'])&& isset($_POST['prenom'])&& isset($_POST['nom'])&& isset($_POST['droit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    //crypt password
    $droit = $_POST['droit'];
    $password = password_hash($password, PASSWORD_BCRYPT);
    //check if email exist
    $sql = "SELECT * FROM `utilisateur` WHERE `Email_Utilisateur` = :email";
    $statement = $pdo->prepare($sql);
    $statement->bindParam('email', $email);
    $statement->execute();
    $user = $statement->fetch(PDO::FETCH_OBJ);
    if ($user) {
?>
        <script>
            alert("Email déjà utilisé")
        </script>
<?php
    } else {
        //insert data
        $sql = "INSERT INTO `utilisateur` (`Nom_Utilisateur`, `Prenom_Utilisateur`, `Email_Utilisateur`, `Password_Utilisateur`, `Id_Droit`) VALUES (:nom, :prenom, :email, :password, :droit)";
        $statement = $pdo->prepare($sql);
        $statement->bindParam('nom', $nom);
        $statement->bindParam('prenom', $prenom);
        $statement->bindParam('email', $email);
        $statement->bindParam('password', $password);
        $statement->bindParam('droit', $droit);
        $statement->execute();
        header("Location: backoffice.php");
    }
}


?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link rel="icon" href="images/Logo_parNodevo.png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="register.css" rel="stylesheet">
    <link href="header-back.css" rel="stylesheet">
    <link href="footer-back.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="script.js" defer></script>
</head>

<body>
    <?php include("header-back.php"); ?>
    <main>
        <div class="inscription">
            <h1>Inscription</h1>
            <form action="register.php" method="post">
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" placeholder="Nom de l'utilisateur" required>
                <label for="prenom">Prénom</label>
                <input for="first-name" name="prenom" id="prenom" placeholder="Prénom de l'utilisateur" required>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Email de l'utilisateur" required>
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password" placeholder="Mot de passe de l'utilisateur" required>
                <label for="choix">Sélectionnez un rôle pour l'utilisateur</label>
                <select name="droit" id="choix" required>
                    <option value="2">Super-Administrateur</option>
                    <option selected value="1">Administrateur</option>
                </select>
                <div class="placement">
                    <button type="submit" value="s'inscrire">S'inscrire</button>
                </div>
            </form>
        </div>
    </main>
    <?php include("footer-back.php"); ?>
</body>

</html>