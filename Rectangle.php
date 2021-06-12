<?php
class Rectangle{
    public $width;
    public $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }


    public function getArea()
    {
        return ($this->width+$this->height)*2;
    }

    public function getPerimeter()
    {
        return $this->height*$this->width;
    }
    public function disPlay(){
        echo "width= $this->width , height= $this->height<br>";
    }

}
$rectangle=new Rectangle('5','6');
$rectangle->disPlay();
echo "Area :".$rectangle->getArea();
echo '<br>';
echo "Perimeter :".$rectangle->getPerimeter();