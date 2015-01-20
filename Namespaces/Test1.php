<?php
namespace Peter1;

//use TestA;

class Test
{
	//Constructor
	function Test()
	{
		echo __NAMESPACE__ . "/Test<br>";
	}
}

$test = new TestA();
$test->test();