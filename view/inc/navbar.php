<nav class="nav-extended no-shadow transparent">
    <div class="nav-wrapper">
      <a href="" class="brand-logo color">&nbsp;&nbsp; <?php print APP_NAME ?></a>
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
        <li class="tab"><a href="#Meals" ><i class="material-icons left text-small">restaurant_menu</i>
        	<span class="hide-on-small-only color">Meals</span></a></li>
        <li class="tab"><a href="#Drinks"><i class="material-icons left text-small">local_bar</i>
        	<span class="hide-on-small-only color">Drinks</span></a></li>	
        <li class="tab"><a href="#Account" class="active"><i class="material-icons left text-small">account_circle</i>
        	<span class="hide-on-small-only color">My account</span></a></li>	
        <li class="tab"><a href="#About"><i class="material-icons left text-small">info</i>
        	<span class="hide-on-small-only color">About</span></a></li>
      </ul>
    </div>
</nav>