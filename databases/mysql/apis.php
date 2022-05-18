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

// Close mysqli connection.
mysqli_close($conn1);

print PHP_EOL;

/* PDO */
$conn2 = new PDO("mysql:host=$server;dbname=$database", $user, $password);
$query = $conn2->query("SELECT name FROM api;");

// Fetch associative array
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
	print $row['name'] . PHP_EOL;
}

// I read on web that PDO automatically closes connection.

// EOF

