<?php
$conn = new mysqli('127.0.0.1', 'test', 'password', 'foo');
print $conn->server_info . PHP_EOL;
print $conn->server_version . PHP_EOL; // Prints version as an integer

// EOF

