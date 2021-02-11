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
        <h3>Login</h3>
            <form method="POST" action="login.php" class="form-group">
                <label>Email</label>
                <input class="form-control" type="text" name="email" min-length="8" required>
            
                <label>Password</label>
                <input class="form-control" type="password" name="password" required>
                <br>
                <input type="submit" value="Login" class="btn-success">
            </form>
        </div>

    </body>
</html>
