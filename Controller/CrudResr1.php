<?php 
	
	include '../config.php';
	include_once '../Model/Resr.php';
	// récupere tous les users
	function getAllReserv() {
		$con = getDatabaseConnexion();
		$requete = 'SELECT * from resrevation';
		$rows = $con->query($requete);
		return $rows;
	}
	function getAllReserv1($email) {
		$con = getDatabaseConnexion();
		$requete = "SELECT resrevation.nom_reser,resrevation.date,resrevation.type from resrevation,users where resrevation.id_user=users.id and users.email='$email'";
		$rows = $con->query($requete);
		return $rows;
	}

	// creer un user
			function createUser($user) {
					$pseudo=$user->getPseudo();
					$email=$user->getEmail();
					$password=$user->getPassword();
					$password=md5($password);
		try {
			$con = getDatabaseConnexion();
			$sql = "INSERT INTO users (pseudo,email,password) 
					VALUES ('$pseudo', '$email', '$password')";
	    	$con->exec($sql);
		}
	    catch(PDOException $e) {
	    	echo $sql . "<br>" . $e->getMessage();
	    }
	}

	//recupere un user
	function readReserv($id) {
		$con = getDatabaseConnexion();
		$requete = "SELECT * from resrevation where id_reser = '$id' ";
		$stmt = $con->query($requete);
		$row = $stmt->fetchAll();
		if (!empty($row)) {
			return $row[0];
		}
		
	}

	//met à jour le user
	function updateUser($id, $pseudo, $email, $password) {
		$password=md5($password);
		try {
			$con = getDatabaseConnexion();
			$requete = "UPDATE users set 
						pseudo = '$pseudo',
						email = '$email',
						password = '$password' 
						where id = '$id' ";
			$stmt = $con->query($requete);
		}
	    catch(PDOException $e) {
	    	echo $sql . "<br>" . $e->getMessage();
	    }
	}

	// suprime un user
	function deleteRes($id) {
		try {
			$con = getDatabaseConnexion();
			$requete = "DELETE from resrevation where id_reser = '$id' ";
			$stmt = $con->query($requete);
		}
	    catch(PDOException $e) {
	    	echo $requete . "<br>" . $e->getMessage();
	    }
	}

	function getNewUser() {
		$user['id'] = "";
		$user['pseudo'] = "";
		$user['email'] = "";
		$user['password'] = "";		
	}




 ?>