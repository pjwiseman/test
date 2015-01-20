<?php
namespace PWI;
use DateTime;
error_reporting(E_ALL);
require '../class/autoload.php';
echo "<h1>Date Test</h1>\n";
echo "<a href=\"..\">back</a><br>\n";

date_default_timezone_set('Australia/Brisbane');
$date = new DateTime();
$start = clone $date;
echo $date->format('d-m-y') . "<br>\n";

$date->add(new \DateInterval('P2D'));
$end = clone $date;
echo $date->format('d-m-y') . "<br>\n";

echo "<h2>Comparison</h2>\n";
echo $start->format('d-m-y') . "<br>\n";
echo $end->format('d-m-y') . "<br>\n";
echo ($end > $start) ? 'true' : 'false';
echo "<br>\n";
