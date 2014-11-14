<?php 
	include 'includes/connection.php';

	$query = "SELECT * FROM people";

	$result = mysql_query($query);

	while($person = mysql_fetch_array($result)) {
		echo "<h3>" . $person['Name'] . "</h3>";
		echo "<p>" . $person['Description'] . "</p>";
	}
?>
<h1>Create a User</h1>
<form action="create.php" method="post">
	Name<input type="text" name="inputName" value="" />
	Description<input type="text" name="inputDesc" value="" />
	<br>
	<input type="submit" name="submit" value="submit" />
</form>