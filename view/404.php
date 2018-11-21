<!DOCTYPE html>
<html>
<head>
	<title> <?php print APP_NAME ?> :: 404 </title>
	<meta charset="utf-8">
    <link rel="shortcut icon" href="favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#000000">
    <!-- get boostrap from cdn-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" 
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
           integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body style="overflow-x: hidden;">
	 <div class="row">
	 	 <div class="col-sm-0 col-m-0 col-lg-1 col-xl-2">
	 	 	<!-- nothing here -->
	 	 </div>
	 	 <div class="col-sm-12 col-m-12 col-lg-10 col-xl-8">
	 	 	 <br>
			 <div class="list-group">
			  <a class="list-group-item list-group-item-action flex-column align-items-start active text-ligh" href="#home">
			    <div class="d-flex w-100 justify-content-between">
			      <h3 class="mb-1"> <?php print APP_NAME ?> </h3>
			      <small></small>
			    </div>
			    <br>
			    <p class="mb-1">404 - File Not Found</p>
			    <small>&nbsp;</small>
			  </a>
			 </div>
			 <br>
			 <div class="jumbotron">
			  <h1 class="display-4">Oops, 404 Error!</h1>
			  <p class="lead">The page <u class="text-primary"><?php print APP_URL.request  ?></u> you requested could not be found on our servers.</p>
			  <hr class="my-4">
			  <p>We recommend you try the login page.</p>
			  <a class="btn btn-primary btn-lg" href="<?php print ROOT ?>login" role="button">Login here</a>
			</div> 
	 	 </div>
	 	 <div class="col-sm-0 col-m-0 col-lg-1 col-xl-2">
	 	 	<!-- nothing here -->
	 	 </div>
	 </div>
	 <center>
	     <small class="text-muted">
	        <i>&copy; <?php print date('Y') .' - '. APP_NAME ?></i>
	     </small>
	 </center>
</body>
</html>