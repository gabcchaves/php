<?php
// if
if (1 < 2) var_dump(true);

// if else
if (1 > 2) var_dump(true);
else var_dump(false);

// else if/elseif
$a = 2;
if ($a == 1) print "a = 1" . "\n";
else if ($a == 2) print "a = 2" . "\n";
else print "Don't know." . "\n";

// Alternative syntax
if ($a == 2):
	echo 'a = 2' . PHP_EOL;
else:
	echo 'Unknown' . PHP_EOL;
endif;

// Switch
$a = 2;
switch ($a) {
	case 0:
		print '0' . PHP_EOL;
		break;
	case 1:
		print '1' . PHP_EOL;
		break;
	case 2:
		print '2' . PHP_EOL;
		break;
	default:
		print 'Unknown' . PHP_EOL;
}
