<?php 
	
	include '../config.php';
	include_once '../Model/Resr.php';
	session_start();
	// récupere tous les users
	function getAllResr() {
		$con = getDatabaseConnexion();
		$requete = 'SELECT * from resrevation';
		$rows = $con->query($requete);
		return $rows;
	}

	// creer un resrevation
			function createResr($resr) { 
					$id_user=$resr->getIdUser();
					$nom_reser=$resr->getNom_reser();
					$date=$resr->getDate();
					$Type=$resr->getType();
		try {
			$con = getDatabaseConnexion();
			$sql = "INSERT INTO resrevation (id_user,nom_reser,date,Type) 
					VALUES ('$id_user','$nom_reser', '$date', '$Type')";
			$con->exec($sql);
			header('Location:../view/affreservation.php');      
		}
	    catch(PDOException $e) { 
	    	echo $sql . "<br>" . $e->getMessage();
	    }
	}

	//recupere un resr
	function readRser($email) {
		$con = getDatabaseConnexion();
		$requete = "SELECT id from users where email = '$email' ";
		$stmt = $con->query($requete);
while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
  return $row[0];
}
	}



 ?>