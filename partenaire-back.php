<?php 
$page = 'part-back';
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Page partenaire</title>
        <link rel="icon" href="images/Logo_parNodevo.png">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <link href="partenaire-back.css" rel="stylesheet">
        <link href="header-back.css" rel="stylesheet">
        <link href="footer-back.css" rel="stylesheet">
        <script src="script.js" defer></script>
    </head>

    <body>
        
        <?php include("header-back.php");?>
        <main>
            <div class="contenant-tableau">
                <h1>Liste des partenaires</h1>
                <div class="contenant-ajout"><a href="create.php">+ Ajouter un partenaire</a></div>
                <table>
                    <thead>
                    <tr>
                        <th>Nom du partenaire</th>
                        <th>Description du partenaire</th>
                        <th>Lien du partenaire</th>
                        <th>Image du Partenaire</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                        <tr class="tr-body">
                            <td>
                                <div class="centrer">fizap</div>
                            </td>
                            <td class="description">
                                <div class="centrer">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae, quidem corrupti! Vitae, soluta ex aliquam voluptatem, debitis reiciendis repudiandae tempora necessitatibus iusto dolores ullam impedit itaque odio! Eaque, mollitia. Placeat.</div>
                            </td>
                            <td>
                                <div class="centrer"><a href="#" class="lien-partenaire">Découvrir</a></div>
                            </td>   
                            <td>
                                <div class="centrer"><img src="teste.jpg"></div>
                            </td>
                            <td>
                                <div class="centrer">
                                    <div class="contenant-boutons">
                                        <a href="update-delete.php">Modifier/Supprimer</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="tr-body">
                            <td>
                                <div class="centrer">fizap</div>
                            </td>
                            <td class="description">
                                <div class="centrer">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam impedit ipsum pariatur quas perspiciatis architecto minima nesciunt corrupti iste, amet possimus enim fuga dolorem, non assumenda laboriosam ea quo ducimus.</div>
                            </td>
                            <td>
                                <div class="centrer"><a href="#" class="lien-partenaire">Découvrir</a></div>
                            </td>   
                            <td>
                                <div class="centrer"><img src="images/partenaires/leonidas.png"></div>
                            </td>
                            <td>
                                <div class="centrer">
                                    <div class="contenant-boutons">
                                        <a href="update-delete.php">Modifier/Supprimer</a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                </table>
            </div>
        </main>
        <?php include("footer-back.php"); ?>
    </body>
</html>
