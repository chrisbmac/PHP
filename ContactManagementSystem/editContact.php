
<!DOCTYPE html>
<html>
	<head>
		<title>Edit Contact</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
    <body>
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light"><h3>Select a contact to edit</h3></nav>
        <div class="text-secondary">---------------------------------------</div>
            <form method="POST" action="submitEdit.php" class="form-group">
            <?php
                include 'model.php';
                $arr = displayAll();
                foreach($arr as $i){
                    echo "<div>"."<input class='btn-check' type='radio' name='editConRad' id='{$i['contactID']}' value='{$i['contactID']}' >"."<label class='btn btn-secondary' for='{$i['contactID']}'>".$i['fname']." " . $i['lname']."</label>" ."</div>";
                }
            ?>
            <div class="text-secondary">---------------------------------------</div>
                <br>
                <input class="btn btn-success" type="submit" value="Edit">
            </form>
            
            <a href="my_menu.php"><button class="btn btn-warning">Go Back</button></a>
        
        </div>
    </body>
</html>