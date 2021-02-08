<?php
    if(!isset($_POST['editConRad'])){
        header("Location: editContact.php");
    }
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Edit Contact</title>
	</head>
    <body>
        <form method="POST" action="model.php">
            <input type="hidden" name="from" value="edit">
            <?php
                include 'model.php';
                $contactID = $_POST['editConRad'];
                $conArr = selectSingle($contactID);
               
                echo "<input type='hidden' name='contactID' value='{$contactID}'>";
                echo "<label>First Name:</label>
                <input type='text' name='fname' value='{$conArr['fname']}'  pattern='[a-zA-Z0-9- ]+' minlength='2' maxlength='50'>
                <label>Last Name:</label>
                <input type='text' name='lname' value='{$conArr['lname']}' pattern='[a-zA-Z0-9- ]+' minlength='2' maxlength='50'>
                <label>Email:</label>
                <input type='email' name='email' value='{$conArr['email']}' minlength='10' maxlength='100'>
                <label>Street Address:</label>
                <input type='text' name='streetaddress' value='{$conArr['streetaddress']}' minlength='2' maxlength='100'>
                <label>City:</label>
                <input type='text' name='city' value='{$conArr['city']}' pattern='[a-zA-Z0-9]+' minlength='2' maxlength='100'>
                <label>Province:</label>
                <input type='text' name='province' value='{$conArr['province']}' pattern='[a-zA-Z0-9- ]+' minlength='2' maxlength='100'>
                <label>Postal Code:</label>
                <input type='text' name='postalcode' value='{$conArr['postalcode']}' pattern='[a-zA-Z0-9- ]+' minlength='7' maxlength='7'>
                <label>Phone:</label>
                <input type='number' name='phone' value='{$conArr['phone']}' minlength='10' maxlength='12'>
                <label>Date of Birth:</label>
                <input type='date' name='yob' value='{$conArr['yob']}' minlength='10' maxlength='10'>
                <input type='submit' value='Submit Edit'>";
            ?>
        </form>
        
        <a href="my_menu.php"><button>Cancel</button></a>
    </body>
</html>