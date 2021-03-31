
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
 
  <head>
    <!-- Required meta tags-->
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Title Page-->
    <title>Register</title>

    <!-- Icons font CSS-->
    <link
      href="assets/vendor/mdi-font/css/material-design-iconic-font.min.css"
      rel="stylesheet"
      media="all"
    />
    <link
      href="assets/vendor/font-awesome-4.7/css/font-awesome.min.css"
      rel="stylesheet"
      media="all"
    />
    <!-- Font special for pages-->
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet"
    />

    <!-- Vendor CSS-->
    <link href="assets/vendor/select2/select2.min.css" rel="stylesheet" media="all" />
    <link
      href="assets/vendor/datepicker/daterangepicker.css"
      rel="stylesheet"
      media="all"
    />

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all" />

  
  </head>

  <body>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
      <div class="wrapper wrapper--w780">
        <div class="card card-3">
          <div class="card-heading"></div>
          <div class="card-body">
            <h2 class="title">inscription tournois </h2>
            <form
              method="POST"
             
              action="Ajouter.php"
            >
              <div class="input-group">
                <input
                  class="input--style-3"
                  type="text"
                  placeholder="Nom"
                  name="nom"
                  id="nom"
                />
              </div>
              <div class="input-group">
                <input
                  class="input--style-3"
                  type="text"
                  placeholder="Prenom"
                  name="prenom"
                  id="prenom"
                />
              </div>

             
             
              <div class="input-group">
                <input
                  class="input--style-3"
                  type="number"
                  placeholder="Cin"
                  name="cin"
                  id="cin"
                />
              </div>
              
              <div class="input-group">
                <input
                  class="input--style-3"
                  type="email"
                  placeholder="Email"
                  name="email"
                  id="email"
                />
              </div>
              <div class="input-group">
                <input
                  class="input--style-3"
                  type="number"
                  placeholder="Phone"
                  name="phone"
                  id="phone"
                />
              </div>
<div class="input-group">
                <div class="rs-select2 js-select-simple select--no-search">
                  <select name="sport" id="sport"> 
                    <option disabled="disabled" selected="selected"
                      >sport</option
                    >
                    <option>foot</option>
                    <option>hand</option>
                    <option>basket</option>
					<option>tennis</option>
					<option>volley</option>
					<option>natation</option>
                  </select>
                  <div class="select-dropdown"></div>
                </div>
              </div>
              <div  style=" color:white;text-align: center;" class="input-group">
                    <label>S'abonner a la Newsletter</label><input type="checkbox" id="ab" name="ab" /> 
              </div>

              <div class="p-t-10">
                <input  onclick="redirect.html" button class="btn btn--pill btn--green" type="submit">
                  Submit
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Jquery JS-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="assets/vendor/select2/select2.min.js"></script>
    <script src="assets/vendor/datepicker/moment.min.js"></script>
    <script src="assets/vendor/datepicker/daterangepicker.js"></script>
   
    <script   src="Registration_Checker.js"></script>
    <!-- Main JS-->
    <script src="assets/js/global.js"></script>
     
  </body>
</html>
