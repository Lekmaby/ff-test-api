<?php

use Src\controllers\HomeController;
use Src\controllers\ItemsController;
use Src\utils\Response;

require __DIR__ . '/src/autoload.php';

$requestMethod = strtoupper($_SERVER['REQUEST_METHOD']);
$uri = parse_url($_SERVER['REQUEST_URI']);

$allowedMethods = [
	'GET',
];

if (!in_array($requestMethod, $allowedMethods)) {
	Response::sendError(405, 'Метод недоступен');
}

switch ($uri['path']) {

	case '':
	case '/':
		$ctrl = new HomeController();
		$ctrl->index();
		break;

	case '/items':
		$ctrl = new ItemsController();
		$ctrl->index();
		break;

	default:
		Response::sendError(404, 'Маршрут не найден');
		break;
}

exit();
