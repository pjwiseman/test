<?php
namespace PWI;
use Twig_Loader_String;
use Twig_Environment;
error_reporting(E_ALL);
require '../class/autoload.php';
require '../vendor/autoload.php';
$header = new Header('Twig Test');
echo $header;

echo "<body>";

echo "<h1>Twig Test</h1>\n";
echo "<div class=\"back\"><a href=\"..\">back</a></div>\n";
new Trace();
date_default_timezone_set('Australia/Brisbane');

$loader = new Twig_Loader_String();
$twig = new Twig_Environment($loader);


echo <<<EOF
<code>test
		test
</code>
EOF;

$template = <<<EOF
<p>Hello {{ name }}!</p>
<h1>Address</h1>
{{ address.line1|title }}<br>
{{ address.line2 }}
</p>
<h1>Date</h1>
{{ "now"|date }}
EOF;

$address = array(
		'line1' => 'line1',
		'line2' => 'line2' 
		);

$params = array(
	'name' => 'Peter',
	'address' => $address
);

trace(var_export($params, true));

echo $twig->render($template, $params);

echo "</body>";
