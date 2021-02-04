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
			<li><a href="sel_byid.php">ordered by ID</a></li>
			<li><a href="sel_bydateacq.php">ordered by date acquired</a></li> 
			   (most recent first)
			<li><a href="sel_bytitle.php">ordered by title</a></li>
			<li><a href="sel_byartist.php">ordered by artist</a></li>
		</ul>
	</body>
</html>

