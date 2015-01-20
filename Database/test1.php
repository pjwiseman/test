<style>
table { 
	border: solid 1px #440;
	border-collapse: collapse;
	color: #884;
}
td,th {
	border: solid 1px #420;
	padding: 3px;
	min-width: 10em;
}
</style>
<h1>Basic Database Test</h1>
<?php
include 'common.php';
include 'database.php';

// Perform a query
$query = "SzELECT * FROM test1";
query($query);
	
// Display the results
echo "<table>\n";
$line_number = 1;
while ($line = fetch())
{
	if ($line_number == 1)
	{
		echo "\t<tr>\n";
		foreach ($line as $key => $value)
		{
			echo "\t\t<th>$key</th>\n";
		}
		echo "\t</tr>\n";
	}
	
	echo "\t<tr>\n";
	foreach ($line as $key => $value)
	{
		echo "\t\t<td>$value</td>\n";
	}
	echo "\t<tr>\n";
	
	$line_number++;
}
echo "</table>\n";

	
