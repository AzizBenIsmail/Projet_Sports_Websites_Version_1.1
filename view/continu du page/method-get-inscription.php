<?php 
   // Vérifier si le formulaire est soumis 
   if ( isset( $_GET['submit'] ) ) {
     /* récupérer les données du formulaire en utilisant 
        la valeur des attributs name comme clé 
       */
     $pseudo = $_GET['pseudo']; 
     $email = $_GET['email']; 
     $password = $_GET['password'];
     // afficher le résultat
     echo '<h3>Informations récupérées en utilisant GET</h3>'; 
     echo 'Pseudo: ' . $pseudo . ' email : ' . $email . ' Password : ' .$password; 
     exit;
  }
?>