<?php
$page = 'cont-back';
require_once "db.php";
$sql = "SELECT * FROM `message` INNER JOIN `partenaire` ON `message`.Id_Partenaire = `partenaire`.Id_Partenaire INNER JOIN `offre` ON `offre`.Id_Offre = `message`.Id_Offre WHERE `message`.Id_offre is not null OR `message`.Id_Partenaire is not null";
$statement = $pdo->prepare($sql);
$statement->execute();
$messages = $statement->fetchAll();

$other = $sql = "SELECT * FROM `message` WHERE `message`.Id_offre is null OR `message`.Id_Partenaire is null";
$other = $pdo->prepare($other);
$other->execute();
$others = $other->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Messagerie</title>
    <link rel="icon" href="images/Logo_parNodevo.png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="contact-back.css" rel="stylesheet">
    <link href="header-back.css" rel="stylesheet">
    <link href="footer-back.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="script.js" defer></script>
</head>

<body>
    <?php include("header-back.php"); ?>
    <main>
        <div class="all">
            <h1>Messages des offres et partenaires : </h1>
            <table>
                <thead>
                    <tr>
                        <th>Nom et prénom</th>
                        <th>Email</th>
                        <th>Raison du message</th>
                        <th>Contenu du message</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($messages as $msg) {
                    ?>
                        <tr class="tr-body">
                            <td>
                                <div class="centrer"><?= $msg['Nom_Message']?> <?= $msg['Prenom_Message']?></div>
                            </td>
                            <td>
                                <div class="centrer"><a href="mailto:<?= $msg['Email_Message']?>"><?= $msg['Email_Message']?></div>
                            </td>
                            <td>
                                <div class="centrer">offre : <?= $msg['Nom_Offre'] ?? ""?> <br> partenaire : <?= $msg['Nom_Partenaire']?? "" ?></div>
                            </td>
                            <td class="description">
                                <div class="centrer">
                                <?= $msg['Contenu_Message']?>
                                </div>
                            </td>

                        </tr>
                    <?php }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="all">
            <h1>Messages  : </h1>
            <table>
                <thead>
                    <tr>
                        <th>Nom et prénom</th>
                        <th>Email</th>
                        <th>Contenu du message</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($others as $msg) {
                    ?>
                        <tr class="tr-body">
                            <td>
                                <div class="centrer"><?= $msg['Nom_Message']?> <?= $msg['Prenom_Message']?></div>
                            </td>
                            <td>
                                <div class="centrer"><a href="mailto:<?= $msg['Email_Message']?>"><?= $msg['Email_Message']?></div>
                            </td>
                            <td class="description">
                                <div class="centrer">
                                <?= $msg['Contenu_Message']?>
                                </div>
                            </td>

                        </tr>
                    <?php }
                    ?>
                </tbody>
            </table>

        </div>
    </main>
    <?php include("footer-back.php"); ?>
</body>