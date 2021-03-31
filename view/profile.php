<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="70x76" href="assets/img/apple-icon.png">
    <link href="../assets/Template/images/logo web (1)1.png" rel="icon">        
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Adrenaline Club</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<!--     Fonts and icons     -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">

	<!-- CSS Files -->
    <link href="../assets/profile/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/profile/css/gsdk-bootstrap-wizard.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="../assets/profile/css/demo.css" rel="stylesheet" />
</head>

<body>
<div class="image-container set-full-height" style="background-image: url('../assets/profile/img/a.jpg')">
    <!--   Creative Tim Branding   -->
    <a href="Home.php">
         <div class="logo-container">
            <div class="logo">
                <img src="../assets/profile/img/logo web (1)1.png" height="60" width="60">
            </div>
            <div class="brand">
            Adrenaline Club
            </div>
        </div>
    </a>

	<!--  Made With Get Shit Done Kit  -->
		<a href="Home.php" class="made-with-mk">
			<div class="brand">AC</div>
			<div class="made-with"><strong>Adrenaline Club</strong></div>
		</a>

    <!--   Big container   -->
    <div class="container">
        <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

            <!--      Wizard container        -->
            <div class="wizard-container">

                <div class="card wizard-card" data-color="orange" id="wizardProfile">
                    <form action="" method="">
                <!--        You can switch ' data-color="orange" '  with one of the next bright colors: "blue", "green", "orange", "red"          -->

                    	<div class="wizard-header">
                        	<h3>
                        	   <b>BUILD</b> YOUR PROFILE <br>
                        	   <small>This information will let us know more about you.</small>
                        	</h3>
                    	</div>

						<div class="wizard-navigation">
							<ul>
	                            <li><a href="#about" data-toggle="tab">About</a></li>
	                        </ul>

						</div>

                        <div class="tab-content">
                            <div class="tab-pane" id="about">
                              <div class="row">
                                  <h4 class="info-text"> Let's start with the basic information (with validation)</h4>
                                  <div class="col-sm-4 col-sm-offset-1">
                                     <div class="picture-container">
                                          <div class="picture">
                                              <img src="../assets/profile/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                                              <input type="file" id="wizard-picture">
                                          </div>
                                          <h6>Choose Picture</h6>
                                      </div>
                                  </div>
                                  <div class="col-sm-6">
                                      <div class="form-group">
                                        <label>pseudo<small>(required)</small></label>
                                        <input name="pseudo" type="text" class="form-control" placeholder="Andrew..." required>
                                      </div>
                                      <div class="form-group">
                                      <label>Email <small>(required)</small></label>
                                          <input name="email" type="email" class="form-control" pattern=".+@esprit.tn" size="30" placeholder="andrew@esprit.tn">    
                                      </div>
                                  </div>
                                  <div class="col-sm-10 col-sm-offset-1">
                                      
                                         <label>password<small>(required)</small></label>
                                        <input type="password" name="password" id="password" required class="form-control" placeholder="*****">   
                                  </div>
                              </div>
                            </div>
                        <div class="wizard-footer height-wizard">
                            <div class="pull-right">
                                <button type="submit" name="submit" class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' >Finish</button>
                            </div>
                            <div class="clearfix"></div>
                        </div> 
                    </form>
                    <div class="pull-left">
                <p class="forgot"><a href="forget.php">Forgot Password?</a></p>
                        </div>
                </div>
               
            </div> <!-- wizard container -->
        </div>
        </div><!-- end row -->
    </div> <!--  big container -->
</div>
</body>

	<!--   Core JS Files   -->
	<script src="../assets/profile/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="../assets/profile/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../assets/profile/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="../assets/profile/js/gsdk-bootstrap-wizard.js"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="../assets/profile/js/jquery.validate.min.js"></script>

</html>
