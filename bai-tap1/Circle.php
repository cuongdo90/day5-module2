<?php 

class Circle 
{
    protected $radius;
    protected $color;

    public function __construct(string $color, int $radius)
    {
        $this->color = $color;
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

    public function __toString()
    {
        return 'mau:'.$this->color .'<br>'. 'ban kinh:'.$this->radius;
    }
         
}
?>