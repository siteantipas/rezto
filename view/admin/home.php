<!DOCTYPE html>
<html>
<head>
	<title> <?php print APP_NAME ?> :: Welcome </title>
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
<body class="body" style="overflow: hidden;">
	<br>
	<div class="fixed-action-btn vertical click-to-toggl">
	    <a class="btn-floating btn-large red waves-effect waves-light bg">
	      <i class="material-icons i">menu</i>
	    </a>
	    <ul>
	      <li><a class="btn-floating red"><i class="material-icons i">insert_chart</i></a></li>
	      <li><a class="btn-floating yellow darken-1"><i class="material-icons i">format_quote</i></a></li>
	      <li><a class="btn-floating green"><i class="material-icons i">publish</i></a></li>
	      <li><a class="btn-floating blue"><i class="material-icons i">attach_file</i></a></li>
	    </ul>
	</div>
	<div class="row">
		<div class="col s0 m0 l0 xl1"></div>
		<div class="col s12 m12 l12 xl10">
			<div class="striped white z-depth-3" style="height: 900px;overflow-x: hidden;padding: 10px;border-radius: 5px;">
				<nav class="nav-extended no-shadow transparent">
				    <div class="nav-wrapper">
				      <a href="" class="brand-logo color" style="font-family: sans-serif;">&nbsp;&nbsp;<?php print APP_NAME ?></a>
				      <a href="#" data-activates="mobile-nav" class="button-collapse"><i class="material-icons">menu</i></a>
				      <ul id="nav-mobile" class="right hide-on-med-and-down">
				        <li><a href="sass.html" class="transparent color"><i class="material-icons text-small left">info</i>About</a></li>
				        <li><a href="badges.html" class="transparent color"><i class="material-icons text-small left">account_circle</i> Account</a></li>
				        <li><a href="collapsible.html" class="transparent color"><i class="material-icons text-small left">power_settings_new</i> Sign out</a></li>
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
				        <li class="tab"><a href="#Dashboard" class="active"><i class="material-icons left text-small">dashboard</i>
				        	<span class="hide-on-small-only color">Dashboard</span></a></li>
				        <li class="tab"><a href="#Orders"><i class="material-icons left text-small">kitchen</i>
				        	<span class="hide-on-small-only color">Orders</span></a></li>
				        <li class="tab"><a href="#Customers"><i class="material-icons left text-small">supervisor_account</i>
				        	<span class="hide-on-small-only color">Customers</span></a></li>
				        <li class="tab"><a href="#Meals"><i class="material-icons left text-small">restaurant</i>
				        	<span class="hide-on-small-only color">Meals</span></a></li>
				        <li class="tab"><a href="#Settings"><i class="material-icons left text-small">settings</i>
				        	<span class="hide-on-small-only color">Settings</span></a></li>
				      </ul>
				    </div>
			  </nav>
			  <div id="Dashboard" class="col s12">
			  	 <br>
			  	 <br>
			  	 <div class="row">
			  	 	 <div class="col s12 m12 l4 xl2">
			  	 	 	<!--<h5 class="tab-header"><u>Dashboard</u></h5>-->
			  	 	 	<div class="collection no-border no-margin">
					        <a href="#!" class="collection-item white-text active bg">Notifications <i class="material-icons i right text-small">notifications</i></a></a>
					        <a href="#!" class="collection-item color ">Statistics <i class="material-icons right text-small">timeline</i></a>
					        <a href="#!" class="collection-item color">Advertise <i class="material-icons right text-small">assignment</i></a>
					        <a href="#!" class="collection-item color">Notes <i class="material-icons right text-small">insert_invitation</i></a>
					    </div>
			  	 	 </div>
			  	 	 <div class="col s12 m12 l8 xl10 grey lighten-4">
			  	 	 	<br>
			  	 	 	<br>
			  	 	 </div>
			  	 </div>
			  </div>
			  <div id="Orders" class="col s12">
			  	 <br>
			  	 <br>
			  	 <div class="row">
			  	 	 <div class="col s12 m12 l4 xl2">
			  	 	 	<!--<h5 class="tab-header"><u>Dashboard</u></h5>-->
			  	 	 	<div class="collection no-border no-margin">
					        <a href="#!" class="collection-item white-text active bg">New <i class="material-icons i right text-small">kitchen</i></a></a>
					        <a href="#!" class="collection-item color ">Approved <i class="material-icons right text-small">thumb_up</i></a>
					        <a href="#!" class="collection-item color ">Processed <i class="material-icons right text-small">done</i></a>
					        <a href="#!" class="collection-item color"> Cancelled  <i class="material-icons right text-small">clear</i></a>
					    </div>
			  	 	 </div>
			  	 	 <div class="col s12 m12 l8 xl10 grey lighten-4">
			  	 	 	<br>
			  	 	 	<br>
			  	 	 </div>
			  	 </div>
			  </div>
			  <div id="Customers" class="col s12">
			  	 <br>
			  	 <br>
			  	 <div class="row">
			  	 	 <div class="col s12 m12 l4 xl2">
			  	 	 	<!--<h5 class="tab-header"><u>Dashboard</u></h5>-->
			  	 	 	<div class="collection no-border no-margin">
					        <a href="#!" class="collection-item white-text active bg">New <i class="material-icons i right text-small">person</i></a></a>
					        <a href="#!" class="collection-item color ">Regular <i class="material-icons right text-small">refresh</i></a> 
					    </div>
			  	 	 </div>
			  	 	 <div class="col s12 m12 l8 xl10 grey lighten-4">
			  	 	 	<br>
			  	 	 	<br>
			  	 	 </div>
			  	 </div>
			  </div>
			  <div id="Meals" class="col s12">
			  	 <br>
			  	 <br>
			  	 <div class="row">
			  	 	 <div class="col s12 m12 l4 xl2">
			  	 	 	<!--<h5 class="tab-header"><u>Dashboard</u></h5>-->
			  	 	 	<div class="collection no-border no-margin">
					        <a href="#!" class="collection-item white-text active bg">All <i class="material-icons i right text-small">room_service</i></a></a>
					        <a href="#!" class="collection-item color ">Add <i class="material-icons right text-small">add</i></a>
					        <a href="#!" class="collection-item color">Edit <i class="material-icons right text-small">mode_edit</i></a> 
					    </div>
			  	 	 </div>
			  	 	 <div class="col s12 m12 l8 xl10 grey lighten-4">
			  	 	 	<br>
			  	 	 	<br>
			  	 	 </div>
			  	 </div> 
			  </div>
			  <div id="Settings" class="col s12">
			  	 <br>
			  	 <br>
			  	 <div class="row">
			  	 	 <div class="col s12 m12 l4 xl2">
			  	 	 	<!--<h5 class="tab-header"><u>Dashboard</u></h5>-->
			  	 	 	<div class="collection no-border no-margin">
					        <a href="#!" class="collection-item white-text active bg"><?php print APP_NAME ?><i class="material-icons i right text-small">store</i></a></a>
					        <a href="#!" class="collection-item color ">Account <i class="material-icons right text-small">account_circle</i></a>
					        <a href="#!" class="collection-item color ">Support <i class="material-icons right text-small">help</i></a>
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