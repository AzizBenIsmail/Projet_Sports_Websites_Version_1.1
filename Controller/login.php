<?php
include '../config.php';
session_start();
        //recupere un user
        $email=$_POST['email'];
        $password=$_POST['password'];
        $password=md5($password);
		$con = getDatabaseConnexion();
		$requete = "SELECT id from users where email = '$email' and password = '$password' " ;
        $stmt = $con->query($requete);  //execute
        
        $row = $stmt->fetchAll();    //insert dans un tab
		if (!empty($row)) {           
            $_SESSION['valide']=true; 
            $_SESSION['email']=$email;  
            if($email=="Admin@esprit.tn" && $password="admin")
                header('Location:../view/Backend.php');      
            else                 
                header('Location:../view/Home.php');      
		}else {
            header('Location:../view/inscription.php');              
        }

        
         

?>