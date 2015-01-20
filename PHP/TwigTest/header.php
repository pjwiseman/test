<?php
namespace PWI;
class Header
{
	private $title;
	
	function __construct($title = "")
	{
		$this->title = $title;
	}
	
	function __toString()
	{
		$title = $this->title;
		
		return <<<EOF
<!DOCTYPE html>
<head>
	<link rel="stylesheet" type="text/css" href="/TwigTest/style.css">
	<title>$title</title>
</head>
EOF;
	}
	
}