<?php
namespace PWI;

error_reporting(E_ALL);
//require 'classes/directory.php';
require 'class/autoload.php';

// Heading
echo <<<EOF
<!DOCTYPE html>
<h1>PHP Testing</h1>
EOF;

// Directory
$dir = new Directory();
$dir->display();
