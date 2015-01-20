<?php
namespace PWI\Tests\AutoloadTest;
use PWI\Directory;

class MyException extends \Exception {}

class AutoloadTest extends \PHPUnit_Framework_TestCase
{
	function testAutoloadDirectoryClass()
	{
		$dir = new Directory();

		if (get_class($dir) != 'PWI\Directory')
			throw new \Exception("Test failure");
	}
	
}
