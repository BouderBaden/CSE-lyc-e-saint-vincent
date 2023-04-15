<?php 
function getDatabaseConnexion(){
    try {
        $user = "root";
        $pass = "";
        $pdo = new PDO('mysql:host=localhost;dbname=cse-lycee-st-vincent', $user, $pass);
         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
        
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}

function getAllPartenaire(){
    $con = getDatabaseConnexion();
    $requete = 'SELECT * from partenaire';
    $rows = $con->query($requete);
    return $rows;
}

function readPartenaire($id){
    $con = getDatabaseConnexion();
    $requete = "SELECT * from partenaire where Id_Partenaire = '$id' ";
    $stmt = $con->query($requete);
    $row = $stmt->fetchAll();
    if (!empty($row)) {
        return $row[0];
    }
}

function createPartenaire($nom, $description, $lien, $image){
    try {
        $con = getDatabaseConnexion();
        $sql = "INSERT INTO partenaire (Nom_Partenaire, Description_Partenaire, Lien_Partenaire, Id_Image) 
                VALUES ('$nom', '$description', '$lien' ,'$image')";
        $con->exec($sql);
    }
    catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}

function updatePartenaire($id, $nom, $description, $lien, $image){
    try {
        $con = getDatabaseConnexion();
        
        // Vérifier que l'ID de l'image est valide
        $requete_check = "SELECT Id_Image FROM Image WHERE Id_Image = '$image'";
        $stmt_check = $con->query($requete_check);
        $result_check = $stmt_check->fetch(PDO::FETCH_ASSOC);
        if (!$result_check) {
            // L'ID de l'image n'est pas valide, renvoyer une erreur
            throw new Exception("L'ID de l'image '$image' n'existe pas dans la table Image.");
        }
        
        // Mettre à jour le partenaire avec les données fournies
        $requete = "UPDATE partenaire set 
                    Nom_Partenaire = '$nom',
                    Description_Partenaire = '$description',
                    Lien_Partenaire = '$lien',
                    Id_Image = '$image' 
                    where Id_Partenaire = '$id'";
        $stmt = $con->query($requete);
    }
    catch(PDOException $e) {
        echo $requete . "<br>" . $e->getMessage();
    }
    catch(Exception $e) {
        echo $e->getMessage();
    }
}

function deletePartenaire($id){
    try {
        $con = getDatabaseConnexion();
        $requete = "DELETE from partenaire where Id_Partenaire = '$id' ";
        $stmt = $con->query($requete);
    }
    catch(PDOException $e) {
        echo "Erreur lors de la suppression du partenaire : " . $e->getMessage();
    }
}

function getNewPartenaire() {
    $user['Id_Partenaire'] = "";
    $user['Nom_Partenaire'] = "";
    $user['Description_Partenaire'] = "";
    $user['Lien_Partenaire'] = "";
    $user['Id_Image'] = "";
    return $user;
}

function afficherTableau($rows, $headers) { 
	?>
		<table>
            <thead>
		    <tr>
		    <?php foreach ($headers as $header): ?>
		        <th><?php echo $header; ?></th>
		    <?php endforeach; ?>
		    </tr>
            </thead>

			<?php foreach ($rows as $row): ?>
			    <tr class="tr-body">
			    <?php for ($k = 0; $k < count($headers); $k++): ?>
			    	<?php if ($k == 0){ ?>
			    		<td><div class="centrer"><?php echo '<a href=update-delete.php?id='.$row[$k].' >'.$row[$k].'</a>'; ?></div></td>
			    	<?php } else { ?>
			    		<td><div class="centrer"><?php echo $row[$k]; ?></div></td>
			    	<?php } ?>
			        
			    <?php endfor; ?>
			    </tr>
			<?php endforeach; ?>

		</table>
	<?php
}

function getHeaderTable() {
	$headers = array();
	$headers[] = "Id_Partenaire";
	$headers[] = "Nom_Partenaire";
	$headers[] = "Description_Partenaire";
	$headers[] = "Lien_Partenaire";
	$headers[] = "Id_Image";
	return $headers;
}