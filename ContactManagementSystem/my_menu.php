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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
            
        <div class="container"> 
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <h1 style="margin-right:50px;">Main Menu</h1>
                    <form method="POST" action="logout.php">
                        <input class="btn btn-warning" type="submit" value="logout">
                    </form>
            </nav>
            <h5 class="text-secondary">Select from the below options</h5>
            <ul class="list-group">
                <li class="list-group-item" style="width:400px;">><a href="add.php"> Add contact</a></li>
                <li class="list-group-item" style="width:400px;">><a href="selectbyyob.php"> Order by year of birth</a></li> 
                <li class="list-group-item" style="width:400px;">><a href="delete.php"> Delete contact</a></li>
                <li class="list-group-item" style="width:400px;">><a href="editContact.php"> Edit Contacts</a></li>
                <li class="list-group-item" style="width:400px;">><a href="email.php"> Email Contacts</a></li>
                <li class="list-group-item" style="width:400px;">><a href="download.php"> Download Clients info</a></li>
                <li class="list-group-item" style="width:400px;">><a href="upload.php"> Upload Clients info</a></li>
                <li class="list-group-item" style="width:400px;">><a href="showall.php"> Display All</a></li>
            </ul>
        </div>
	</body>
</html>
