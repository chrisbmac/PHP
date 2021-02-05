
<!DOCTYPE html>
<html>
    <head>
        <title>Add a Record</title>
    </head>
    <body>
        <form method="POST" action="model.php">
            <input type="hidden" name="from" value="add">

            <label>First Name:</label>
            <input type="text" name="fname" required>

            <label>Last Name:</label>
            <input type="text" name="lname" required>

            <label>Email:</label>
            <input type="email" name="email" required>

            <label>Street Address:</label>
            <input type="text" name="streetaddress" required>

            <label>City:</label>
            <input type="text" name="city" required>

            <label>Privince:</label>
            <input type="text" name="province" required>

            <label>Postal Code:</label>
            <input type="text" name="postalcode" required>

            <label>Phone:</label>
            <input type="number" name="phone" required>

            <label>Year of Birth:</label>
            <input type="date" name="yob" required>

            <input type="submit" value="Add Record">
            
        </form>
        <a href="my_menu.php"><button>Cancel</button></a>

    </body>
</html>




