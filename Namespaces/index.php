<?php

?>
<h1>Namespace Test</h1>
<?php
class TestA
{
	//Constructor
	public function Test()
	{
		echo __NAMESPACE__ . "/Test.<br>";
	}
}
	
echo "About to include Test.php<br>";
include "Test.php";
include "Test1.php";

$test = new TestA;
$test->test();
$test = new Peter\Test;
$test->test();
$test1 =  new Peter1\Test;
$test1->test();
?>	
<p>Did it work?</p>