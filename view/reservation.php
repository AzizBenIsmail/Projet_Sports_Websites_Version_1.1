<?php 
	include '../Controller/mesFunctionsTable.php';
	include '../Controller/CrudReser.php';
	session_start();
	if($_SESSION['valide']==false)
	header('Location:inscription.php');    
   ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Reservation Form HTML Template</title>
	<!-- FAVICON -->
	<link href="../assets/reservation/img_reservation/logo web (1)1.png" rel="icon"> 
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="../assets/reservation/css_reservation/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="../assets/reservation/css_reservation/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>
<?php include'continu du page/menu 2.php' ?>
<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-push-5">
						<div class="booking-cta">
							<p> <img src="../assets/reservation/img_reservation/logo web (1)1.png " height="180" width="180">
							-*-*-*-*-*-*MOHAMMED ALI*-*-*-*-*-*-	
                        “On ne devient pas champion dans un gymnase. On devient champion grâce à ce qu’on ressent ; un désir, un rêve, une vision.”
							</p>
						</div>
					</div> 	
					<div class="booking-form">
						<div class="form-header">
							<h1>Make your reservation <img src="../assets/reservation/img_reservation/logo web (1)1.png" height="45" width="45"></h1> 
						</div>
						<form action="../Controller/createResr.php" method="post">
							<div class="form-group">
								<div class="form-group">
									
								<input class="form-control" type="text" name='nom_reser' placeholder="Nom Du Reservation">
								<span class="form-label">Date de reservation</span>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" type="date" name='date' required >
										<span class="form-label">Date de reservation</span>
									</div>
								</div>
							<div class="form-checkbox">
								<label for="roundtrip">
									<input type="radio" id="football" value="football" name="type">
									<span></span>football
								</label>
								<label for="one-way">
									<input type="radio" id="tennis" value="tennis" name="type">
									<span></span>tennis
								</label>
								<label for="multi-city">
									<input type="radio" id="basketball" value="basketball" name="type">
									<span></span>basketball
								</label>
								<label for="multi-city">
									<input type="radio" id="natation" value="natation" name="type">
									<span></span>natation
								</label>
								<label for="multi-city">
									<input type="radio" id="handball" value="handball" name="type">
									<span></span>handball
								</label>
								<label for="multi-city">
									<input type="radio" id="vollyball" value="vollyball" name="type">
									<span></span>vollyball
								</label>
							</div>
						</div>
							<div class="form-btn">
								<button class="submit-btn">Reservation</button>
							</div>
							
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="../assets/reservation/js_reservation/jquery.min.js"></script>
	<script>
		$('.form-control').each(function () {
			floatedLabel($(this));
		});

		$('.form-control').on('input', function () {
			floatedLabel($(this));
		});

		function floatedLabel(input) {
			var $field = input.closest('.form-group');
			if (input.val()) {
				$field.addClass('input-not-empty');
			} else {
				$field.removeClass('input-not-empty');
			}
		}
	</script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>