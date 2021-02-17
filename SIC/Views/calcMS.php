<?php
    if(!empty($_POST["expense_name"]) || !empty($_POST["cost_item"]) || !empty($_POST["numTimes_purchasedMonth"])) {
        if (is_numeric($_POST["cost_item"]) || is_numeric($_POST["numTimes_purchasedMonth"])) {
            if(is_string($_POST["expense_name"]) && !ctype_space($_POST["expense_name"]) && !is_numeric($_POST["expense_name"])){
               /* echo "everything is good";
                echo $_POST["expense_name"];
                echo $_POST["cost_item"];
                echo $_POST["numTimes_purchasedMonth"];*/

                //------------------------------------------
                // vars from post
                $exp_N = $_POST["expense_name"];
                $exp_I = $_POST["cost_item"];
                $exp_NT = $_POST["numTimes_purchasedMonth"];
                
                // avg days in month
                $daysIn_Month = 365 / 12;
                //echo $daysIn_Month;
                
                // total items in a year
                $totalItems_Year = 12 * $exp_NT;

                // calculate
                $totalExp_Month = $exp_I * $exp_NT;
                $totalExp_Year = $totalExp_Month * 12;
                

                // redirect back to index
            } else { echo "**expense name failed";header("Location: index.php");exit;}
            //echo "**numbers good";
        } else {echo "**must enter numbers";header("Location: index.php");exit;}
        //echo "inputs good";
    } else {echo "**Empty inputs";header("Location: index.php");exit;}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>How much are you spending</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./site.css">
</head>
    <body>
        <div class="container">
            <h2>This is how much you are spending a year on <em><?php echo $exp_N ?>.</em></h2> 
            <div>
                Single Price of <?php echo "<em>" . $exp_N ."</em>" . ": " . "<strong>"."$" . $exp_I . "</strong>"?>
            </div>
                
            <div>
                Total Amount of <em><?php echo $exp_N?></em> Per Month: <strong> <?php echo $exp_NT?></strong>
            </div>
            <div>
                Total Cost of <em><?php echo $exp_N?></em> Per Month: <strong> <?php echo "$". $totalExp_Month?> </strong>
            </div>
            <div>
                Total Amount of <em><?php echo $exp_N?></em> Per Year: <strong> <?php echo $totalItems_Year?></strong>
            </div>
            <div>
                Total Cost Per Year: <strong>$<?php echo $totalExp_Year?></strong>
            </div>
            <div>
                <form method="POST" action="index.php">
                    <input type="submit" value="Go Back">
                </form>
            </div>
        </div>
    </body>
</html>

