<?php
    if(!isset($_POST['editConRad'])){
        header("Location: editContact.php");
    }
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Edit Contact</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
    <body>
        <div class="container">
            <form method="POST" action="model.php" class="form-group">
            <h3>Edit Contact</h3>
                <input type="hidden" name="from" value="edit">
                <?php
                    include 'model.php';
                    $contactID = $_POST['editConRad'];
                    $conArr = selectSingle($contactID);
                
                    echo "<input type='hidden' name='contactID' value='{$contactID}'>";

                    echo "<div class='form-control'><label>First Name:</label>
                    <input type='text' name='fname' value='{$conArr[1]}' pattern='[a-zA-Z0-9- ]+' minlength='2' maxlength='50' required>
                    </div>
                    <div class='form-control'>
                    <label>Last Name:</label>
                    <input type='text' name='lname' value='{$conArr[2]}' pattern='[a-zA-Z0-9- ]+' minlength='2' maxlength='50' required>
                    </div>
                    <div class='form-control'>
                    <label>Email:</label>
                    <input type='email' name='email' value='{$conArr[3]}' minlength='10' maxlength='100' required>
                    </div>
                    <div class='form-control'>
                    <label>Street Address:</label>
                    <input type='text' name='streetaddress' value='{$conArr[4]}' minlength='2' maxlength='100' required>
                    </div>
                    <div class='form-control'>
                    <label>City:</label>
                    <input type='text' name='city' value='{$conArr[5]}' pattern='[a-zA-Z0-9]+' minlength='2' maxlength='100' required>
                    </div>
                    <div class='form-control'>
                    <label>Province:</label>
                    <input type='text' name='province' value='{$conArr[6]}' pattern='[a-zA-Z0-9- ]+' minlength='2' maxlength='100' required>
                    </div>
                    <div class='form-control'>
                    <label>Postal Code:</label>
                    <input type='text' name='postalcode' value='{$conArr[7]}' pattern='[a-zA-Z0-9- ]+' minlength='7' maxlength='7' required>
                    </div>
                    <div class='form-control'>
                    <label>Phone:</label>
                    <input type='number' name='phone' value='{$conArr[8]}' minlength='10' maxlength='12' required>
                    </div>
                    <div class='form-control'>
                    <label>Date of Birth:</label>
                    <input type='date' name='yob' value='{$conArr[9]}' minlength='10' maxlength='10' required>
                    </div>
                    <input class='btn-success' type='submit' value='Submit Edit'>";
                ?>
            </form>
            <a href="my_menu.php"><button class='btn-warning'>Cancel</button></a>
        </div>
    </body>
</html>