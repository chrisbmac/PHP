
<!DOCTYPE html>
<html>
    <head>
        <title>Add a Record</title>
    </head>
    <body>
        <form method="POST" action="model.php">
            <input type="hidden" name="from" value="delete">
            <?php 
                include 'model.php';
                $dbArray = displayAll();
                foreach($dbArray as $item){
                    echo "<div><input type='radio' name='deleteradio' value='{$item['contactID']}' >". $item['fname'] . " " . $item['lname'] ."</div>";
                }
            ?>

            <input type="submit" value="Delete Record">
        </form>
        <a href="my_menu.php"><button>Cancel</button></a>
    
    </body>
</html>