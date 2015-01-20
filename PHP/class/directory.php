<?php
namespace PWI;

const PWI_BASE_PATH = 'C:\Data\Peter\Test\PHP';

class Directory
{
	function isroot()
	{
		return realpath('.') == 'C:\Data\Peter\Test\PHP';
	}
	
	public function display()
	{
		$realpath = realpath(".");
		$relativePath = str_replace(PWI_BASE_PATH, '', $realpath); 
		$relativePath = ltrim($relativePath, "\\");
		$prefix = $relativePath . "/";
		echo "RealPath = " . realpath(".") . "<br>\n";
		echo "RelativePath = " . $relativePath . "<br>\n";
		// List directories
		$d = dir(".");
		while (false !== ($entry = $d->read())) {
			if ($entry == ".") continue;
			if ($this->isroot() && $entry == "..") continue;
			
			echo "<a href=\"${prefix}${entry}\">$entry</a><br>\n";
		}
		$d->close();
	}
}
