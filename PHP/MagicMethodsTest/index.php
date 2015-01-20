<?php
namespace PWI;
error_reporting(E_ALL);
require '../class/autoload.php';
echo "<h1>Magic Methods</h1>\n";
echo "<a href=\"..\">back</a><br>\n";

class Test{

	function __construct()
	{
		echo "<h2>__construct</h2>\n";
		echo "My Constructor<br>\n";
	}
	
	function __toString()
	{
		return "My String";
	}
	
	function __get($prop)
	{
		return "My Property";
	}
	
	function __call($func, $args)
	{
		return "My Function";
	}
	
	function __invoke()
	{
		return "My Object as a callable function";
	}
}

$test = new Test();

// Test __toString 
echo "<h2>__toString</h2>\n";
echo $test . "<br>\n";;

// Test __get
echo "<h2>__get</h2>\n";
echo $test->prop1 . "<br>\n";

// Test __call
echo "<h2>__call</h2>\n";
echo $test->func1() . "<br>\n";

// Test __invoke
echo "<h2>__invoke</h2>\n";
echo $test() . "<br>\n";
