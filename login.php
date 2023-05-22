<?php
$page = 'login';
include "db.php";
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password_post = $_POST['password'];
    //crypt password
    $password = password_hash($password_post, PASSWORD_BCRYPT);
    //check if email exist
    $sql = "SELECT * FROM `utilisateur` WHERE `Email_Utilisateur` = :email";
    $statement = $pdo->prepare($sql);
    $statement->bindParam('email', $email);
    $statement->execute();
    $user = $statement->fetch(PDO::FETCH_OBJ);
    if (!$user) {
?>
        <script>
            alert("existe pas")
        </script>
        <?php
    } else {
        //select data and verify password bcrypt select Email_Utilisateur Password_Utilisateur
        $sql = "SELECT * FROM `utilisateur` WHERE `Email_Utilisateur` = :email";
        $statement = $pdo->prepare($sql);
        $statement->bindParam('email', $email);
        $statement->execute();
        $user = $statement->fetch(PDO::FETCH_OBJ);
        if ($user) {
            if (password_verify($password_post, $user->Password_Utilisateur)) {
                //start session
                session_start();
                $_SESSION['user'] = $user;
                header("Location: backoffice.php");
            } else {
        ?>
                <script>
                    alert("Mot de passe incorrect")
                </script>
            <?php
            }
        } else {
            ?>
            <script>
                alert("Utilisateur introuvable")
            </script>
<?php
        }
    }
}
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link rel="icon" href="images/Logo_parNodevo.png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="login.css" rel="stylesheet">
    <link href="header.css" rel="stylesheet">
    <link href="footer.css" rel="stylesheet">
    <script src="script.js" defer></script>
</head>

<body>
    <?php include("header.php"); ?>
    <main>
        <div class="connexion">
            <h1>Connexion</h1>
            <form action="login.php" method="POST">
                <label for="email">Email</label>
                <input type="email" name="email" id="mail">
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="mdp">
                <div class="placement">
                    <button type="submit" name="submit">Se connecter</button>
                </div>
            </form>
        </div>
    </main>
    <?php include("footer.php"); ?>
</body>

</html>