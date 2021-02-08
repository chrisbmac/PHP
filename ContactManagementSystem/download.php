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
		<h3>Down CSV with All Client information</h3>
    		<a href="my_menu.php"><button class="btn-warning">Go Back</button></a>
    		<a href="files/dlClients.csv" download><button class="btn-success">Download</button></a>
		</div>
	</body>
</html>