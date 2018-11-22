<!DOCTYPE html>
<html>
<head>
	<title> <?php print APP_NAME ?> : Receipt </title>
	<?php require_once 'inc/head.php' ?>
</head>
<body style="overflow: hidden;" class="body">
	<br>
	<div id="notify"></div>
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
				        <li class="tab"><a href="#Receipt" class="active"><i class="material-icons left text-small">receipt</i>
				        	<span class="hide-on-small-only color">Receipt</span></a></li> 
				      </ul>
				    </div>
			  </nav>
			  <div id="Receipt" class="col s12">
				 <br>
			  	 <br>
			  	 <div class="row">
			  	 	 <div class="col s12 m12 l12 xl2">
			  	 	 	<!--<h5 class="tab-header"><u>Dashboard</u></h5>-->
			  	 	 	<div class="collection no-border no-margin">
					        <a href="#!" class="collection-item white-text active bg"> Your receipt below<i class="material-icons i right text-small">person</i></a></a>
					        <a href="#!" class="collection-item color">RECEIPT #120X500897   <i class="material-icons right text-small">receipt</i></a>
					        <a href="#!" class="collection-item color">Paid   <i class="material-icons right text-small">done</i></a> 
					    </div>
			  	 	 </div>
			  	 	 <div class="col s12 m12 l12 xl10 section">   
						<div class="row">  
					    	<div class="row">
					    		<div class="col s0 m0 l1 xl3"></div>
					    		<div class="col s12 m12 l10 xl6 lighten-3 hoverable z-depth-3 no-padding no-margin" id="receipt" style="overflow-x: hidden;">
					    			<div class="r-header ">
					    				<div class="row no-padding no-margin bg z-depth-5" >
					    					<div class="col s12 m12 l12">
					    						<br> <!-- constrain -->
					    					</div>
					    					<div class="col s6 m6 l5 xl5">
					    						<h4 class="white-text font-15"><b><?php print APP_NAME ?></b></h4>
					    						<p class="white-text"><i>&nbsp;info@rezzto.com <br>+237 670 01 02 10</i></p> 
					    						&nbsp;&nbsp;<img src="assets/images/logo.svg" class="circle" width="70"> 
					    						<p class="app-street grey-text text-lighten-3" style="font-size: 17px;font-style: italic;">
					    						 <i class="material-icons i" style="vertical-align: middle;">location_on</i>1087 Clerks quarters,
					    						 <br>
					    						 Great Soppo, Buea, SW
					    						</p>
					    					</div>
					    					<div class="col s0 m6 l2 xl2">
					    						 
					    					</div>
					    					<div class="col s6 m6 l5 xl5">
					    						<h4 class="white-text font-6" style="font-size: 23px;font-weight: bold;">Site Antipas</h4>  
					    						<p class="app-street grey-text text-lighten-3" style="font-size: 16px;text-decoration: underline;">
					    						 +237 654 31 71 88 
					    						</p>
					    						<p class="white-text">
					    							<b>
					    							   <i class="material-icons i" style="vertical-align: middle;">receipt</i>
					    							   RECEIPT: #120X500897
					    						   </b> 
					    						</p> 
					    						<br>
					    						<p class="white-text">
					    							<i class="material-icons i text-small" style="vertical-align: middle;">access_time</i>
					    							<?php print date('D-d-M Y') ?> /
					    							<?php print date('H:i a') ?> 
					    						</p> 
					    						<p> 
					    							<span class="waves-effect white-text"> 
					    							    <b><i class="material-icons i text-small" style="vertical-align: middle;">assistant_photo</i> Status:</b> 
					    							    Awaiting customer
					    						    </span>
					    						</p>
					    					</div>
					    					<div class="col s12 m12 l12">
					    						<div class="bg" style="height: 45px;transform: rotate(5deg);width: 200%;margin-left: -80%;red"></div>
					    					</div> 
					    				</div> 
					    			</div>
					    			<div class="r-body">
					    				<div class="row no-padding no-margin grey lighten-4">
					    					<div class="col s12 m12 l12">
					    						<br>
					    						<br>
					    						<center>
					    							<p style="font-size: 20px" class="color"> 
					    								Site Antipas has paid a total of 8000 Fcfa for meal. 
					    							</p>  
					    						</center>
					    						<table class="centered striped highlight">
										        <thead>
										          <tr>
										              <th>Item Name</th>
										              <th>Quantity</th>
										              <th>Price</th>
										          </tr>
										        </thead> 
										        <tbody>
										          <tr>
										            <td>Fufu &amp; Eru</td>
										            <td>02 Plates</td>
										            <td>2 &times; 2,500 Fcfa</td>
										          </tr> 
										          <tr>
										            <td>Coca-Cola</td>
										            <td>03 Bottles</td>
										            <td>3 &times; 1,000 Fcfa</td>
										          </tr>
										        </tbody>
										      </table>
										      <br>
										      <center>
										      	 <div class="btn btn-large no-shadow bg waves-effect white-text" style="transform: skew(-15deg);">
										      	 	<div style="transform: skew(15deg);">
											      	 	<span style="font-size: 12px!important;"><u>Total</u></span> 
											      	 	&nbsp;
											      	 	<span style="font-size: 22px"> <b>8,000</b> </span>
											      	 	<span style="font-size: 15px!important;">Fcfa</span>
										      	 	</div>
										      	 </div>
										      </center>
					    					</div> 
					    				</div>
					    			</div>
					    			<div class="r-footer grey lighten-4">
					    				<br>
					    				<center>
					    					<p style="font-family: cursive;" class="color">
					    						😊 Thank you for your order! 
					    					</p>
					    				</center>
					    				<br>
					    			</div>
					    		</div>
					    		<div class="col s0 m0 l1 xl3"></div>
					    	</div>
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