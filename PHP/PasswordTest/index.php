<?php
namespace PWI;
error_reporting(E_ALL);
require '../class/autoload.php';
echo "<h1>Passwords</h1>\n";
echo "<a href=\"..\">back</a><br>\n";
new Trace();

$passwordHash = password_hash("peter", PASSWORD_DEFAULT);
trace('Password hash = ' . $passwordHash);
