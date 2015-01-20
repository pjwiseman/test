<?php
namespace PWI;
class Trace
{
	function __invoke()
	{
		echo "Invoked";
	}
}

function trace($message)
{
	echo '<code>';
	echo $message . "<br>\n";
	echo '</code>';
}