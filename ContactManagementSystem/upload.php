<!DOCTYPE html>
<html>
	<head>
		<title>My Menu</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
        <div class="container">
        <h3>Upload a CSV</h3>
            <form method="POST" action="model.php" enctype="multipart/form-data" class="form-group">
                <div>
                <input type="hidden" name="from" value="file">
                </div>
                <div>
                <label>Upload your file:</label>
                <input class="btn-info" type="file" name="file" required>
                </div>
                <input class="btn-success" type="submit" value="Upload">
            </form>
            <a href="my_menu.php"><button class="btn-warning">Go Back</button></a>
        </div>
	</body>
</html>
