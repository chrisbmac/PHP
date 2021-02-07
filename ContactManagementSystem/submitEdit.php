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
                echo 'this is conarr' . $conArr['fname'];
                echo "<input type='hidden' name='contactID' value='$contactID'>";
                echo "<label>First Name:</label>.
                <input type='text' name='fname' value='{$conArr['fname']}'>.
                <label>Last Name:</label>.
                <input type='text' name='lname'>.
                <label>Email:</label>.
                <input type='email' name='email'>.
                <label>Street Address:</label>.
                <input type='text' name='streetaddress'>.
                <label>City:</label>.
                <input type='text' name='city'>.
                <label>Province:</label>.
                <input type='text' name='province'>.
                <label>Postal Code:</label>.
                <input type='text' name='postalcode'>.
                <label>Phone:</label>.
                <input type='number' name='phone'>.
                <label>Date of Birth:</label>.
                <input type='date' name='yob'>.
                <input type='submit' value='Submit Edit'>";
            ?>
        </form>
        
        <a href="my_menu.php"><button>Cancel</button></a>
    </body>
</html>