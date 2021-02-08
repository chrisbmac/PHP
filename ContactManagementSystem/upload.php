<!DOCTYPE html>
<html>
	<head>
		<title>My Menu</title>
	</head>
	<body>
		<form method="POST" action="model.php" enctype="multipart/form-data">
            <input type="hidden" name="from" value="file">
            <label>Upload your file:</label>
            <input type="file" name="file" required>
			<input type="submit" value="Upload">
		</form>
        <a href="my_menu.php"><button>Go Back</button></a>
	</body>
</html>
