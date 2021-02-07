
<!DOCTYPE html>
<html>
	<head>
		<title>My Menu</title>
	</head>
	<body>
        <form method="POST">
        
        </form>
        <?php 
            require 'model.php';
            
            function fetchByDate(){
                require 'config.php';
                $thisMonth = date("m");
                $todayDate = date("Y-m-d");
                echo "<h3>". $todayDate."</h3>";
                
                $query = $CONNECTION_STRING->prepare("SELECT * FROM contactscms WHERE MONTH(yob) = $thisMonth");
                $query->execute();
                $dbArray = $query-> fetchAll();
                
                foreach ($dbArray as $item){
                    echo "<div>" . $item['fname'] ." ". $item['lname']."<br>".$item['phone']."<br>".$item['email']."<br>"."-----------------"."<br>"."</div>";
                }
                
                
                return $dbArray;
            }
            fetchByDate();
            
        ?>

    </body>
</html>