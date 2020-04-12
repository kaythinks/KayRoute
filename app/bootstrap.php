<?php

require __DIR__ .'/../vendor/autoload.php';

$_SESSION['urls'] = [];

require 'Route.php';

if (isset($_SESSION['urls']) && !in_array($_SERVER['REQUEST_URI'],$_SESSION['urls']) && $_SERVER['REQUEST_URI'] !== '/') {	
	$_SESSION['urls'] = [];
	throw new Exception("This route ".$_SERVER['REQUEST_URI']." doesn't exist in your Application !");	
}
