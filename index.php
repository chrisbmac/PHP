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
            <div>
                <h4>Find out how much you could have saved from ? till ?</h4>
                <form method="POST" action="howMuchSaved.php" class="form-group">
                    <div class="form-control">
                        <label>Starting Age:</label>
                        <input type="number" name="startAge" required>
                    </div>
                    <div class="form-control"> 
                        <label>Till what Age?:</label>
                        <input type="number" name="endAge" required>
                    </div>
                    <div class="form-control">
                        <label>How often would you want to save (e.g., how often you were putting money away)?</label>
                        <input type="radio" name="howOften" value>
                    </div>
                    <input type="submit" value="Check">
                </form>
            </div>
                 
            <div>
            <h4>Find out how much money you spend on certain items in a year.</h4>
                <form method="POST" action="calcMS.php">
                    <div class="form-group ">
                        <label>The expenses name:</label>
                        <input class="form-control " type="text" name="expense_name" pattern="[a-zA-Z]{1,}" required >
                    
                        <label>Cost: </label>
                        <input class="form-control" type="number" step="0.01" name="cost_item" required>
                    
                        <label>How many times is this purchased in a MONTH?:</label>
                        <input class="form-control" type="number" name="numTimes_purchasedMonth" required>
                    
                        <input class="btn btn-success" type="submit" value="Check">
                    </div>   
                </form>
            </div>
        </div>
    </body>
</html>