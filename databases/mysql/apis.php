<?php
$server = '127.0.0.1';
$user = 'test';
$password = 'password';
$database = 'foo';
/* mysqli */
$conn1 = new mysqli($server, $user, $password, $database);
$result = $conn1->query("SELECT name FROM api;");

// Fetch associative array
while ($row = $result->fetch_assoc()) {
	print $row['name'] . PHP_EOL;
}

// EOF

