<!DOCTYPE html>
<html>
    <head>
        <title>Add a Record</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light"><h3>Send an email to your clients</h3></nav>
        <br>
            <form method="POST" action="model.php" class="form-group">
                <input type="hidden" name="from" value="email">
                <div>
                <label class="form-label">Subject:</label>
                <input class="form-control" style="width: 450px;" type="text" name="subject" required>
                </div>
                <div>
                <label class="form-label">Body:</label>
                <textarea class="form-control" style="width: 450px; height:500px;" name="body" required></textarea>
                <br>
                <input class="btn btn-success" type="submit" value="Send Email">
                </div>
            </form>

            <a href="my_menu.php"><button class="btn btn-warning">Cancel</button></a>
        </div>
    </body>
</html>