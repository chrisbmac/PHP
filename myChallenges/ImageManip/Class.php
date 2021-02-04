<?php 
class MyImage {

    public $src;
    public $imageSize = array();

    public function __construct()
    {
        $this->src = "dEALCO ENTITY RELATION DIAGRAM.PNG";
        $this->imageSize = getimagesize($this->src);
        
    }

    public function get_image() {

        //$image_str = imagecreatefromstring(file_get_contents($this->src));
        $image_data = base64_encode(file_get_contents($this->src));
        $img = 'data:'.mime_content_type($this->src).';base64,'.$image_data;
        echo "<img src=\"$img\" >";
    }

    public function echothis(){
        print_r($this->imageSize);
        echo "<br>" . $this->imageSize[0];
        //echo $imageSize;
    }
    
    
}
$myi = new MyImage;
$myi->get_image();
$myi->echothis();
