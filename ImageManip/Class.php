<?php 
class MyImage {

    public $src;
    public $imageSize = array();
    public $imageType;
    public $newImageName;

    public function __construct()
    {
        $this->src = "dEALCO ENTITY RELATION DIAGRAM.PNG";
        $this->newImageName = "";
    }

    // create thumbnail with new name and desired sizes int
    public function thumbnail($name, $h, $w){
        $width = 0;
        $height = 0;
        list($width, $height) = getimagesize($this->src);
        $new_w = $width / $w;
        $new_h = $height / $h;
        $cr_img = imagecreatefrompng($this->src);
        $dest = imagecreatetruecolor($new_w, $new_h);
        $this->newImageName = $name .".png";
        imagecopyresampled($dest, $cr_img, 0, 0, 0, 0, $new_w, $new_h, $width, $height);
        imagepng($dest, $this->newImageName, 5);
        //return $this-
    }
    
    public function get_newImgInfo(){
        return $this->imageSize = getimagesize($this->newImageName);
    }

    // create an image using base64
    public function get_image() {
        $image_data = base64_encode(file_get_contents($this->src));
        $img = 'data:'.mime_content_type($this->src).';base64,'.$image_data;
        //echo "<img src=\"$img\" >";
    }
}

class MyImage_Medium extends MyImage {

}

class MyImage_Small extends MyImage {
   
}

class MyImage_XSmall extends MyImage {
   
}

// Testing
/*$myi = new MyImage;
$myi->get_image();
$myi->thumbnail("big", 2, 2);

$m = new MyImage_Medium;
$m->thumbnail("medium", 3, 3);

$s = new MyImage_Small;
$s->thumbnail("small", 4, 4);

$xs = new MyImage_XSmall;
$xs->thumbnail("xsmall", 5, 5);*/


