<!-- Get an array from form via POST -->

<form action="form_array_variable.php" method="post">
	Nome:  <input type="text" name="personal[name]" /><br />
	<input type="submit" value="Enviar dados!" />
</form>

<?php
if (isset($_POST['personal']['name'])) {
	echo 'Olá, ' . $_POST['personal']['name'] . '!';
}
