
<!DOCTYPE html>
<html>
    <head>
        <title>Add a Record</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="container"> 
            <form method="POST" action="model.php" class="form-group">
                <input type="hidden" name="from" value="add">
                <div class="form-control">
                    <label>First Name:</label>
                    <input type="text" name="fname" pattern='[a-zA-Z0-9]+' minlength='2' maxlength='50' required>
                </div>
                <div class="form-control">
                    <label>Last Name:</label>
                    <input type="text" name="lname" pattern='[a-zA-Z0-9]+' minlength='2' maxlength='50' required>
                </div>
                <div class="form-control">
                    <label>Email:</label>
                    <input type="email" name="email" minlength='10' maxlength='100' required>
                </div>
                <div class="form-control">
                    <label>Street Address:</label>
                    <input type="text" name="streetaddress" minlength='2' maxlength='100' required>
                </div>
                <div class="form-control"> 
                    <label>City:</label>
                    <input type="text" name="city" minlength='2' maxlength='100' required>
                </div>
                <div class="form-control">
                    <label>Province:</label>
                    <input type="text" name="province" pattern='[a-zA-Z0-9]+' minlength='2' maxlength='100' required>
                </div>
                <div class="form-control">
                    <label>Postal Code:</label>
                    <input type="text" name="postalcode" pattern='[a-zA-Z0-9]+' minlength='7' maxlength='7' required>
                </div>
                <div class="form-control">
                    <label>Phone:</label>
                    <input type="number" name="phone" minlength='11' maxlength='12' required>
                </div>
                <div class="form-control">
                    <label>Year of Birth:</label>
                    <input type="date" name="yob" required>
                </div>
                <input class="btn-success" type="submit" value="Add Record">
                
            </form>
            <a href="my_menu.php"><button class="btn-warning">Cancel</button></a>
        </div>
    </body>
</html>




