# This package is a PHP routing library.

-- Run composer require kaythinks/kayroute

-- Run composer dump-autoload

-- Create an index.php file 

-- The library can be used this way for example by putting the code below in the index.php file and serving your in-built PHP server (php -S localhost:8000 ).

    <?php

	require_once 'vendor/autoload.php';

	use Kaythinks\KayRoute\Router;

	Router::get('/test',function(){
	    var_dump('I got here');
    });

    Router::get('/','HomeController@getHome');

-- NOTE :- You must have a namespace structure like this App\Controllers\\{The Controller File} to use it with a Controller file. This package has support for autowiring.

To read more about the Router methods, click this link <a href="https://github.com/kaythinks/KayRoute/wiki/Router">Wiki</a>

    
    Apache benchmarking HTTP request result for 100 concurrrent requests:- ab -n 100 -c 100 http://localhost:7879/
	This is ApacheBench, Version 2.3 <$Revision: 1826891 $>
	Copyright 1996 Adam Twiss, Zeus Technology Ltd, http://www.zeustech.net/
	Licensed to The Apache Software Foundation, http://www.apache.org/

	Benchmarking localhost (be patient).....done


	Server Software:        
	Server Hostname:        localhost
	Server Port:            7879

	Document Path:          /
	Document Length:        0 bytes

	Concurrency Level:      100
	Time taken for tests:   0.031 seconds
	Complete requests:      100
	Failed requests:        0
	Total transferred:      16300 bytes
	HTML transferred:       0 bytes
	Requests per second:    3222.69 [#/sec] (mean)
	Time per request:       31.030 [ms] (mean)
	Time per request:       0.310 [ms] (mean, across all concurrent requests)
	Transfer rate:          512.99 [Kbytes/sec] received

	Connection Times (ms)
	              min  mean[+/-sd] median   max
	Connect:        0    2   0.7      2       3
	Processing:     1   14   8.4     16      27
	Waiting:        0   14   8.4     16      27
	Total:          4   16   7.7     18      27

	Percentage of the requests served within a certain time (ms)
	  50%     18
	  66%     21
	  75%     23
	  80%     24
	  90%     26
	  95%     27
	  98%     27
	  99%     27
	 100%     27 (longest request)
