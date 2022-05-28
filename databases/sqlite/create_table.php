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
	CREATE TABLE IF NOT EXISTS Team(
		ID INT PRIMARY KEY NOT NULL,
		Name TEXT NOT NULL,
		Phone CHAR(12)
	);
EOF;

$ret = $db->exec($sql);
if (!$ret) {
	print $db->lastErrorMsg();
	return -1;
}

print "Tabela criada\n";
$db->close();

// EOF

