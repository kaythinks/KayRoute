# This package is a PHP routing library.

-- Run composer require kaythinks/kayroute

-- Run composer dump-autoload

-- Create an index.php file 

-- The library can be used this way for example by putting the code below in the index.php file and serving your in-built PHP server (php -S localhost:8000 );

    <?php

	require_once 'vendor/autoload.php';

	use Kaythinks\KayRoute\Router;

	Router::get('/',function(){
	    var_dump('I got here');
    });

    Router::get('/','HomeController@getHome');

-- NOTE :- You must have a namespace structure like this App\Controllers\{The Controller File} to use it with a Controller file. This package has support for autowiring.

To read more about the Router methods, click this link <a href="https://github.com/kaythinks/KayRoute/wiki/Router">Wiki</a>