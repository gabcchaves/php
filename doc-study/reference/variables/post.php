<!-- Get data from an HTML form using POST method-->

<form action="external_variables.php" method="post">
    Nome:  <input type="text" name="username" /><br />
    Email: <input type="text" name="email" /><br />
    <input type="submit" name="submit" value="Me aperte!" />
</form>

<?php
echo $_POST['username'];
echo $_REQUEST['username'];
?>
