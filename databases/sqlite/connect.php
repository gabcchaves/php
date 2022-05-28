<?php

// Database class
class TestDB extends SQLite3 {
	function __construct() {
		$this->open('test.db');
	}
}

// Open or create a database
$db = new TestDB();

// Check if it worked
if (!$db) {
	print $db->lastErrorMsg();
} else {
	print 'Success!\n';
}

// Close connection
$db->close();

// EOF

