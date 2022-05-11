<?php
/* Constante global */
define('PI', 3.1415);

/* Constante de classe */
class SomeClass {
	public const constante = 3;
}

echo SomeClass::constante . PHP_EOL;

/* Constantes magicas */
// Sao constantes predefinidas 
echo 'Versao do PHP: ' . PHP_VERSION . PHP_EOL;

echo 'Linha sendo executada: ' . __LINE__ . PHP_EOL;
echo 'Nome do arquivo: ' . __FILE__ . PHP_EOL;

// EOF

