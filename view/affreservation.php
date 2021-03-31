<?php
		include 'continu du page/menu 2.php'; 
		session_start();
?>
		<header id="home" class="fabtheme-parallax-1 img-fluid fabtheme-thetop">
			<div class="container-fluid h-100">
				<div class="row h-100 align-items-center justify-content-start">
					<div class="col-11 col-sm-11 col-md-10 col-lg-10 col-xl-9 pl-0">
						<div class="p-3 p-sm-4 p-md-4 p-lg-5 p-xl-5 text-left wow fadeInLeft fabtheme-headings" data-wow-duration="3s">
							<h1> welcome Reservation reussit.<img src="https://img.icons8.com/color/48/000000/ok--v3.png"/></h1> 
							<p class="pt-2 mb-0"></p>
							<?php include '../Controller/CrudResr1.php';
                            include '../Controller/mesFunctionsTable2.php';
                            $headers = getHeaderTable1();
                            $reservations = getAllReserv1($_SESSION['email']);
                            afficherTableau1($reservations, $headers); ?>
						</div>
					</div>
				</div>
			</div>
		</header>
