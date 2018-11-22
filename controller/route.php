<?php

require_once './model/database-query.php';

class Route extends AccountSession
{
	
	protected static $pages = [
		'home',
		'admin',
		'receipt',
	];

	function __construct()
	{		
	  global $DB;
	  	
	  if (in_array(request, Route::$pages)) 
	  {
	  	  if (request == 'admin') 
	  	  {
	  	  	 // Restaurant Administrator
	  	  	 if(true /* admin session is active */)
	  	  	 {
	  	  		require_once 'view/admin/home.php';
	  	  	 }
	  	  	 else
	  	  	 {
	  	  		require_once 'view/admin/login.php';
	  	  	 }
	  	  } 
	  	  else 
	  	  {
	  	  	 // Restaurant Visitor
	  	  	 require_once 'view/'.request.'.php';
	  	  }
	  }
	  else 
	  {
	  	 require_once 'view/404.php';
	  }
	}
}

new Route;