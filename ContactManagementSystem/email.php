<!DOCTYPE html>
<html>
    <head>
        <title>Add a Record</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h3>Send an email to clients</h3>
            <form method="POST" action="model.php" class="form-group">
                <input type="hidden" name="from" value="email">
                <div>
                <label>Subject:</label>
                <input class="form-control" type="text" name="subject" required>
                </div>
                <div>
                <label>Body:</label>
                <textarea class="form-control" name="body" required></textarea>
                <input class="btn-success" type="submit" value="Send Email">
                </div>
            </form>
            <a href="my_menu.php"><button class="btn-warning">Cancel</button></a>
        </div>
    </body>
</html>