<!DOCTYPE html>
<html>
<head>
	<title> <?php print APP_NAME ?> : Welcome </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://d1azc1qln24ryf.cloudfront.net/114779/Socicon/style-cf.css?u8vidh"><link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative|Faster+One|Julee|Mandali|Numans|Snippet" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/global.css">
	<script src="assets/js/global.js"></script>
</head>
<body style="overflow: hidden;" class="body">
	<br>
	<div class="row">
		<div class="col s0 m0 l0 xl1"></div>
		<div class="col s12 m12 l12 xl10">
			<div class="white lighten-4 z-depth-3" style="height: 900px;overflow-x: hidden;padding: 10px;border-radius: 5px;"> 
				<nav class="nav-extended no-shadow transparent">
				    <div class="nav-wrapper">
				      <a href="" class="brand-logo color" style="font-family: sans-serif;">&nbsp;&nbsp; <?php print APP_NAME ?></a>
				      <a href="#" data-activates="mobile-nav" class="button-collapse"><i class="material-icons">menu</i></a>
				      <ul id="nav-mobile" class="right hide-on-med-and-down">
				        <li><a class="transparent color"> <img src="assets/images/profile.jpg" class="circle" width="35" style="margin-top:15px;"></a></li>
				        <li class="transparent color">Amanda </li>
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
				        <li class="tab"><a href="#Meals" class="active"><i class="material-icons left text-small">restaurant_menu</i>
				        	<span class="hide-on-small-only color">Meals</span></a></li>
				        <li class="tab"><a href="#Drinks"><i class="material-icons left text-small">local_bar</i>
				        	<span class="hide-on-small-only color">Drinks</span></a></li>	
				        <li class="tab"><a href="#Account"><i class="material-icons left text-small">account_circle</i>
				        	<span class="hide-on-small-only color">My account</span></a></li>	
				        <li class="tab"><a href="#About"><i class="material-icons left text-small">info</i>
				        	<span class="hide-on-small-only color">About</span></a></li>
				      </ul>
				    </div>
			  </nav>
			  <div id="Meals" class="col s12">
				 <br>
			  	 <br>
			  	 <div class="row">
			  	 	 <div class="col s12 m12 l12 xl2">
			  	 	 	<!--<h5 class="tab-header"><u>Dashboard</u></h5>-->
			  	 	 	<div class="collection no-border no-margin">
					        <a href="#!" class="collection-item white-text active bg">All <i class="material-icons i right text-small">restaurant</i></a></a>
					        <a href="#!" class="collection-item color ">African <i class="material-icons right text-small">restaurant</i></a>
					        <a href="#!" class="collection-item color">European <i class="material-icons right text-small">room_service</i></a>
					        <a href="#!" class="collection-item color">Chinese  <i class="material-icons right text-small">restaurant</i></a>
					        <a href="#!" class="collection-item color">Vegetarian  <i class="material-icons right text-small">restaurant</i></a>
					    </div>
			  	 	 </div>
			  	 	 <div class="col s12 m12 l12 xl10">   
						<div class="row meals-carrier" style="overflow-y:auto;overflow-x:hidden;">
							<div class="collection no-border no-margin">
					            <a class="collection-item white-text active bg">Meals available now</a></a>
					    	</div>
					    	<br>
							<div class="col s12 m6 l4 xl3">
								<div class="card grey lighten-4 z-depth-">  
									<div class="card-image waves-effec pulse waves-bloc waves-light">
										<img src="assets/images/chicken.jpg">
										<a class="btn btn-large halfway-fab z-depth-1 hoverable right waves-effect btn-floating orange" href="?mealid=1">
											<i class="material-icons i">restaurant</i></a>
									</div>
									<div class="card-content z-depth-2 hoverable">
										<span class="card-title orange-text">Fries &amp; Chicken </span>  
										<!--cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
										proident, sunt in culpa-->
										<h5 style="font-size: 20px">5,500 Fcfa</h5>
										<i class="material-icons orange-text text-small">gradegradegradegrade</i>
									</div> 
									<div class="card-action">
										<i class="material-icons waves-effect text-small i orange-text circle">favorite</i>
										<span class="text-small orange-text waves-effect circle">10k</span>
									</div>
								</div>
							</div>
							<div class="col s12 m6 l4 xl3">
								<div class="card grey lighten-4 ">  
									<div class="card-image waves-effec pulse waves-bloc waves-light">
										<img src="assets/images/chicken.png">
										<a class="btn btn-large halfway-fab z-depth-1 hoverable right waves-effect btn-floating orange" href="?mealid=1">
											<i class="material-icons i">restaurant</i></a>
									</div>
									<div class="card-content hoverable z-depth-2">
										<span class="card-title orange-text">Chicken chips </span>  
										<!--cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
										proident, sunt in culpa-->
										<h5 style="font-size: 20px">7,000 Fcfa</h5>
										<i class="material-icons orange-text text-small">gradegradegradegrade</i>
									</div> 
									<div class="card-action">
										<i class="material-icons waves-effect text-small i orange-text circle">favorite</i>
										<span class="text-small orange-text waves-effect circle">12k</span>
									</div>
								</div>
							</div>
							<div class="col s12 m6 l4 xl3">
								<div class="card grey lighten-4 z-depth-">  
									<div class="card-image waves-effec pulse waves-bloc waves-light">
										<img src="assets/images/fufu.jpg">
										<a class="btn btn-large halfway-fab z-depth-1 hoverable right waves-effect btn-floating orange" href="?mealid=1">
											<i class="material-icons i">restaurant</i></a>
									</div>
									<div class="card-content hoverable z-depth-2">
										<span class="card-title orange-text">Fufu &amp; Vegetable</span>  
										<!--cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
										proident, sunt in culpa-->
										<h5 style="font-size: 20px">4,000 Fcfa</h5>
										<i class="material-icons orange-text text-small">gradegradegradegrade</i>
									</div> 
									<div class="card-action">
										<i class="material-icons waves-effect text-small i orange-text circle">favorite</i>
										<span class="text-small orange-text waves-effect circle">1.3k</span>
									</div> 
								</div>
							</div>
						</div>
			  	 	 </div>
			  	 </div> 
			  </div>
			  <div id="Drinks" class="col s12">
				 <br>
			  	 <br>
			  	 <div class="row">
			  	 	 <div class="col s12 m12 l4 xl2">
			  	 	 	<!--<h5 class="tab-header"><u>Dashboard</u></h5>-->
			  	 	 	<div class="collection no-border no-margin">
					        <a href="#!" class="collection-item white-text active bg">Juice <i class="material-icons i right text-small">local_bar</i></a></a>
					        <a href="#!" class="collection-item color ">Alcoholic<i class="material-icons right text-small">local_bar</i></a>
					        <a href="#!" class="collection-item color">Fruity <i class="material-icons right text-small">format_color_fill</i></a>
					        <a href="#!" class="collection-item color">Dessert <i class="material-icons right text-small">local_cafe</i></a>
					    </div>
			  	 	 </div>
			  	 	 <div class="col s12 m12 l8 xl10 grey lighten-4">
			  	 	 	<br>
			  	 	 	<br>
			  	 	 </div>
			  	 </div> 
			  </div>
			  <div id="Account" class="col s12">
			  	 <br>
			  	 <br>
			  	 <div class="row">
			  	 	 <div class="col s12 m12 l4 xl2">
			  	 	 	<!--<h5 class="tab-header"><u>Dashboard</u></h5>-->
			  	 	 	<!--<div class="collection no-border no-margin">
					        <a href="#!" class="collection-item white-text active bg">Login <i class="material-icons i right text-small">account_circle</i></a></a>
					        <a href="#!" class="collection-item color ">Register<i class="material-icons right text-small">account_box</i></a>
					        <a href="#!" class="collection-item color">Forgot password? <i class="material-icons right text-small">lock</i></a> 
					    </div>-->
					    <div class="collection no-border no-margin">
					        <a href="#!" class="collection-item white-text active bg">Profile<i class="material-icons i right text-small">account_circle</i></a></a>
					        <a href="#!" class="collection-item color ">Orders<i class="material-icons right text-small">shopping_basket</i></a>
					        <a href="#!" class="collection-item color"> Sign out<i class="material-icons right text-small">power_settings_new</i></a> 
					    </div>
			  	 	 </div>
			  	 	 <div class="col s12 m12 l8 xl10 grey lighten-4">
			  	 	 	<br>
			  	 	 	<br>
			  	 	 </div>
			  	 </div>
			  </div>
			  <div id="About" class="col s12">
			  	   <br>
			  	   <br>
			  	   <div class="row">
			  	 	 <div class="col s12 m12 l4 xl2">
			  	 	 	<!--<h5 class="tab-header"><u>Dashboard</u></h5>-->
			  	 	 	<div class="collection no-border no-margin">
					        <a href="#!" class="collection-item white-text active bg"><?php print APP_NAME ?> <i class="material-icons i right text-small">restaurant</i></a></a>
					        <a href="#!" class="collection-item color ">Contact <i class="material-icons right text-small">email</i></a>
					        <a href="#!" class="collection-item color ">Terms <i class="material-icons right text-small">priority_high</i></a>
					        <a href="#!" class="collection-item color">Privacy <i class="material-icons right text-small">visibility</i></a>
					        <a href="#!" class="collection-item color">Feedback <i class="material-icons right text-small">feedback</i></a>
					    </div>
			  	 	 </div>
			  	 	 <div class="col s12 m12 l8 xl10 grey lighten-4">
			  	 	 	<br>
			  	 	 	<br>
			  	 	 </div>
			  	 </div> 
			  </div> 
			</div>
		</div>
		<div class="col s0 m0 l0 xl1"></div>
	</div>
</body>
</html>