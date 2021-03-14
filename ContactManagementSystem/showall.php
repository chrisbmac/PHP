<!DOCTYPE html>
<html>
    <head>
        <title>Show all</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light"><h3 style="margin-right:150px;">Display all contacts</h3> <a href="my_menu.php"><button class="btn btn-warning">Go Back</button></a></nav><br>
            
            <br>
            <h5>Displaying all contacts</h5>
            <div class='text-secondary'>------------------------------- </div>
            <br>
            <form method="POST" action="model.php" class="form-group">
                <input type="hidden" name="from" value="email">
                <?php 
                    include 'model.php';
                    $dbArray = displayAll();
                    foreach($dbArray as $item){
                        
                        echo " 
                        <div class='text-primary'> {$item['fname']} </div> 
                        <div class='text-primary'> {$item['lname']} </div>
                        <div class='text-secondary'> <input type='hidden' name='emailTO' value='{$item['email']}'>{$item['email']} </div>
                        <div class='text-secondary'> {$item['phone']} </div>
                        <div class='text-secondary'> {$item['streetaddress']} </div>
                        <div class='text-secondary'> {$item['city']} </div>
                        <div class='text-secondary'> {$item['province']} </div>
                        <div class='text-secondary'> {$item['postalcode']} </div>
                        <div class='text-secondary'> {$item['yob']} </div>
                        <input type='submit' value='Email Contact' class='btn btn-secondary'>
                        <div class='text-secondary'>------------------------------- </div>";
                        
                    }
                ?>

                
            </form>
        </div>
    
    </body>
</html>