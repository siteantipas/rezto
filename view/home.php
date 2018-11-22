<!DOCTYPE html>
<html>
<head>
	<title> <?php print APP_NAME ?> : Welcome </title>
	<?php require_once 'inc/head.php' ?>
</head>
<body style="overflow: hidden;" class="body">
	<br>
	<div id="notify"></div>
	<div class="row ">
		<div class="col s0 m0 l0 xl1"></div>
		<div class="col s12 m12 l12 xl10">
			<div class="white lighten-4 z-depth-3 animsition" style="height: 900px;overflow: hidden;padding: 10px;border-radius: 5px;"> 
			  <?php  require 'inc/navbar.php' ?>
			  <?php  require 'inc/meals.php' ?>
			  <?php  require 'inc/drinks.php' ?>
			  <?php  require 'inc/my-account.php' ?>
			  <?php  require 'inc/about.php' ?>
			  <?php  require 'inc/footer.php' ?>
			</div> 
		</div>
		<div class="col s0 m0 l0 xl1"></div>
	</div>
</body>
</html>