<?php


define('HOST', $_SERVER['HTTP_HOST']); # DO NOT CHANGE THIS
define('APP_NAME', 'Rezzto'); # Change to your project name
define('ROOT', '/'); # If project was added to a sub folder in your htdocs, change this to that sub folder where you have installed the project e.g /my-application/
define('SERVER_ROOT', $_SERVER['DOCUMENT_ROOT']); 
					 # NOTICE: make sure it starts and ends with with a / 
define('APP_URL', 'http://'.HOST.ROOT); #  Please, DO NOT CHANGE THIS
define('APP_EMAIL', 'Info@antipas.site');  # In case you want to change this, make sure you change it to a valid email address 

define('COLOR', 'purple-text darken-3');
define('BG', 'purple darken-3');
define('HEX', '#6a1b9a');

define('YEAR', date('Y'));