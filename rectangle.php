<?php


class Rectangle
{
public $width;
public $height;

    /**
     * rectangle constructor.
     * @param int $width
     * @param int $height
     */
    public function __construct( $width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
    public function getArea(){
        return $this->height * $this->width;
    }

    //tinh chu vi

    public function  getPerimeter(){
        return (($this->width + $this->height) * 2);
    }

    public function display(){
        return "Rectangle{" . "width=" . $this->width . ", height=" . $this->height . "}";
    }
}

$rectangle = new Rectangle(30,40);
echo $rectangle->width;
echo '<br>';
echo $rectangle->height;
echo '<br>';
echo $rectangle->getArea();
echo '<br>';
echo $rectangle->display();
echo '<br>';
echo $rectangle->getPerimeter();
?>