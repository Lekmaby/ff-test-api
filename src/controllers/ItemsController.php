<?php

namespace Src\controllers;

use Src\utils\File;
use Src\utils\Response;
use Src\utils\Sanitizer;

class ItemsController
{
	/**
	 * Return page of items
	 * @return void
	 */
	public function index(): void
	{
		$offset = Sanitizer::getIntParam('offset');
		$limit = Sanitizer::getIntParam('limit');

		// todo move to .env
		$file = 'data.json';


		// validating input params
		if (!$limit || $limit < 1) {
			Response::sendError(400, 'Необходимо задать параметр limit. От 1 до 100');
		}
		if ($limit > 100) {
			$limit = 100;
		}

		$data = File::loadFile($file);
		$total = count($data);
		$result = array_slice($data, $offset, $limit);

		Response::sendJson([
			'offset' => $offset,
			'limit'  => $limit,
			'total'  => $total,
			'data'   => $result,
		]);
	}
}
