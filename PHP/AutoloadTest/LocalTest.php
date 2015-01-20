<?php
namespace PWI;
include "../class/autoload.php";
echo "<h1>Test Class Loading</h1>\n";

echo "<h2>Local Class</h2>\n";
$local = new LocalClass();
$local->test();

echo "<h2>Library Class</h2>\n";
$dir = new Directory();
$dir->display();
