<?php
namespace PWI;
error_reporting(E_ALL);
require '../class/autoload.php';

echo "<h1>Test1</h1>\n";

$dir = new Directory();
$dir->display();
