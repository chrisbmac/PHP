<!DOCTYPE html>
<html>
	<head>
		<title>My Menu</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light"><h3>Upload a CSV</h3></nav><br>
            <form method="POST" action="model.php" enctype="multipart/form-data" class="form-group">
                <div>
                <h5>Upload a file with contacts information.</h5><br>
                <input type="hidden" name="from" value="file">
                </div>
                <div>
                <label class="text-secondary">Upload your file:</label>
                <input class="btn-info" type="file" name="file" required>
                </div>
                <input class="btn btn-success" type="submit" value="Upload">
            </form>
            <a href="my_menu.php"><button class="btn btn-warning">Go Back</button></a>
        </div>
	</body>
</html>
