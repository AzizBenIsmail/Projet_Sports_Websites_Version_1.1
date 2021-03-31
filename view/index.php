<?php 
 			session_start(); 
	if($_SESSION['valide']==false)
{ 
		include 'continu du page/menu.php'; 
		
		 include 'continu du page/HEADER.php';
	
		 include 'continu du page/SCROLL TOP.php';

		 include 'continu du page/ABOUT.php';

		 include 'continu du page/SERVICES.php';
		
		 include 'continu du page/TEAM.php'; 
		
		 include 'continu du page/FOOTER.php'; 
}else
{
	header('Location:Home.php');      

}
		 ?>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<!-- WAYPOINTS JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
		<!-- UI JS -->
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
		<!-- COUNTERUP JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
		<!-- POPPER JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/popper.min.js"></script>
		<!-- BOOTSTRAP JS -->
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
		<!-- OWL CAROUSEL JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
		<!-- WOW JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
		<!-- MAIN JS -->
		<script src="../assets/Template/js/script.js"></script>
		<!--<script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
		<script src="website/js/Darkmode.js" ></script> -->
		<!-- END OF JQUERY JS -->
    </body>
</html>