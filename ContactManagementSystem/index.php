<?php
    session_start();
    $_SESSION["login"] = FALSE;
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Add a Record</title>
    </head>
	<body>
        <form method="POST" action="login.php">
            <label>Email</label>
            <input type="text" name="email" min-length="8" required>

            <label>Password</label>
            <input type="password" name="password" required>

            <input type="submit" value="Login">
        </form>

    </body>
</html>
