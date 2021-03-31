<?php 
	
	include '../config.php';
	include_once '../Model/User.php';
	// récupere tous les users
	function getAllUsers() {
		$con = getDatabaseConnexion();
		$requete = 'SELECT * from users';
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
	function readUser($id) {
		$con = getDatabaseConnexion();
		$requete = "SELECT * from users where id = '$id' ";
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
	function deleteUser($id) {
		try {
			$con = getDatabaseConnexion();
			$requete = "DELETE from users where id = '$id' ";
			$stmt = $con->query($requete);
		}
	    catch(PDOException $e) {
	    	echo 'cette User a une reservation tu ne peux pas le suprime';
	    }
	}

	function getNewUser() {
		$user['id'] = "";
		$user['pseudo'] = "";
		$user['email'] = "";
		$user['password'] = "";		
	}
	


 ?>