
<!DOCTYPE html>
<html>
    <head>
        <title>Add a Record</title>
    </head>
    <body>
        <form method="POST" action="model.php">
            <input type="hidden" name="from" value="add">

            <label>First Name:</label>
            <input type="text" name="fname" pattern='[a-zA-Z0-9]+' minlength='2' maxlength='50' required>

            <label>Last Name:</label>
            <input type="text" name="lname" pattern='[a-zA-Z0-9]+' minlength='2' maxlength='50' required>

            <label>Email:</label>
            <input type="email" name="email" minlength='10' maxlength='100' required>

            <label>Street Address:</label>
            <input type="text" name="streetaddress" minlength='2' maxlength='100' required>

            <label>City:</label>
            <input type="text" name="city" minlength='2' maxlength='100' required>

            <label>Province:</label>
            <input type="text" name="province" pattern='[a-zA-Z0-9]+' minlength='2' maxlength='100' required>

            <label>Postal Code:</label>
            <input type="text" name="postalcode" pattern='[a-zA-Z0-9]+' minlength='7' maxlength='7' required>

            <label>Phone:</label>
            <input type="number" name="phone" minlength='11' maxlength='12' required>

            <label>Year of Birth:</label>
            <input type="date" name="yob" required>

            <input type="submit" value="Add Record">
            
        </form>
        <a href="my_menu.php"><button>Cancel</button></a>

    </body>
</html>




