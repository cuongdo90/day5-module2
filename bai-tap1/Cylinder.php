<?php 

include_once "Circle.php";

class Cylinder extends Circle
{
    protected $height;

    public function __construct(string $color, int $radius, int $height)
    {
       parent::__construct($color,$radius);
       $this->height = $height;
    }

    public function calculateArea(): float
    {
        return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
    }

    public function calculateVolume()
    {
        return parent::calculateArea() * $this->height;
    }

    public function __toString()
    {
        return 'mau:'.$this->color .'<br>'. 'ban kinh:'.$this->radius. '<br>'. 'chieu cao:'.$this->height;
    }
}

?>