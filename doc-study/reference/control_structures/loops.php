<?php
// While
$i = 0;
while ($i < 10) {
	print $i . ' ';
	$i++;
}
print PHP_EOL;

// Do while
$i = 0;
do {
	print $i . PHP_EOL;	
} while ($i > 0);

// For
for ($i = 0; $i < 10; $i++) {
	print $i . ' ';
}
print PHP_EOL;

// Foreach
$a = array('a' => 'Apple', 'b' => 'Banana', 'c' => 'Carrot');
foreach ($a as $value) {
	print $value . ' ';
}
print PHP_EOL;

// Usage of continue keyword
for ($i = 0; $i < 10; $i++) {
	if ($i % 2 == 0) print $i . ' ';
	else continue;
}
print PHP_EOL;

// EOF

