<?php 
    // call the function depending on where the post came from
    if(isset($_POST['from'])){
        if($_POST['from'] == 'add'){
            add();

        } else if($_POST['from'] == 'delete'){
            delete();

        } else if($_POST['from'] == 'edit'){
            
            if($_POST['contactID'] == NULL || $_POST['contactID'] < 0 ) {
                echo "This is contactID" . $_POST['contactID'];
                header("Location: my_menu.php");
            } else {
                edit($_POST['contactID']);
            }

        } else if($_POST['from'] == 'email'){
            email();
        
        } else if($_POST['from'] == 'file'){
            upload();

        } else if($_POST['from'] =='download'){
            download();
        
        } else {
            displayAll();
        }
    } else {
        //header("Location: my_menu.php");
    }

    // Download file with all client info
    function download(){
        require 'config.php';
        $query = $CONNECTION_STRING->prepare("SELECT * FROM contactscms");
        $query->execute();
        $dbArray = $query-> fetchAll(PDO::FETCH_ASSOC);
        
        $fileName = 'files/dlClients.csv';
        $file = fopen($fileName, "w+") or die("Couldnt Open file.");
        
        foreach($dbArray as $i){
            fputcsv($file, $i);
        }
        fclose($file);
       
        //header("Location: my_menu.php");
        
    }

    // Upload a csv with clients info
    function upload(){
        require 'config.php';
        
        $tempName = $_FILES["file"]["tmp_name"];
        $name = basename($_FILES['file']['name']);;

        // Add csv to array, loop through and add to sql db tb
        if(move_uploaded_file($tempName, "files/$name")){
            
            $filename = "files/$name";
            $whattoread = @fopen($filename, "r") or die("Couldn't open file");
            //$file_contents = fread($whattoread, filesize($filename)); 
            $bigArr = [];

            // loop through array, check if exists or insert
            if(($h = fopen("{$filename}", "r")) !== FALSE){
                while (($data = fgetcsv($h, 1000, ",")) !==FALSE){ 
                    $bigArr[]=$data;  
                }
                fclose($h);
            }
            
            foreach($bigArr as $key=>$i){
                if(count($i) <= 1){
                    unset($bigArr[$key]);
                }
            }
               
            $num = 0;
            foreach($bigArr as $key=>$item){
                foreach($bigArr[$key] as $value){
                    if($num >= 9){
                        $num=0; 
                    }
                    $num++;
                }
                    
                try{
                    $sql = "IF EXISTS(select fname from contactscms where fname=:fname1) THEN UPDATE contactscms UPDATE contactscms SET fname=:fname, lname=:lname, email=:email, streetaddress=:streetaddress, city=:city, province=:province, postalcode=:postalcode, phone=:phone, yob=:yob WHERE fname=:fname1";
                    
                    $sql = "INSERT INTO contactscms (contactID, fname, lname, email, streetaddress, city, province, postalcode, phone, yob) VALUES (:contactID, :fname, :lname, :email, :streetaddress, :city, :province, :postalcode, :phone, :yob) ON DUPLICATE KEY UPDATE contactID=:contactID; UPDATE contactscms SET fname=:fname WHERE contactID=:contactID";
                    $query = $CONNECTION_STRING->prepare($sql);
                    
                    $query->execute(array(
                        ':fname1' => $bigArr[$key][1],
                        'contactID' => $bigArr[$key][0],
                        ':fname' => $bigArr[$key][1],
                        ':lname' => $bigArr[$key][2],
                        ':email' => $bigArr[$key][3],
                        ':streetaddress'=> $bigArr[$key][4],
                        ':city' => $bigArr[$key][5],
                        ':province' => $bigArr[$key][6],
                        ':postalcode' => $bigArr[$key][7],
                        ':phone' => $bigArr[$key][8],
                        ':yob' => $bigArr[$key][9]
                    )); 
        
            } catch(PDOException $e) {
                echo 'Connection Failed:'. $e->getMessage();
                    
                }
            }
                
            header("Location: my_menu.php");
        } else {
            echo "Problem uploading file";
            header("Location: upload.php");
        }

    }

    // Add new contacts
    function add(){
        require 'config.php';
       
        try{
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

    // delete contacts
    function delete(){
        require 'config.php';
        $deleteID = $_POST["deleteradio"];
        echo $deleteID;
        $query = $CONNECTION_STRING->prepare("DELETE FROM contactscms WHERE contactID = :contactID");
        $query->execute(array(':contactID'=>$deleteID));
        header("Location: my_menu.php");
    }

    // display all contacts
    function displayAll(){
        require 'config.php';
        $query = $CONNECTION_STRING->prepare("SELECT * FROM contactscms");
        $query->execute();
        $dbArray = $query-> fetchAll(PDO::FETCH_ASSOC);
        return $dbArray;
    }
    
    // select a single contact
    function selectSingle($contactID){
        require 'config.php';
        $query = $CONNECTION_STRING->prepare("SELECT * FROM contactscms WHERE contactID=:contactID");
        $query->bindParam(':contactID', $contactID);
        $query->execute();
        $dbArray = $query->fetch(PDO::FETCH_ASSOC);
        $newArr = [];
        foreach($dbArray as $i){
            $a = ltrim($i);
            array_push($newArr, $a);
        }
        var_dump($newArr);
        return $newArr;
    }

    // edit a single contact
    function edit($contactID){
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

    // fetch contacts that yob is the current month
    function fetchByDate(){
        require 'config.php';
        $thisMonth = date("m");
        $query = $CONNECTION_STRING->prepare("SELECT * FROM contactscms WHERE MONTH(yob) = $thisMonth");
        $query->execute();
        $dbArray = $query-> fetchAll();
        return $dbArray;
    }

    // email all contacts
    function email(){
        require 'config.php';
        
        $body = wordwrap($_POST['body']);
        $subject = $_POST['subject'];
        $query = $CONNECTION_STRING->prepare("SELECT email FROM contactscms");
        $query->execute();
        $dbArray = $query-> fetchAll();
        print_r($dbArray);
        foreach($dbArray as $item){
            mail($item['email'], $subject, $body);
        }
        header("Location: my_menu.php");
        //mail();
    }
        
    
        

        
    