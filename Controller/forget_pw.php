<?php
include '../config.php';
        //recupere un user
        $email=$_POST['email'];
        $password=$_POST['password'];
        $password=md5($password);
		$con = getDatabaseConnexion();
		$requete = "SELECT id from users where email = '$email'" ;
        $stmt = $con->query($requete);
        
        $row = $stmt->fetchAll();
		if (!empty($row)) {
            header('Location:../view/inscription.php'); 

$sql=" update users set password = '$password' where email = '$email'";
$con->query($sql);
		}else {
            echo 'erreur';             //template erreu mail mech mawjoud 
        }

        
         

?>