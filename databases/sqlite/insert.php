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
	INSERT INTO Team VALUES (1, 'Test Testson', '012345678910');
	INSERT INTO Team VALUES (2, 'Testin Testcher', '012345678910');
	INSERT INTO Team VALUES (3, 'Testuart Testrong', '012345678910');
EOF;

$ret = $db->exec($sql);
if (!$ret) {
	print "Falha na inserção\n";
	return -1;
}

print "Dados inseridos!\n";

// EOF

