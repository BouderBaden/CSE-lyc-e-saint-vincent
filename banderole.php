<?php
require_once "db.php";
$sql = "SELECT * FROM `info_accueil`";
$statement = $pdo->prepare($sql);
$statement->execute();
$infos = $statement->fetch();



$sql = "SELECT * FROM `partenaire` INNER JOIN `image` ON `partenaire`.`Id_Image` = `image`.`Id_Image` ORDER BY RAND() LIMIT 3";
$statement = $pdo->prepare($sql);
$statement->execute();
$partenaires = $statement->fetchAll();

?>


<img src="images/fleche-banderole.png" class="fleche-banderole" alt="">
<section class="banderole">
    <div class="contenant-banderole">
        <div class="accueil">
            <img class="maison" src="images/maison.png" alt="">
            <img class="fleche" src="images/fleche.png" alt="">
            <a class="lien-banderole" href="index.php">Accueil</a>
        </div>
        <div class="acces-rapide">
            <h1>Accès rapide</h1>
            <ul class="contenant-liste-acces">
                <li class="liste-acces"><img src="images/fleche.png" class="fleche-acces" alt=""><a class="lien-acces" href="billetterie.php">Offres</a> / <a class="lien-acces" href="billetterie.php">Billetterie</a></li>
                <li class="liste-acces"><img src="images/fleche.png" class="fleche-acces" alt=""><a class="lien-acces" href="contact.php">Nous contacter</a></li>
            </ul>
        </div>
        <div class="infos">
            <h2>Informations de contact</h2>
            <ul class="contenant-liste-infos">

                <li class="liste-infos"><img src="images/fleche.png" class="fleche-acces" alt="">Par téléphone : <a class="num" href="tel:+33<?= $infos['Num_Tel_Info_Accueil'] ?>">+33<?= $infos['Num_Tel_Info_Accueil'] ?></a></li>
                <li class="liste-infos"><img src="images/fleche.png" class="fleche-acces" alt="">Par email : <a class="num" href="mailto:<?= $infos['Email_Info_Accueil'] ?>"><?= $infos['Email_Info_Accueil'] ?></a></li>
                <li class="liste-infos"><img src="images/fleche.png" class="fleche-acces" alt="" style="margin-right: 6px;">Au lycée : <a class="num" target="_blank" href="https://www.google.fr/maps/place/Lyc%C3%A9e+Priv%C3%A9+Saint+Vincent+de+Senlis/@49.2033091,2.5888014,21z/data=!4m10!1m2!2m1!1sBureau+du+CSE+(1er+%C3%A9tage+b%C3%A2timent+Saint-Vincent)+senlis!3m6!1s0x47e630cfeb73f31d:0x48c819ca44bf7503!8m2!3d49.2032959!4d2.5887978!15sCjlCdXJlYXUgZHUgQ1NFICgxZXIgw6l0YWdlIGLDonRpbWVudCBTYWludC1WaW5jZW50KSBzZW5saXOSAQtoaWdoX3NjaG9vbOABAA!16s%2Fg%2F1thcrn4z"><?= $infos['Emplacement_Bureau_Info_Accueil'] ?></a></li>
            </ul>
        </div>
        <div class="partenaires">
            <h3>Nos partenaires</h3>

            <div class="contenant-slider">
                <div class="slider">
                    <div class="fleche-gauche"><img src="images/fleche.png"></div>
                    <div class="contenant-image-slider">
                        <?php
                        foreach($partenaires as $partenaire){
                        ?>
                        <img src="images/partenaires/<?= $partenaire['Nom_Image'] ?>" class="slide-image" alt="">
                        <?php
                        }
                        ?>
                    </div>
                    <div class="fleche-droite"><img src="images/fleche.png"></div>
                </div>

                <div class="cont-btn">
                    <div class="btn-nav gauche" data-index="1"></div>
                    <div class="btn-nav milieu" data-index="2"></div>
                    <div class="btn-nav droite" data-index="3"></div>
                </div>
            </div>
            <a class="liens-partenaires" href="partenaire.php">Découvrir tous nos partenaires</a>
        </div>
    </div>
</section>