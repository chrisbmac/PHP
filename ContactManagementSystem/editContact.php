
<!DOCTYPE html>
<html>
	<head>
		<title>Edit Contact</title>
	</head>
    <body>
        <form method="POST" action="submitEdit.php">
        <?php
            include 'model.php';
            $arr = displayAll();
            foreach($arr as $i){
                echo "<div>"."<input type='radio' name='editConRad' value='{$i['contactID']}' >".$i['fname'] . $i['lname']. "</div>";
            }
        ?>
            <input type="submit" value="Edit">
        </form>
        <a href="my_menu.php"><button>Go Back</button></a>
    </body>
</html>