
<!DOCTYPE html>
<html>
    <head>
        <title>Add a Record</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
        <h3>Delete Contact</h3>
            <form method="POST" action="model.php">
                <input type="hidden" name="from" value="delete">
                <?php 
                    include 'model.php';
                    $dbArray = displayAll();
                    foreach($dbArray as $item){
                        echo "<div><input class='form-check-input' type='radio' name='deleteradio' value='{$item['contactID']}' >". $item['fname'] . " " . $item['lname'] ."</div>";
                    }
                ?>
                <br>
                <input type="submit" value="Delete Record" class="btn-success">
            </form>
            <br>
            <a href="my_menu.php"><button class="btn-warning">Cancel</button></a>
        </div>
    </body>
</html>