<!-- Submit data by clicking an image -->
<form action="submit_image.php" method="post">
	Nome: <input name="name" type="text"><br>
	<input type="image" src="submit.png" name="sub">
</form>

<?php
if (isset($_POST['name'])) {
	[$x, $y] = array($_POST['sub_x'], $_POST['sub_y']);
	echo 'Olá, ' . $_POST['name'] . '!' . '<br>';
	echo 'Você clicou nas coordenadas (' .$x. ', ' .$y. ') da imagem.';
}
?>
