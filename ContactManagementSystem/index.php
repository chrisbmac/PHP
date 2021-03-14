<?php
    session_start();
    $_SESSION["login"] = FALSE;
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
	<body>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <h3>Login To Contact Management System</h3>
            </nav>
            <form method="POST" action="login.php" class="form-group">
                <label>User Name</label>
                <input class="form-control" style="width:300px;" type="text" name="email" min-length="8" required>
            
                <label>Password</label>
                <input class="form-control" style="width:300px;" type="password" name="password" required>
                <br>
                <input type="submit" value="Login" class="btn btn-success">
            </form>
        </div>

    </body>
</html>
