<?php include 'continu du page/menu.php';
	include '../Controller/mesFunctionsTable.php';
	include '../Controller/CrudUser.php';
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
        <div class="tab-content">
        <div id="signup">   
          <h1>Forget Password</h1>
          
         <!-- <form action="continu du page/method-get-inscription.php" method="get">  -->
         <form action="../Controller/forget_pw.php" method="post">
         <input type="hidden" name="id" value="<?php echo $user['id'];  ?>"/>
		<input type="hidden" name="action" value="<?php echo $action;  ?>"/>
          <div class="top-row">
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
             New Password<span class="req">*</span>
            </label>
            <input type="password"  id="password" name='password' >
          </div>

          <div class="field-wrap">
            <label> Repeat The New Password<span class="req">*</span></label>
            <input type="password"  id="confirm_password" required>

          </div>
          
          
          <button type="submit" name="submit" class="button button-block" >Change Password</button>
          
          </form>

        </div>
        
        <div id="login">   
          
      
</div> <!-- /form -->
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="../assets/inscription/script.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="../assets/inscription/script1.js"></script>
</body>
</html>
