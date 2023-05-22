<?php
$page = 'cont-back';
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
        <script src="script.js" defer></script>
    </head>

    <body>
        <?php include("header-back.php"); ?>
        <main>
            <div class="all">
                <h1>Messages concernant les offres : </h1>
                <table>
                    <thead>
                    <tr>
                        <th>Nom et prénom</th>
                        <th>Email</th>
                        <th>Raison du message</th>
                        <th>Contenu du message</th>
                    </tr>
                    </thead>
                    <tr class="tr-body">
                        <td>
                            <div class="centrer">Franck Dupont</div>
                        </td>
                        <td>
                            <div class="centrer"><a href="mailto:Frank.Dupont@gmail.com">Frank.Dupont@gmail.com</div>
                        </td>
                        <td>
                            <div class="centrer">Ce message concerne une offre</div>
                        </td>   
                        <td class="description">
                            <div class="centrer">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam soluta porro unde cumque facere nam, exercitationem obcaecati commodi rerum modi eveniet quod beatae rem ipsa maxime nulla voluptatibus vel excepturi.
                            </div>
                        </td>

                    </tr>
                </table>

                <h2>Messages concernant les partenaires : </h2>
                <table>
                    <thead>
                    <tr>
                        <th>Nom et prénom</th>
                        <th>Email</th>
                        <th>Raison du message</th>
                        <th>Contenu du message</th>
                    </tr>
                    </thead>
                    <tr class="tr-body">
                        <td>
                            <div class="centrer">Franck Dupont</div>
                        </td>
                        <td>
                            <div class="centrer"><a href="mailto:Frank.Dupont@gmail.com">Frank.Dupont@gmail.com</div>
                        </td>
                        <td>
                            <div class="centrer">Ce message concerne un partenaire</div>
                        </td>   
                        <td class="description">
                            <div class="centrer">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam soluta porro unde cumque facere nam, exercitationem obcaecati commodi rerum modi eveniet quod beatae rem ipsa maxime nulla voluptatibus vel excepturi.
                            </div>
                        </td>

                    </tr>
                    <tr class="tr-body">
                        <td>
                            <div class="centrer">Franck Dupont</div>
                        </td>
                        <td>
                            <div class="centrer"><a href="mailto:Frank.Dupont@gmail.com">Frank.Dupont@gmail.com</a></div>
                        </td>
                        <td>
                            <div class="centrer">Ce message concerne un partenaire</div>
                        </td>   
                        <td class="description">
                            <div class="centrer">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam soluta porro unde cumque facere nam, exercitationem obcaecati commodi rerum modi eveniet quod beatae rem ipsa maxime nulla voluptatibus vel excepturi.
                            </div>
                        </td>

                    </tr>
                </table>

                <h3>Autres Messages : </h3>
                <table>
                    <thead>
                    <tr>
                        <th>Nom et prénom</th>
                        <th>Email</th>
                        <th>Raison du message</th>
                        <th>Contenu du message</th>
                    </tr>
                    </thead>
                    <tr class="tr-body">
                        <td>
                            <div class="centrer">Franck Dupont</div>
                        </td>
                        <td>
                            <div class="centrer"><a href="mailto:Frank.Dupont@gmail.com">Frank.Dupont@gmail.com</div>
                        </td>
                        <td>
                            <div class="centrer">Ce message concerne aucune des propositions</div>
                        </td>   
                        <td class="description">
                            <div class="centrer">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam soluta porro unde cumque facere nam, exercitationem obcaecati commodi rerum modi eveniet quod beatae rem ipsa maxime nulla voluptatibus vel excepturi.
                            </div>
                        </td>

                    </tr>
                </table>
            </div>
        </main>
        <?php include("footer-back.php"); ?>
    </body>