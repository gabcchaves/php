<?php

class TestDB extends SQLite3 {
	function __construct() {
		$this->open('test.db');
	}
}

$db = new TestDB();
if (!$db) {
	print $db->lastErrorMsg();
	return -1;
}

$sql =<<<EOF
	UPDATE Team
	SET Name = 'Uptested'
	WHERE ID = 2;	
EOF;

$ret = $db->exec($sql);
if (!$ret) {
	print $db->lastErrorMsg();
	return -1;
}

$sql = 'SELECT * FROM Team';
$ret = $db->query($sql);
while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
	print "===================================\n";
	print "ID = " . $row['ID'] . "\n";
	print "Nome = " . $row['Name'] . "\n";
	print "Telefone = " . $row['Phone'] . "\n\n";
}

print "===================================\n";
print "\nOperação concluída!\n";
$db->close();

// EOF

