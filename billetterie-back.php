<?php
$page = 'bill-back';
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Page billetterie</title>
        <link rel="icon" href="images/Logo_parNodevo.png">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <link href="billetterie-back.css" rel="stylesheet">
        <link href="header-back.css" rel="stylesheet">
        <link href="footer-back.css" rel="stylesheet">
        <script src="script.js" defer></script>
    </head>

    <body>
        <?php include("header-back.php"); ?>
        <main>
            <div class="contenant-tableau">
                <h1>Liste des offres</h1>
                <div class="contenant-ajout"><a href="create-offre.php">+ Ajouter une offre</a></div>
                <table>
                    <thead>
                    <tr>
                        <th>Nom de l'offre</th>
                        <th>Description de l'offre</th>
                        <th>Date du début de l'offre</th>
                        <th>Date de la fin de l'offre</th>
                        <th>Nombre de place minimum de l'offre</th>
                        <th>Image(s) de l'offre</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                        <tr class="tr-body">
                            <td>
                                <div class="centrer">Offre</div>
                            </td>
                            <td>
                                <div class="centrer">Description offre</div>
                            </td>
                            <td>
                                <div class="centrer">12/12/12</div>
                            </td>   
                            <td>
                                <div class="centrer">01/01/13</div>
                            </td>
                            <td>
                                <div class="centrer">2</div>
                            </td>
                            <td>
                                <div class="centrer"><img src="images/test.jpg"></div>
                                <div class="centrer"><img src="franprix.jpg"></div>
                                <div class="centrer"><img src="teste.jpg"></div>
                                <div class="centrer"><img src="images/partenaires/leonidas.png"></div>
                            </td>
                            <td>
                                <div class="centrer">
                                    <div class="contenant-boutons">
                                        <a href="update-delete-offre.php">Modifier/Supprimer</a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr class="tr-body">
                            <td>
                                <div class="centrer">Offre</div>
                            </td>
                            <td>
                                <div class="centrer">Description offre</div>
                            </td>
                            <td>
                                <div class="centrer">12/12/12</div>
                            </td>   
                            <td>
                                <div class="centrer">01/01/13</div>
                            </td>
                            <td>
                                <div class="centrer">2</div>
                            </td>
                            <td>
                                <div class="centrer"><img src="images/partenaires/leonidas.png"></div>
                            </td>
                            <td>
                                <div class="centrer">
                                    <div class="contenant-boutons">
                                        <a href="update-delete-offre.php">Modifier/Supprimer</a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr class="tr-body">
                            <td>
                                <div class="centrer">Offre</div>
                            </td>
                            <td>
                                <div class="centrer">Description offre</div>
                            </td>
                            <td>
                                <div class="centrer">12/12/12</div>
                            </td>   
                            <td>
                                <div class="centrer">01/01/13</div>
                            </td>
                            <td>
                                <div class="centrer">2</div>
                            </td>
                            <td>
                                <div class="centrer"><img src="images/test.jpg"></div>
                            </td>
                            <td>
                                <div class="centrer">
                                    <div class="contenant-boutons">
                                        <a href="update-delete-offre.php">Modifier/Supprimer</a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr class="tr-body">
                            <td>
                                <div class="centrer">Offre</div>
                            </td>
                            <td>
                                <div class="centrer">Description offre</div>
                            </td>
                            <td>
                                <div class="centrer">12/12/12</div>
                            </td>   
                            <td>
                                <div class="centrer">01/01/13</div>
                            </td>
                            <td>
                                <div class="centrer">2</div>
                            </td>
                            <td>
                                <div class="centrer"><img src="images/partenaires/leonidas.png"></div>
                            </td>
                            <td>
                                <div class="centrer">
                                    <div class="contenant-boutons">
                                        <a href="update-delete-offre.php">Modifier/Supprimer</a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr class="tr-body">
                            <td>
                                <div class="centrer">Offre</div>
                            </td>
                            <td>
                                <div class="centrer">description offre</div>
                            </td>
                            <td>
                                <div class="centrer">12/12/12</div>
                            </td>   
                            <td>
                                <div class="centrer">01/01/13</div>
                            </td>
                            <td>
                                <div class="centrer">2</div>
                            </td>
                            <td>
                                <div class="centrer"><img src="images/partenaires/leonidas.png"></div>
                            </td>
                            <td>
                                <div class="centrer">
                                    <div class="contenant-boutons">
                                        <a href="update-delete-offre.php">Modifier/Supprimer</a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                </table>
            </div>
        </main>
        <?php include("footer-back.php"); ?>
    </body>