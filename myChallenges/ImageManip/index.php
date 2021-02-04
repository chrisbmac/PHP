<?php
    require 'Image.php';
    $norm = new MyImage;
    $norm->thumbnail("big", 2, 2);
    //$norm->get_image();

    $m = new MyImage_Medium;
    $m->thumbnail("medium", 3, 3);
    //$m->get_image();

    $s = new MyImage_Small;
    $s->thumbnail("small", 4, 4);
    //$s->get_image();

    $xs = new MyImage_XSmall;
    $xs->thumbnail("xsmall", 5, 5);
    $xs_info = $xs->get_newImgInfo();
    //$xs->get_image();
?>

<!DOCTYPE html>
<html>
<head>
<title>Thumbnails</title>
</head>
    <body>
        <div style="display: flex; flex-direction: row;">
            <img src="big.png">
            <div>
                <p>Width:<?php echo($xs_info[0]) ?></p>
                <p>Height:<?php echo($xs_info[1]) ?></p>
                <p>Bits:<?php echo($xs_info['bits']) ?></p>
                <p>Mime:<?php echo($xs_info['mime']) ?></p>
            </div>
        </div>
        <div style="display: flex; flex-direction: row; justify-content:space-around;">
            <img src="medium.png">
            <img src="small.png">
            <img src="xsmall.png">
            
        </div>

    </body>
</html>