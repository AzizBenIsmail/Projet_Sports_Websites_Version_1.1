

<?php
		include '../Controller/CrudUser1.php';
		include '../Controller/mesFunctionsTable1.php';
    include 'Back.php';
		$headers = getHeaderTable();
		$users = getAllUsers();
		afficherTableau($users, $headers);
	?>
  	<a href=formulaireUtilisateur.php?id=0  >Creer un user</a> 
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
