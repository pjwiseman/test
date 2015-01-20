<?

spl_autoload_register(function($class) {
	$debug = 0;
	if ($debug) {
		echo "Loading class: $class<br>\n";
		echo "Dir = " . __DIR__ . "<br>\n";
		echo "Realpath = " . realpath(".") . "<br>\n";
		echo "CWD = " . getcwd() . "<br>\n";
	}
	
	// Strip namespace
	$class = str_replace('PWI\\', '', $class);

	// Load the class (local)
	$file = $class . '.php';
	if ($debug) echo "Trying $class in $file...";
	if (file_exists($file)) {
		include $file;
		return;
	}

	// Load the class (library)
	$file = 'c:/data/peter/test/php/class/' . $class . '.php';
	if (file_exists($file)) {
		include $file;
		return;
	}

	
});