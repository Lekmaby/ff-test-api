<?php

namespace Src\utils;

use PHPUnit\Framework\TestCase;

class HaveCorrectFileTest extends TestCase
{

	public function testFirstItemId()
	{
		$data = $this->loadFile();

		$this->assertSame(59, $data[0]['id']);
	}

	public function testItemQty()
	{
		$data = $this->loadFile();

		$this->assertCount(19, $data);
	}

	private function loadFile()
	{
		$file = 'data.json';
		$dataRaw = file_get_contents($file);
		return json_decode($dataRaw, true);
	}
}
