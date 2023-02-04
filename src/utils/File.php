<?php

namespace Src\utils;

class File
{
	/**
	 * Load JSON file
	 * @param $path file path
	 * @return array
	 */
	public static function loadFile($path): array{
		if (!file_exists($path)) {
			Response::sendError(404, 'Данные не обнаружены');
		}

		$data = file_get_contents($path);

		return json_decode($data, true);
	}
}
