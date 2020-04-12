# This package is a PHP routing library.

-- Run composer require kaythinks/kayroute

-- Run composer dump-autoload

-- The library can be used this way for example;

    <?php

	require_once 'vendor/autoload.php';

	use Kaythinks\KayRoute\Router;

	Router::get('/',function(){
	    var_dump('I got here');
    });

-- NOTE :- You must have a namespace structure like this App\Controllers\{The Controller File} to use it with a Controller file. This package has support for autowiring.

	To read more about the Router methods, click this link <a href="https://github.com/kaythinks/KayRoute/wiki/Router">Wiki</a>