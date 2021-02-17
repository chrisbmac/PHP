<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>How Much Saved</title>
</head>
<body>
    <?php 
        
        if(!isset($_POST['howOften'])){
            header("Location: ./router.php");
            die();
        }
        // posts
        $startAge = $_POST['startAge'];
        $endAge = $_POST['endAge'];
        $howOften = $_POST['howOften'];
        $money_amnt = $_POST['money'];

        $yearlyTotal = 0;

        $yrs_between = 0;

        if($howOften == "daily") {
            $yrs_between = $endAge - $startAge;
            $total = ($money_amnt * 365) * $yrs_between;
            
            $yearlyTotal = ($money_amnt * 365);
        } else if($howOften == "monthly"){
            $yrs_between = $endAge - $startAge;
            $total = ($money_amnt * 12) * $yrs_between;
            
            $yearlyTotal = ($money_amnt * 12);
        } else if($howOften == "weekly"){
            $yrs_between = $endAge - $startAge;
            $total = ($money_amnt * 52.1429) * $yrs_between;
            
            $yearlyTotal = ($money_amnt * 12);
        }

        echo '<div class="container">
                <br><h3>Your Results</h3><br>
                <table class="table"><thead>
                    <tr> 
                        <th scope="col">How Often</th>
                        <th scope="col">How Much Money</th>
                        <th scope="col">Starting Age</th>
                        <th scope="col">Ending Age</th>
                        <th scope="col">Years Between</th>
                        <th scope="col">Yearly Savings</th>
                        <th scope="col">Total Savings</th>
                    </tr>
                    <tr>
                        <td>'.$howOften.'</td>
                        <td>'.$money_amnt.'</td>
                        <td>'.$startAge.'</td>
                        <td>'.$endAge.'</td>
                        <td>'.$yrs_between.'</td>
                        <td>'.$yearlyTotal.'</td>
                        <td>'.$total.'</td>
                    </tr>
                </table>
            </div>';
        ?>
        <div class="container">
            <form method="POST" action="./router.php" class="form-group">
                        <input type="hidden" name="request_url" value="/indexHWS">
                        <input class="btn-warning" type="submit" value="Go Back">
            </form>
        </div>
</body>
</html>