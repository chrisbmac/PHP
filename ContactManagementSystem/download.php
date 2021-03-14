<?php 
    require 'model.php';
    download();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>My Menu</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light"><h3>Down CSV with All Client information</h3></nav>
			<div>
				<h5>Click here to download your contacts information</h5>
					<a href="files/dlClients.csv" download><button class="btn btn-success">Download</button></a>
			</div><br>
			<div>
				<a href="my_menu.php"><button class="btn btn-warning">Go Back</button></a>
			</div>
		</div>
	</body>
</html>