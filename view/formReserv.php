<?php
	include '../Controller/mesFunctionsTable2.php';
	include '../Controller/CrudResr1.php';
	include 'Back.php';

	$id = $_GET["id"];
	if ($id == 0) {
		$user = getNewUser();
		$action = "CREATE";
		$libelle = "Creer";
	} else {
		$user = readReserv($id);
		$action = "UPDATE";
		$libelle = "Mettre a jour";
	}

?>

	<?php if ($action!="CREATE") { ?>
	<form action="../Controller/createUpdateRes.php" method="get">
		<input type="hidden" name="action" value="DELETE"/>
		<input type="hidden" name="id" value="<?php echo $id;  ?>"/>
		<p>
		<div class="button">
			<button type="submit">Supprimer </button>
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
