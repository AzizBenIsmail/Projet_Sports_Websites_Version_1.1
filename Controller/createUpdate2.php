<?php
	include '../Controller/CrudResr1.php';
	include 'mesFunctionsTable1.php';
	include_once '../Model/Resr.php';
    
	$action = $_GET["action"];

	if ($action == "DELETE") {
		$id = $_GET["id"];
	} 
	
	
	if ($action == "DELETE") {
		deleteReser($id);
		echo "user delete <br>";
		echo "<a href='../View/ResrvationAD.php'>Liste des utilisateurs</a>";
	}
	

	
?>