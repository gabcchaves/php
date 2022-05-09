<?php
// Create cookies
if (!isset($_COOKIE['Cookie']['foo'])) {
	setcookie("Cookie[foo]", 'Cookie criado.', time() + 2);
}

// Delete cookie
unset($_COOKIE['Cookie']['foo']);
