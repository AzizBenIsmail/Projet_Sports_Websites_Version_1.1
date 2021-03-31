<?php
	include '../Controller/mesFunctionsTable1.php';
	include '../Controller/CrudUser1.php';
	include 'Back.php';

	$id = $_GET["id"];
	if ($id == 0) {
		$user = getNewUser();
		$action = "CREATE";
		$libelle = "Creer";
	} else {
		$user = readUser($id);
		$action = "UPDATE";
		$libelle = "Mettre a jour";
	}

?>

	<form action="../Controller/createUpdate1.php" method="get">
	<p>	
		<a href="inscriptionAD.php">Liste des utilisateurs</a>

		<input type="hidden" name="id" value="<?php echo $user['id'];  ?>"/>
		<input type="hidden" name="action" value="<?php echo $action;  ?>"/>
		<div>
        	<label for="name">Pseudo :</label>
        	<input type="text" name='pseudo' required>
	    </div>
	    <div>
	        <label for="prenom">Email </label>
	        <input type="email" name='email' pattern=".+@esprit.tn" size="30">
	    </div>
	    <div>
	        <label for="age">Password:</label>
	        <input type="password"  id="password" name='password' >
	    </div>
		<div class="button">
			<button type="submit"><?php echo $libelle;  ?></button>
		</div>
	</p>
	</form>
	<br>

	<?php if ($action!="CREATE") { ?>
	<form action="../Controller/createUpdate1.php" method="get">
		<input type="hidden" name="action" value="DELETE"/>
		<input type="hidden" name="id" value="<?php echo $user['id'];  ?>"/>
		<p>
		<div class="button">
			<button type="submit">Supprimer</button>
		</div>
		</p>
	</form>
	<?php } ?>

</body>
</html>
 <!-- Bootstrap core JavaScript-->
 <script src="../assets/bak/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/bak/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../assets/bak/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="../assets/bak/vendor/chart.js/Chart.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../assets/bak/js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="../assets/bak/js/demo/chart-area-demo.js"></script>
  <script src="../assets/bak/js/demo/chart-bar-demo.js"></script>
  <script src="../assets/bak/js/demo/chart-pie-demo.js"></script>
