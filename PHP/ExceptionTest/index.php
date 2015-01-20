<?php
namespace PWI;
use Exception;
error_reporting(E_ALL);
require '../class/autoload.php';
echo "<h1>Exception Test</h1>\n";
echo "<a href=\"..\">back</a><br>\n";


function trace($message)
{
	echo $message . "<br>\n";
}

function exceptionHandler($e)
{
	echo("<div style='background-color: #f88'>");
	trace("<strong>Handling exception:</strong>" . $e->getMessage());
	trace("<strong>File:</strong>" . $e->getFile());
	trace("<strong>Line:</strong>" . $e->getLine());
	trace("<strong>Trace:</strong>");
	foreach($e->getTrace() as $key => $value)
	{
		echo $key . ":" . $value . "<br>\n";
	}
	//var_dump($e);
	echo("</div>");
}

set_exception_handler(__NAMESPACE__ . "\\" . "exceptionHandler");

try
{
	trace("Trying");
	throw new Exception("hello");
}
catch(Exception $e)
{
	trace("Caught " . $e->getMessage());
}
finally
{
	trace("Finally");
}

throw new Exception("Thats all folks");

trace("Got to the end");