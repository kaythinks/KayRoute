<?php

use Kaythinks\KayRoute\Router;


Router::get('/demo/{id}',function(){
	var_dump($_REQUEST['id']);
});