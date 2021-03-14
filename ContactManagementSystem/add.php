
<!DOCTYPE html>
<html>
    <head>
        <title>Add a Record</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="container"> 
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <h5 style="margin-right:50px;">Add A Contact</h5>
            </nav>
            <form method="POST" action="model.php" >
                <input type="hidden" name="from" value="add">
                <div class="form-group">
                    <label>First Name:</label>
                    <input class="form-control" style="width:350px" type="text" name="fname" pattern='[a-zA-Z0-9]+' minlength='2' maxlength='50' required>
                
                
                    <label>Last Name:</label>
                    <input class="form-control" style="width:350px" type="text" name="lname" pattern='[a-zA-Z0-9]+' minlength='2' maxlength='50' required>
                
                
                    <label>Email:</label>
                    <input class="form-control" style="width:350px" type="email" name="email" minlength='10' maxlength='100' required>
                
                
                    <label>Street Address:</label>
                    <input class="form-control" style="width:350px" type="text" name="streetaddress" minlength='2' maxlength='100' required>
                 
                    <label>City:</label>
                    <input class="form-control" style="width:350px" type="text" name="city" minlength='2' maxlength='100' required>
                
                    <label>Province:</label>
                    <input class="form-control" style="width:350px" type="text" name="province" pattern='[a-zA-Z0-9]+' minlength='2' maxlength='100' required>
                
                    <label>Postal Code:</label>
                    <input class="form-control" style="width:350px" type="text" name="postalcode" pattern='[a-zA-Z0-9]+' minlength='7' maxlength='7' required>
               
                    <label>Phone:</label>
                    <input class="form-control" style="width:350px" type="number" name="phone" minlength='11' maxlength='12' required>
                
                    <label>Year of Birth:</label>
                    <input class="form-control" style="width:350px" type="date" name="yob" required>
                </div>
                    <input class="btn btn-success" type="submit" value="Add Record">
            </form>
            <br>
            <a href="my_menu.php"><button class="btn btn-warning">Cancel</button></a>
            
        </div>
    </body>
</html>




