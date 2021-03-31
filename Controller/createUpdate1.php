<?php
	include '../Controller/CrudUser1.php';
	include 'mesFunctionsTable1.php';
	include_once '../Model/User.php';
	include '../view/back.php';
	$action = $_GET["action"];

	if ($action == "DELETE") {
		$id = $_GET["id"];
	} else {
		$id = $_GET["id"];
		$pseudo = $_GET["pseudo"];
		$email = $_GET["email"];
		$password = $_GET["password"];		
	}
	
	if ($action == "CREATE") { 	
		$user=new User($pseudo, $email, $password);
		createUser($user);
		echo "user cree <br>";
		echo "<a href='../View/inscriptionAD.php'> <br> Liste des utilisateurs</a>";	
	}
	if ($action == "UPDATE") {
		updateUser($id, $pseudo, $email, $password);
		echo "user update <br>";
		echo "<a href='../View/inscriptionAD.php'> <br> Liste des utilisateurs</a>";
	}
	if ($action == "DELETE") {
		deleteUser($id);
		echo "user delete <br>";
		echo "<a href='../View/inscriptionAD.php'> <br> Liste des utilisateurs</a>";
	}
	

	
?>