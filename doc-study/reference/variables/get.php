<!-- Get data from form via GET method. -->
<form action="get.php" method="get">
    Nome:  <input type="text" name="username" /><br />
    Email: <input type="text" name="email" /><br />
    <input type="submit" name="submit" value="Me aperte!" />
</form>

<?php
if (isset($_GET['username']))
	echo 'Hello, ' . $_GET['username'];
?>
