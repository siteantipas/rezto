<?php

 define('request', empty(@$_GET['request']) ? 'home' : @$_GET['request']);
 
 require_once 'controller/settings.php';
 require_once 'controller/session.php';
 require_once 'controller/route.php'; 

?>