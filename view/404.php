<!DOCTYPE html>
<html>
<head>
	<title> <?php print APP_NAME ?> : Welcome </title>
	<?php require_once 'inc/head.php' ?>
</head>
<body style="overflow: hidden;" class="body">
	<br>
	<div class="row">
		<div class="col s0 m0 l0 xl1"></div>
		<div class="col s12 m12 l12 xl10">
			<div class="white lighten-4 z-depth-3" style="height: 900px;overflow: hidden;padding: 10px;border-radius: 5px;"> 
				<nav class="nav-extended no-shadow transparent">
				    <div class="nav-wrapper">
				      <a href="" class="brand-logo color" style="font-family: sans-serif;">&nbsp;&nbsp; <?php print APP_NAME ?></a>
				      <a href="#" data-activates="mobile-nav" class="button-collapse"><i class="material-icons">menu</i></a>
				      <ul id="nav-mobile" class="right hide-on-med-and-down">
				        <li><a class="transparent color"> <img src="assets/images/profile1.jpg" class="circle" width="35" style="margin-top:15px;"></a></li>
				        <li class="transparent color">Antipas</li>
				      </ul>
					<ul id="mobile-nav" class="side-nav">
					  <li>
					  	  <div class="user-view">
					      <div class="background">
					        <img src="assets/images/chicken.jpg">
					      </div>
					      <a href="#!user"><img class="circle" src="assets/images/logo.svg"></a>
					      <a href="#!name"><span class="white-text name color"><?php print APP_NAME ?></span></a>
					      <a href="#!email"><span class="white-text email color"><?php print APP_EMAIL ?></span></a>
					    </div>
					  </li>
				      <li><a href="#!">First Sidebar Link</a></li>
				      <li><a href="#!">Second Sidebar Link</a></li> 
				    </ul> 
				    </div>
				    <div class="nav-content"> 
				      <ul class="tabs tabs-transparent">
				      	<div class="panel indicator"></div>
				        <li class="tab"><a href="#Error" class="active"><i class="material-icons left text-small">error</i>
				        	<span class="hide-on-small-only color">Error</span></a></li> 
				      </ul>
				    </div>
			  </nav>
			  <div id="Error" class="col s12">
				 <br>
			  	 <br>
			  	 <div class="row">
			  	 	 <div class="col s12 m12 l12 xl2">
			  	 	 	<!--<h5 class="tab-header"><u>Dashboard</u></h5>-->
			  	 	 	<div class="collection no-border no-margin"> 
					        <a href="#404" class="collection-item white-text active bg">404   <i class="material-icons i right text-small">warning</i></a>
					        <a href="./?tab=account" class="collection-item color">Home <i class="material-icons right text-small">home</i></a>
					        <a href="./?tab=account" class="collection-item color">My Account  <i class="material-icons right text-small">account_circle</i></a>
					        <a href="./?tab=about" class="collection-item color">About   <i class="material-icons right text-small">info_outline</i></a> 
					    </div>
			  	 	 </div>
			  	 	 <div class="col s12 m12 l12 xl10 section gre lighten-4">   
						<div class="row">
							<div class="collection no-border no-margin ">
					            <a class="collection-item color gre lighten-4 white">404 Page not found</a></a>
					    	</div>
					    	<br>
					    	<br>
					    	<br>
					    	<center>
					    		 <h1 class="text-large color">Oops, 404!</h1>
					    		 <!--<i class="material-icons text-large">priority_high</i>-->
					    		 <p>
					    		 	The page <u class="color">https://<?php print HOST.'/'.request ?></u> you asked was no where to be found.
					    		 </p>
					    	</center> 
						</div>
			  	 	 </div>
			  	 </div> 
			  </div> 
			  <div class="col s12 m12 l12 xl12">
			  	  <footer class="page-footer white"> 
			          <div class="footer-copyright white">
			            <div class="container white color">
			            <a class="color"><u>Follow Us</u></a>&nbsp;&nbsp;&nbsp; 
			            <a class="color " href=""><i class="socicon-facebook"></i></a>  &nbsp;&nbsp;&nbsp;&nbsp;
			            <a class="color" href=""><i class="socicon-instagram"></i></a>  &nbsp;&nbsp;&nbsp;&nbsp;
			            <a class="color" href=""><i class="socicon-twitter"></i></a>    &nbsp;&nbsp;&nbsp;&nbsp;
			            <a class="color" href=""><i class="socicon-whatsapp"></i></a>   &nbsp;&nbsp;&nbsp;&nbsp;
			            <a class="color" href=""><i class="socicon-linkedin"></i></a>
			            <a class="right color" href=""> &copy; <?php print YEAR . '&nbsp; - &nbsp; '. APP_NAME ?></a>
			            </div>
			          </div>
		        </footer>
			  </div>
			</div> 
		</div>
		<div class="col s0 m0 l0 xl1"></div>
	</div>
</body>
</html>