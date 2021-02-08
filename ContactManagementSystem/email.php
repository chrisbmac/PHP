<!DOCTYPE html>
<html>
    <head>
        <title>Add a Record</title>
    </head>
    <body>
        <form method="POST" action="model.php">
            <input type="hidden" name="from" value="email">
            <label>Subject:</label>
            <input type="text" name="subject" required>
            
            <label>Body:</label>
            <textarea name="body" required></textarea>
            <input type="submit" value="Send Email">
        </form>
        <a href="my_menu.php"><button>Cancel</button></a>
    </body>
</html>