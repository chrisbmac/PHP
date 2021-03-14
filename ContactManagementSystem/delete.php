
<!DOCTYPE html>
<html>
    <head>
        <title>Delete</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                
                <h3 style="margin-right:50px;">Delete Contact</h3>
            </nav>
            <br><h5>Select A Contact To Delete</h5><br>
            <div class="btn-group btn-group-toggle">
                <form method="POST" action="model.php">
                    <input type="hidden" name="from" value="delete">
                    <?php 
                        include 'model.php';
                        $dbArray = displayAll();
                        foreach($dbArray as $item){
                            echo "<div class='form-check'>
                            <input class='form-check-input' type='radio' name='deleteradio' value='{$item['contactID']}' ><h5 class='text-secondary'>". $item['fname'] . " " . $item['lname'] ."</h5>"."
                            </div>";
                        }
                    ?>
                    <br>
                    <div class="form-group">
                    <input type="submit" value="Delete Record" class="btn btn-danger">
                </form>
                <a href="my_menu.php"><button class="btn btn-warning">Cancel</button></a>
            </div>
            </div>
        </div>
    </body>
</html>