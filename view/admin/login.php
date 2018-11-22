<!DOCTYPE html>
<html>
<head>
	<title> <?php print APP_NAME ?> : Welcome </title>
	<?php require_once SERVER_ROOT . ROOT . '/view/inc/head.php' ?>
</head>
<body style="overflow: hidden;" class="body">
	<br>
	<div class="hide-on-med-and-down">
		<br>
	    <br>
	</div>
	<div class="row">
		<div class="col s0 m0 l1 xl4"></div>
		<div class="col s12 m12 l10 xl4">
			<div class="white whte z-depth-1 white lighten-4" style="height:;overflow-x: hidden;padding: 10px;border-radius: 3px;">
				<nav class="nav-extended no-shadow transparent">
				    <div class="nav-wrapper">
				      <a href="" class="brand-logo color" style="font-family: sans-serif;">&nbsp;&nbsp; <?php print APP_NAME ?></a>
				    </div>
				    <div class="nav-content"> 
				      <ul class="tabs tabs-transparent">
				      	<div class="panel indicator"></div>
				        <li class="tab"><a href="#Login" class="active"><i class="material-icons left text-small hide-on-small-only">person</i>
				        	<span class="color">Login</span></a></li>
				        <li class="tab"><a href="#Forgot-Password" class="active"><i class="material-icons left text-small hide-on-small-only">lock</i>
				        	<span class="color">Lost password</span></a></li>	
				        <li class="tab"><a href="#Register"><i class="material-icons left text-small hide-on-small-only">account_circle</i>
				        	<span class="color">Register</span></a></li>
				      </ul>
				    </div>
			  </nav>
			  <div id="Login" class="col s12">
			  	 <br>
			  	 <br> 
			  	 <center>
			  	 	<i class="material-icons text-large color">account_circle</i>
			  	 	<h4 class="color">Login to your account</h4>
			  	 </center>
			  	 <div class="form-carrier">
			  	 	 <form method="post" class="reduced">
			  	 	 	 <div class="input-field ">
			  	 	 	 	 <label for="id" class="color">Email or Username</label>
			  	 	 	 	 <input type="text" name="id" id="id">
			  	 	 	 </div>
			  	 	 	 <div class="input-field ">
			  	 	 	 	 <label for="password" class="color">Password</label>
			  	 	 	 	 <input type="text" name="password" id="password">
			  	 	 	 </div>
			  	 	 	 <div class="input-field">
			  	 	 	 	<br>
			  	 	 	 	<button type="submit" class="btn btn-large hoverable waves-effect waves-light bg">
			  	 	 	 		Login <i class="material-icons right text-small i">send</i>
			  	 	 	 	</button>
			  	 	 	 	<br>
			  	 	 	 	<br>  
			  	 	 	 </div>
			  	 	 </form>
			  	 	 <center>
	  	 	 	 		<p class="text-small">&copy; <?php print date('Y') . ' - '. APP_NAME ?> </p>
	  	 	 	 	</center>
			  	 </div>
			  </div>
			  <div id="Forgot-Password" class="col s12">
			  	 <br>
			  	 <br>
			  	 Forgot p
			  </div> 
			  <div id="Register" class="col s12">
			  	 <br>
			  	 <br>
			  	 Register
			  </div> 
			</div>
		</div>
		<div class="col s0 m0 l1 xl4"></div>
	</div>
</body>
</html>