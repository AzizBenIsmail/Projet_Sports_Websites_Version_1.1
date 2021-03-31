<?php
	include 'CrudUser.php';
	include 'mesFunctionsTable.php';
	include_once '../Model/User.php';
    
	//$action = $_POST["action"];

	/*if ($action == "DELETE") {
		$id = $_POST["id"];
	} else {*/
	//	$id = $_POST["id"];
		$pseudo =$_POST["pseudo"];
		$email =$_POST["email"];
		$password =$_POST["password"];		
	//}
	$user=new User($pseudo, $email, $password);
	createUser($user);
	/*if ($action == "CREATE") { 	
		$user=new User($pseudo, $email, $password);
		createUser($user);
	}
	if ($action == "UPDATE") {
		updateUser($id, $pseudo, $email, $password);
		echo "user update <br>";
		echo "<a href='../View/index.php'>Liste des utilisateurs</a>";
	}
	if ($action == "DELETE") {
		deleteUser($id);
		echo "user delete <br>";
		echo "<a href='../View/index.php'>Liste des utilisateurs</a>";
	}	*/
?>