<?php include 'continu du page/menu.php';
	include '../Controller/mesFunctionsTable.php';
	include '../Controller/CrudUser.php';
session_start();
 if($_SESSION['valide']==true)
 {        			header('Location:Home.php');      
 }
  /*$id = $_GET["id"];
	if ($id == 0) {
		$user = getNewUser();
		$action = "CREATE";
		$libelle = "Creer";
	} else {
		$user = readUser($id);
		$action = "UPDATE";
		$libelle = "Mettre a jour";
  } */
   ?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Sign-Up/Login Form</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="../assets/inscription/style.css">
</head>
<body>
<!-- partial:index.partial.html -->
<div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up for Free</h1>
          
         <!-- <form action="continu du page/method-get-inscription.php" method="get">  -->
         <form action="../Controller/createUpdate.php" method="post">
         <!--<input type="hidden" name="id" value=" <?php //echo $user['id'];  ?>"/>
		<input type="hidden" name="action" value="<?php // echo $action;  ?>"/> -->
          <div class="top-row">
            <div class="field-wrap">
              <label>pseudo<span class="req">*</span>
              </label>
              <input type="text" name='pseudo' required>
            </div>
        
            <div class="field-wrap">
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name='email' pattern=".+@esprit.tn" size="30">
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"  id="password" name='password' >
          </div>
          <div class="field-wrap">
            <label> Repeat Password<span class="req">*</span></label>
            <input type="password"  id="confirm_password" required>

          </div>
          
          
          <button type="submit" name="submit" class="button button-block" >Get Started</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="../Controller/login.php" method="post">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="email" pattern=".+@esprit.tn" size="30" required autocomplete="off"/>
          </div>
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password" name="password" required autocomplete="off"/>
          </div>
          <p class="forgot"><a href="forget.php">Forgot Password?</a></p>
          
          <button class="button button-block">Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="../assets/inscription/script.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="../assets/inscription/script1.js"></script>
</body>
</html>
