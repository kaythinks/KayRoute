<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use PHPUnit\Framework\TestCase;
use Kaythinks\KayRoute\Router;

class ExampleTest extends TestCase
{
	public function testGetRequest()
	{
		$_SERVER['REQUEST_METHOD'] = "GET";

		$_SERVER['REQUEST_URI'] = "/demo";

		$data = Router::get('/demo',function(){

			return "/xyz";

		});

		$this->assertEquals('/xyz', $data);
	}

	public function testPosttRequest()
	{
		$_SERVER['REQUEST_METHOD'] = "POST";

		$_SERVER['REQUEST_URI'] = "/demo/test";

		$data = Router::post('/demo/{data}',function(){

			return $_REQUEST['data'];

		});

		$this->assertEquals('test', $data);
	}

	public function testPutRequest()
	{
		$_SERVER['REQUEST_METHOD'] = "PUT";

		$_SERVER['REQUEST_URI'] = "/demo/works";

		$data = Router::put('/demo/{data}',function(){

			return $_REQUEST['data'];

		});

		$this->assertEquals('works', $data);
	}

	public function testPatchRequest()
	{
		$_SERVER['REQUEST_METHOD'] = "PATCH";

		$_SERVER['REQUEST_URI'] = "/demo/works";

		$data = Router::patch('/demo/{data}',function(){

			return $_REQUEST['data'];

		});

		$this->assertEquals('works', $data);
	}

	public function testDeleteRequest()
	{
		$_SERVER['REQUEST_METHOD'] = "DELETE";

		$_SERVER['REQUEST_URI'] = "/demo/works";

		$data = Router::delete('/demo/{data}',function(){

			return $_REQUEST['data'];

		});

		$this->assertEquals('works', $data);
	}
}