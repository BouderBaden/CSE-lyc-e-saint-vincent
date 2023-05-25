<?php
$page = 'cont';
require_once 'db.php';

$sql = "SELECT * FROM `partenaire`";
$statement = $pdo->prepare($sql);
$statement->execute();
$partenaires = $statement->fetchAll();

$sql = "SELECT * FROM `offre`";
$statement = $pdo->prepare($sql);
$statement->execute();
$offres = $statement->fetchAll();

if (isset($_POST['submit'])) {

    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $part = $_POST["part"] != 'aucun' ? (int)$_POST["part"] : null;
    $offre = $_POST["offre"] != 'aucun' ? (int)$_POST["offre"] : null;

    if (empty($nom) || empty($prenom) || empty($email) || empty($message)) {
?>
        <script>
            alert("Veuillez remplir tous les champs");
        </script>
<?php
    } else {
        $sql = "INSERT INTO message (Nom_Message, Prenom_Message, Email_Message, Contenu_Message, Id_Offre, Id_Partenaire)
        VALUES (:nom, :prenom, :email, :message, :offre, :part)";
        $sql = $pdo->prepare($sql);
        $sql->bindParam('nom', $nom);
        $sql->bindParam('prenom', $prenom);
        $sql->bindParam('email', $email);
        $sql->bindParam('message', $message);
        $sql->bindParam('offre', $offre);
        $sql->bindParam('part', $part);
        $sql->execute();

        // Redirection avec le paramètre "success"
        header("Location: contact.php?success=true");
        exit(); // Terminer l'exécution du script

    }
}


?>

<?php
if (isset($_GET['success']) && $_GET['success'] === 'true') {
?>
    <script>
        alert("Votre message a été envoyé avec succès !");
    </script>
<?php
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Contactez-nous</title>
    <link href="contact.css" rel="stylesheet">
    <link rel="icon" href="images/Logo_parNodevo.png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="header.css" rel="stylesheet">
    <link href="banderole.css" rel="stylesheet">
    <link href="footer.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://challenges.cloudflare.com/turnstile/v0/api.js?onload=onloadTurnstileCallback" defer></script>
</head>

<body>
    <?php include('header.php'); ?>



    <main>
        <div class="all">
            <?php include('banderole.php'); ?>

            <section class="contact">
                <div class="contenant-contact">
                    <h1>Contactez-nous !</h1>
                    <div class="contenant-formulaire">
                        <form action="#" method="post">
                            <input type="text" name="nom" placeholder="Nom" required>

                            <input type="text" name="prenom" placeholder="Prénom" required>

                            <input type="email" name="email" placeholder="E-mail" required>

                            <label class="offr" id="offre">Choisissez l'offre qui concerne votre message :</label>
                            <select name="offre" id="offre" required>
                                <option value="offre" disabled>Une offre</option>
                                <?php
                                if (!empty($offres)) {
                                    foreach ($offres as $offre) {
                                ?>
                                        <option value="<?= $offre['Id_Offre'] ?>"><?= $offre['Nom_Offre'] ?></option>
                                <?php
                                    }
                                }

                                ?>
                                <option value="aucun">Aucune des propositions</option>
                            </select>
                            <label class="part" id="part">Choisissez le partenaire qui concerne votre message :</label>
                            <select name="part" id="part" required>
                                <option value="partenaire" disabled>Un partenaire</option>
                                <?php
                                if (!empty($partenaires)) {
                                    foreach ($partenaires as $part) {
                                ?>
                                        <option value="<?= $part['Id_Partenaire'] ?>"><?= $part['Nom_Partenaire'] ?></option>
                                <?php
                                    }
                                }

                                ?>
                                <option value="aucun">Aucune des propositions</option>
                            </select>

                            <textarea name="message" placeholder="Entrez votre message." required></textarea>

                            <div class="cf-turnstile" id="capchat" data-sitekey="0x4AAAAAAAFLZz5nvcNXWaQP" data-callback="javascriptCallback"></div>

                            <button name="submit" type="submit">Envoyer</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <?php include("footer.php"); ?>
    <script src="script.js" defer></script>
</body>

</html>