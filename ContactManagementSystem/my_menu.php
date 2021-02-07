<?php 
    session_start();
    if(!$_SESSION["login"]){
        header("Location: index.php", TRUE);
    }
?>

<!DOCTYPE html>
<html>
	<head>
		<title>My Menu</title>
	</head>
	<body>
		<form method="POST" action="logout.php">
			<input type="submit" value="logout">
		</form>
		<h1>My Menu</h1>
		<p><strong>My Music</strong></p>
  
		<ul>
			<li><a href="add.php">Add contact</a></li>
			<li><a href="selectbyyob.php">Order by year of birth</a></li> 
			   (most recent first)
			<li><a href="delete.php">Delete contact</a></li>
			<li><a href="editContact.php">Edit Contacts</a></li>
		</ul>
	</body>
</html>
