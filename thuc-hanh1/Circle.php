<?php 

include_once ('Shape.php');

class Circle extends Shape
{
    public int $radius;

    public function __construct(string $name, int $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function calculateArea(): float
    {
        return pi() * pow($this->radius, 2);
    }

    public function calculatePerimeter(): float
    {
        return pi() * $this->radius * 2;
    }
}
?>