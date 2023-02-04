<?php
namespace Src\controllers;

use Src\utils\Response;

class HomeController {
	/**
	 * Return available routes
	 * @return void
	 */
	public function index(): void
	{
		Response::sendJson(['routes' => [
			['name' => 'index', 'method' => 'GET', 'path' => '/', 'params' => null],
			['name' => 'items', 'method' => 'GET', 'path' => '/items', 'params' => ['limit' => 'number', 'offset' => 'number']],
		]]);
	}
}


