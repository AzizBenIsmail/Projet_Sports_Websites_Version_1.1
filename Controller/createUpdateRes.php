<?php
	include '../Controller/CrudResr1.php';
	include 'mesFunctionsTable2.php';
	include_once '../Model/Resr.php';
	include '../view/back.php';
	$action = $_GET["action"];

	
		$id = $_GET["id"];

	
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
		deleteRes($id);
		echo "$id";
		echo "user delete <br>";
		echo "<a href='../View/reservationAD.php'> <br> Liste des utilisateurs</a>";
	}
	

	
?>