<?php
     require 'config.php';
	$db_name = "music";
	$table_name = "my_music";
    $display_block = "";
	$connection = @mysqli_connect("localhost", "chris", "password")
	     or die(mysqli_error($connection));
	$db = @mysqli_select_db($connection, $db_name) or die(mysqli_error($connection));
	$sql = $CONNECTION_STRING->prepare("SELECT id, format, title, artist_fn, artist_ln, rec_label, 
	   my_notes, date_acq FROM $table_name ORDER BY id");
	//$result = @mysqli_query($connection, $sql) or die(mysqli_error($connection));
     $sql->execute();
     while ($row = $sql->fetch()) {
        $id = $row['id'];
        $format = $row['format'];
        $title = stripslashes($row['title']);
        $artist_fn = stripslashes($row['artist_fn']);
        $artist_ln = stripslashes($row['artist_ln']);
        $rec_label = stripslashes($row['rec_label']);
        $my_notes = stripslashes($row['my_notes']);
        $date_acq = $row['date_acq'];
        if ($artist_fn != "") {
            $artist_fullname = trim("$artist_fn $artist_ln");
            } else {
                 $artist_fullname = trim("$artist_ln");
            }
            if ($date_acq == "0000-00-00") {
                 $date_acq = "[unknown]";
        }
        $display_block .= "<P><strong>$title</strong> on $rec_label,
           by $artist_fullname<br>
        $my_notes <em>(acquired:$date_acq, format:$format)</em></p>";
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>My Music (Ordered by ID)</title>
	</head>
	<body>
		<h1>My Music: Ordered by ID</h1>
		<?php echo "$display_block"; ?>
		<p><a href="my_menu.html">Return to Menu</a></p>
	</body>
</html>
