<!DOCTYPE html>
<html>
    <head>
        <title>Show all</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h3>Display all contacts</h3>
            <a href="my_menu.php"><button class="btn-warning">Cancel</button></a>
            <form method="POST" action="model.php" class="form-group">
                <input type="hidden" name="from" value="email">
                <?php 
                    include 'model.php';
                    $dbArray = displayAll();
                    foreach($dbArray as $item){
                        
                        echo " 
                        <div> {$item['fname']} </div> 
                        <div> {$item['lname']} </div>
                        <div> <input type='hidden' name='emailTO' value='{$item['email']}'>{$item['email']} </div>
                        <div> {$item['phone']} </div>
                        <div> {$item['streetaddress']} </div>
                        <div> {$item['city']} </div>
                        <div> {$item['province']} </div>
                        <div> {$item['postalcode']} </div>
                        <div> {$item['yob']} </div>
                        <input type='submit' value='Email Contact' class='btn-success'>
                        <div>------------------------------- </div>";
                        
                    }
                ?>

                
            </form>
        </div>
    
    </body>
</html>