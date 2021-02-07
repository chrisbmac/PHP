<?php 
    if(isset($_POST['from'])){
        if($_POST['from'] == 'add'){
            add();

        } else if($_POST['from'] == 'delete'){
            delete();

        } else if($_POST['from'] == 'edit'){
            if($_POST['contactID'] == NULL || $_POST['contactID'] < 0 ) {
                echo "This is contactID" . $_POST['contactID'];
                header("Location: my_menu.php");
            }
            edit($_POST['contactID']);

        } else {
            displayAll();
        }
    } else {
        //header("Location: my_menu.php");
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
        header("Location: my_menu.php");
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
    
    function selectSingle($contactID){
        require 'config.php';
        echo 'in selectSingle' . $contactID;
        $query = $CONNECTION_STRING->prepare("SELECT FROM contactscms WHERE contactID=:contactID");
        $query->bindParam(':contactID', $contactID);
        $query->execute();
        $dbArray = $query-> fetch();
        print_r($dbArray);
        return $dbArray;
    }

    function edit($contactID){
        echo '<br>'.'in edit function' . $contactID;
        require 'config.php';
        try{
            $query = $CONNECTION_STRING->prepare("UPDATE contactscms SET contactID=:contactID, fname=:fname, lname=:lname, email=:email, streetaddress=:streetaddress, city=:city, province=:province, postalcode=:postalcode, phone=:phone, yob=:yob WHERE contactID=:contactID");
            $query->execute(array(
                ':contactID' => $contactID,
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
        header("Location: my_menu.php");

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
        

        
    