
<!DOCTYPE html>
<html>
	<head>
		<title>Contacts Birthday</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	</head>
	<body>
        <div class="container">
            <?php 
                require 'model.php';
                $todayDate = date("Y-m-d");
                echo "<nav class='navbar navbar-expand-lg navbar-light bg-light'><h3>Todays Date: ". $todayDate."</h3></nav>";
                $dbArray = fetchByDate();
                if(count($dbArray) == 0){
                    echo "<br><div class='text-secondary'>None of your contacts birthdays are this month.</div><br>";
                } else {
                foreach ($dbArray as $item){
                    echo "<div>" . $item['fname'] ." ". $item['lname']."<br>".$item['phone']."<br>".$item['email']."<br>"."-----------------"."<br>"."</div>";
                }
            }
            ?>
            <a href="my_menu.php"><button class="btn btn-warning">Go Back</button></a>
        </div>
    </body>
</html>