<?php
$page = 'register';
include "db.php";
//register
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    //crypt password
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
        $sql = "INSERT INTO `utilisateur` (`Email_Utilisateur`, `Password_Utilisateur`) VALUES (:email, :password)";
        $statement = $pdo->prepare($sql);
        $statement->bindParam('email', $email);
        $statement->bindParam('password', $password);
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
    <link href="header.css" rel="stylesheet">
    <link href="footer.css" rel="stylesheet">
    <script src="script.js" defer></script>
</head>

<body>
    <?php include("header.php"); ?>
    <main>
        <div class="inscription">
            <h1>Inscription</h1>
            <form action="register.php" method="post">
                <label for="name">Nom</label>
                <input type="text" name="name" placeholder="Nom de l'utilisateur" required>
                <label for="first-name">Prénom</label>
                <input for="first-name" name="first-name" placeholder="Prénom de l'utilisateur" required>

                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Email" required>
                <label for="password">Mot de passe</label>
                <input type="password" name="password" placeholder="Mot de passe" required>
                <select name="choix" id="choix" required>
                    <option value="" hidden>Choisissez le rôle de l'utilisateur</option>
                    <option value="offre">Super-Administrateur</option>
                    <option value="partenaire">Administrateur</option>
                </select>
                <div class="placement">
                    <button type="submit" value="s'inscrire">S'inscrire</button>
                </div>
            </form>
        </div>
    </main>
    <?php include("footer.php"); ?>
</body>

</html>