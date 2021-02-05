<?php 
    
        
        if(isset($_POST['from'])){
            if($_POST['from'] == 'add'){
                add();
                echo "its add";
            } else if($_POST['from'] == 'delete'){
                delete();
            }
        } else {
            displayAll();
        }
  
        
       function add(){
            echo 'this is fname' . $_POST['fname'];
            require 'config.php';
            echo"in add";
            
            //$pdo = new PDO('mysql:host=localhost;dbname=music', 'chris', 'password');
            
            try{
                //$sql = "INSERT INTO contactscms VALUES (contactID, :fname, :lname, :email, :streetaddress, :city, :province, :postalcode, :phone, :yob)";
                //$query = $pdo->prepare($sql);
                $query = $CONNECTION_STRING->prepare("INSERT INTO contactscms VALUES (contactID, :fname, :lname, :email, :streetaddress, :city, :province, :postalcode, :phone, :yob)");
                $query->execute(array(
                    ':fname' => $_POST['fname'],
                    ':lname' => $_POST['lname'],
                    ':email' => $_POST['email'],
                    ':streetaddress'=>$_POST['streetaddress'],
                    ':city' => $_POST['city'],
                    ':province' => $_POST['province'],
                    ':postalcode' => $_POST['postalcode'],
                    ':phone' => $_POST['phone'],
                    ':yob' => $_POST['yob']
                )); 
            } catch (PDOException $e) {
                echo 'Connection Failed:'. $e->getMessage();
                exit;
            }
        }

        function delete(){
            require 'config.php';
            $deleteID = $_POST["deleteradio"];
            echo $deleteID;
            $query = $CONNECTION_STRING->prepare("DELETE FROM contactscms WHERE contactID = :contactID");
            $query->execute(array(':contactID'=>$deleteID));
            header("Location: my_menu.php");
        }

        function displayAll(){
            require 'config.php';
            $query = $CONNECTION_STRING->prepare("SELECT * FROM contactscms");
            $query->execute();
            $dbArray = $query-> fetchAll();
            //print_r($dbArray);
            return $dbArray;
        }

        /*function fetchByDate(){
            require 'config.php';
            $thisMonth = date("m");
            //$thisMonth = date("Y-m-d");
            echo 'this is this month'.$thisMonth;
            //$query = $CONNECTION_STRING->prepare("SELECT * FROM contactscms WHERE MONTH()");
            $query = $CONNECTION_STRING->prepare("SELECT * FROM contactscms WHERE MONTH(yob) = $thisMonth");
            $query->execute();
            $dbArray = $query-> fetchAll();
            print_r($dbArray);
            foreach ($dbArray as $item){
                echo $item['fname'];
            }
            
            //print_r($dbArray);
            return $dbArray;
        }*/
        

        
    