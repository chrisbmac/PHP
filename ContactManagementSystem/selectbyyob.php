
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
                //$thisMonth = date("Y-m-d");
                echo 'this is this month'.$thisMonth;
                //$query = $CONNECTION_STRING->prepare("SELECT * FROM contactscms WHERE MONTH()");
                $query = $CONNECTION_STRING->prepare("SELECT * FROM contactscms WHERE MONTH(yob) = $thisMonth");
                $query->execute();
                $dbArray = $query-> fetchAll();
                //print_r($dbArray);
                foreach ($dbArray as $item){
                    echo $item['fname'];
                }
                
                //print_r($dbArray);
                return $dbArray;
            }
            fetchByDate();
            //echo "Today is " . date("Y-m-d") . "<br>";
            //echo "Today is " . date("m") . "<br>";
        ?>

    </body>
</html>