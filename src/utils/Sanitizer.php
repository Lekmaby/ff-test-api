<?php

namespace Src\utils;

class Sanitizer
{
	/**
	 * Sanitize $_GET variable
	 * @param $value $_GET variable name
	 * @return int $_GET variable sanitized value
	 */
	public static function getIntParam($value){
		return (int)filter_input(INPUT_GET, $value, FILTER_SANITIZE_NUMBER_INT);
	}
}
