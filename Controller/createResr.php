<?php
	include 'CrudReser.php';
	include 'mesFunctionsTable.php';
	include_once '../Model/Resr.php';
	
	session_start();
	
		$id_user=readRser($_SESSION['email']);
		$nom_reser =$_POST["nom_reser"];
		$date =$_POST["date"];
		$type =$_POST["type"];		
	
		$resr=new Resr($id_user,$nom_reser, $date, $type);
		createResr($resr);

?>