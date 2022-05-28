<?php

class TestDB extends SQLite3 {
	function __construct() {
		$this->open('test.db');
	}
}

$db = new TestDB();
if (!$db) {
	print "Falha na conexão com DB.\n";
	return -1;
}

$sql =<<<EOF
	SELECT * FROM Team;
EOF;

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

