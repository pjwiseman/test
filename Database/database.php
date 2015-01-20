<?php

define('DEBUG',1);

class Database
{
	private $db;
	private $result;
	
	function __construct()
	{
		// Connect to host
		$this->db = mysqli_connect() or die("Could not connect: " . mysqli_error());
		if (DEBUG) echo "Connected successfully<br>";
		
		// Select the database
		mysqli_select_db($this->db, 'test') or die ("Could not select: " . mysqli_error());
		if (DEBUG) echo "Selected database successfully<br>";
	}

	function query($query)
	{
		$this->result = mysqli_query($this->db, $query) or die ("Query failed: " . mysqli_error() . "<br>");
		if (DEBUG) echo "Query executed successfully<br>";		
	}
	
	function fetch()
	{
		$line = mysqli_fetch_array($this->result, MYSQL_ASSOC);
		
		return $line;
	}
	
	function __destruct()
	{
		if ($this->result)
		{
			// Free the query
			mysqli_free_result($this->result);
		}

		// Free the connection
		mysqli_close($this->db);
	}
}

$DB = new Database();

function query($query)
{
	global $DB;
	$DB->query($query);
}

function fetch()
{
	global $DB;
	return $DB->fetch();
}