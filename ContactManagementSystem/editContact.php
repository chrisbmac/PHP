
<!DOCTYPE html>
<html>
	<head>
		<title>Edit Contact</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
    <body>
        <div class="container">
        <h3>Select a contact to edit</h3>
            <form method="POST" action="submitEdit.php" class="from-group">
            <?php
                include 'model.php';
                $arr = displayAll();
                foreach($arr as $i){
                    echo "<div class='form-control'>"."<input class='form-check-input' type='radio' name='editConRad' value='{$i['contactID']}' >".$i['fname'] . $i['lname']. "</div>";
                }
            ?>
                <input class="btn-success" type="submit" value="Edit">
            </form>
            <a href="my_menu.php"><button class="btn-warning">Go Back</button></a>
        </div>
    </body>
</html>