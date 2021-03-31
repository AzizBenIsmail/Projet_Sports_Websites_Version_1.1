<?php		 session_start(); 
		
		if($_SESSION['valide']==true)
{
		include 'continu du page/menu 1.php'; 
		
		 include 'continu du page/HEADER.php';
	
		 include 'continu du page/SCROLL TOP.php';

		 include 'continu du page/ABOUT.php';

		 include 'continu du page/SERVICES.php';

		 include 'continu du page/COUNT.php'; 

		 include 'continu du page/WORK.php'; 
	
		 include 'continu du page/REVIEWS.php' ;
		
		 include 'continu du page/TEAM.php'; 
	
		 include 'continu du page/BLOG.php'; 
		
		 include 'continu du page/VIDEO.php' ;
		
		 include 'continu du page/CONTACT.php' ;
		
		 include 'continu du page/NEWSLETTER.php';
		
		 include 'continu du page/FOOTER.php'; 
}else{
	header('Location:index.php');      
}
		?>
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>

		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/popper.min.js"></script>
		
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	
		<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
	
		<script src="../assets/Template/js/script.js"></script>
		<!--<script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script> -->
		<script src="../assets/Template/js/Darkmode.js" ></script> -->
		<!-- END OF JQUERY JS -->
    </body>
</html>