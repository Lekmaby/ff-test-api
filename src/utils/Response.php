<?php

namespace Src\utils;

class Response
{
	/**
	 * Send json response
	 * @param array $data Data for response
	 * @return void
	 */
	public static function sendJson($data){
		header("Content-Type: application/json");
		header("Access-Control-Allow-Origin: *");
		echo json_encode($data);
		exit();
	}

	/**
	 * Sends error response
	 * @param number $code HTTP status code
	 * @param string $message Optional error message
	 * @return void
	 */
	public static function sendError($code, string $message = ''){
		header("Access-Control-Allow-Origin: *");
		http_response_code($code);
		if($message !== ''){
			echo json_encode(['error' => true, 'message' => $message, 'code' => $code]);
		}
		exit();
	}
}
